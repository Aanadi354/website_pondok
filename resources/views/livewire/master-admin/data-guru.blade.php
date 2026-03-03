<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Guru</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Master Admin</li>
                <li class="breadcrumb-item active">Data Guru</li>
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
                            <h5 class="card-title m-0">Data Guru</h5>
                            <a href="/tambah-data-guru" class="btn btn-primary">
                                <i class="bi bi-plus-lg"></i> Tambah Guru
                            </a>
                        </div>

                        <!-- Table -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Username</th>
                                    <th>Dibuat Pada</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->nama_lengkap }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->created_at ? $user->created_at->format('Y/m/d') : '-' }}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-warning me-1" title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>

                                            <form action="" method="POST" class="d-inline"
                                                onsubmit="return confirm('Yakin ingin menghapus guru ini?')">
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