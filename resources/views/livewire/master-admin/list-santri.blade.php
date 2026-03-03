<div>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Santri</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item">Master Admin</li>
          <li class="breadcrumb-item active">List Santri</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data List Santri</h5>

              <!-- Table -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nomor Induk</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Orang Tua</th>
                    <th>Nomor HP</th>
                    <th>Kelas</th>
                    <th>Status Santri</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($santris as $index => $s)
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $s->nomor_induk }}</td>
                    <td>{{ $s->nama }}</td>
                    <td>
                      @if($s->jenis_kelamin == 'PRIA')
                        <span>PRIA</span>
                      @else
                        <span>WANITA</span>
                      @endif
                    </td>
                    <td>{{ $s->alamat }}</td>
                    <td>{{ $s->orang_tua }}</td>
                    <td>{{ $s->nomor }}</td>
                    <td>{{ $s->kelas->nama_kelas ?? '-' }}</td>
                    <td>{{ $s->status }}</td>
                    <!-- Kolom Aksi -->
    <td>
    <div class="d-flex gap-2">

        <!-- Detail -->
        <a href="{{ route('santri.detail', $s->id) }}"
           class="btn btn-info btn-sm">
            <i class="bi bi-eye"></i>
        </a>

        <!-- Hapus -->
        <button wire:click="delete({{ $s->id }})"
                onclick="confirm('Yakin ingin menghapus data ini?') || event.stopImmediatePropagation()"
                class="btn btn-danger btn-sm">
            <i class="bi bi-trash"></i> 
        </button>

    </div>
</td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="7" class="text-center">Data tidak ditemukan</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
              <!-- End Table -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
</div>