<main id="main" class="main">

    <div class="pagetitle">
        <h1>Rekap Absensi</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Master Admin</li>
                <li class="breadcrumb-item active">Rekap Absensi</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <!-- Header -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title m-0">Rekap Absensi Santri</h5>
                        </div>

                        <!-- Filter -->
                        <div class="row mb-3">

                            <div class="col-md-3">
                                <label class="form-label">Kelas</label>

                                <select wire:model.live="id_kelas" class="form-control">
                                    <option value="">Pilih Kelas</option>

                                    @foreach($kelasList as $kelas)
                                        <option value="{{ $kelas->id }}">
                                            {{ $kelas->nama_kelas }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Bulan</label>

                                <select wire:model.live="bulan" class="form-control">
                                    <option value="">Pilih Bulan</option>
                                    @foreach(range(1,12) as $b)
                                        <option value="{{ $b }}">
                                            {{ date('F', mktime(0,0,0,$b,1)) }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="col-md-2">
                                <label class="form-label">Tahun</label>
                                <input type="number" wire:model.live="tahun" class="form-control">
                            </div>

                        </div>

                        <!-- Table -->
                        <div class="table-responsive">

                            <table class="table table-bordered table-sm text-center">

                                <thead>

                                    <!-- Header tanggal -->
                                    <tr>

                                        <th rowspan="2">No</th>
                                        <th rowspan="2">Nama</th>

                                        @for($i=1;$i<=$jumlahHari;$i++)

                                            <th colspan="2">
                                                {{ sprintf('%02d/%02d/%d',$i,$bulan,$tahun) }}
                                            </th>

                                        @endfor

                                    </tr>

                                    <!-- Header sesi -->
                                    <tr>

                                        @for($i=1;$i<=$jumlahHari;$i++)

                                            <th>Pagi</th>
                                            <th>Malam</th>

                                        @endfor

                                    </tr>

                                </thead>

                                <tbody>

                                    @forelse($santriList as $index => $santri)

                                        <tr>

                                            <td>{{ $index+1 }}</td>

                                            <td class="text-start">
                                                {{ $santri->nama }}
                                            </td>

                                            @for($i=1;$i<=$jumlahHari;$i++)

                                                @php
                                                    $pagi = $rekap[$santri->id][$i][1] ?? '-';
                                                    $malam = $rekap[$santri->id][$i][2] ?? '-';
                                                @endphp

                                                <td>

                                                    @if($pagi == 'hadir')
                                                        <span class="badge bg-success">H</span>

                                                    @elseif($pagi == 'izin')
                                                        <span class="badge bg-warning">I</span>

                                                    @elseif($pagi == 'sakit')
                                                        <span class="badge bg-info">S</span>

                                                    @elseif($pagi == 'alpha')
                                                        <span class="badge bg-danger">A</span>

                                                    @else
                                                        -
                                                    @endif

                                                </td>

                                                <td>

                                                    @if($malam == 'hadir')
                                                        <span class="badge bg-success">H</span>

                                                    @elseif($malam == 'izin')
                                                        <span class="badge bg-warning">I</span>

                                                    @elseif($malam == 'sakit')
                                                        <span class="badge bg-info">S</span>

                                                    @elseif($malam == 'alpha')
                                                        <span class="badge bg-danger">A</span>

                                                    @else
                                                        -
                                                    @endif

                                                </td>

                                            @endfor

                                        </tr>

                                    @empty

                                        <tr>
                                            <td colspan="{{ ($jumlahHari * 2) + 2 }}">
                                                Belum ada data absensi
                                            </td>
                                        </tr>

                                    @endforelse

                                </tbody>

                            </table>

                        </div>
                        <!-- End Table -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>