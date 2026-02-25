<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <!-- Header with button -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title m-0">Datatables</h5>
                        <a href="/tambah-data-akun" class="btn btn-primary">
                            <i class="bi bi-plus-lg"></i> Tambah Akun
                        </a>
                    </div>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Dibuat Pada</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->nama_lengkap }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ ucfirst($user->role) }}</td>
                                <td>{{ $user->created_at ? $user->created_at->format('Y/m/d') : '-' }}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-warning me-1" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="" method="POST" class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus akun ini?')">
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
                    <!-- End Table with stripped rows -->
                </div>
            </div>

        </div>
    </div>
</section>

</main><!-- End #main -->