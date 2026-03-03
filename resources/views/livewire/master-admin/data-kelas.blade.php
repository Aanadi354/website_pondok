<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Kelas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Master Admin</li>
                <li class="breadcrumb-item active">Data Kelas</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <!-- Header with button -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title m-0">Data Kelas</h5>
                            <a href="/tambah-data-kelas" class="btn btn-primary">
                                <i class="bi bi-plus-lg"></i> Tambah Kelas
                            </a>
                        </div>

                        <!-- Table -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Nama Kelas</th>
                                    <th>Wali Kelas (Guru)</th>
                                    <th>Dibuat Pada</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelas as $item)
                                    <tr>
                                        <td>{{ $item->nama_kelas }}</td>
                                        <td>{{ $item->guru->nama_lengkap ?? '-' }}</td>
                                        <td>{{ $item->created_at ? $item->created_at->format('Y/m/d') : '-' }}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-warning me-1" title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>

                                            <form action="" method="POST" class="d-inline"
                                                onsubmit="return confirm('Yakin ingin menghapus kelas ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table -->

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>