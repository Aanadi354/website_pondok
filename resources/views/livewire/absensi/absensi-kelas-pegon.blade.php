<main id="main" class="main">

    <div class="pagetitle">
        <h1>Absensi Kelas Pegon</h1>
    </div>

    {{-- NOTIFIKASI --}}
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- MODAL PILIH TANGGAL & SESI --}}
    @if($showModal)
    <div class="modal fade show d-block" tabindex="-1" style="background: rgba(0,0,0,0.5);">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Mulai Absensi</h5>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label>Tanggal</label>
                        <input type="date" wire:model="tanggal" class="form-control">
                        @error('tanggal') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Sesi Pengajian</label>
                        <select wire:model="id_sesi" class="form-control">
                            <option value="">-- Pilih Sesi --</option>
                            @foreach($sesis as $sesi)
                                <option value="{{ $sesi->id }}">
                                    {{ $sesi->nama_sesi }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_sesi') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button wire:click="startAbsensi" class="btn btn-primary">
                        Mulai Absensi
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif

    {{-- TABEL SANTRI --}}
    @if($isStarted)

    <section class="section">
        <div class="card">
            <div class="card-body pt-4">

                <form wire:submit.prevent="save">

                    @if($santris->count() > 0)

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Induk</th>
                                <th>Nama</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($santris as $index => $santri)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $santri->nomor_induk }}</td>
                                <td>{{ $santri->nama }}</td>
                                <td>
                                    <select wire:model="status.{{ $santri->id }}" class="form-control">
                                        <option value="hadir">Hadir</option>
                                        <option value="izin">Izin</option>
                                        <option value="sakit">Sakit</option>
                                        <option value="alpha">Alpha</option>
                                    </select>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <button type="submit" class="btn btn-success">
                        Simpan Absensi
                    </button>

                    @else
                        <div class="alert alert-warning text-center">
                            Tidak ada santri aktif di kelas ini.
                        </div>
                    @endif

                </form>

            </div>
        </div>
    </section>

    @endif

</main>