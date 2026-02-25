<div>
<main id="main" class="main">

<div class="pagetitle">
  <h1>User</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a wire:navigate href="/dashboard">Home</a></li>
      <li class="breadcrumb-item"><a href="/user">Master User</a></li>
      <li class="breadcrumb-item active">Tambah User</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <div class="row">
              <div class="col-6">
                <h5 class="card-title">Tambah User</h5>
              </div>
            </div>
          </div>
          
          <form wire:submit.prevent="create">
    <!-- Input Nama -->
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Nama Lengkap <span class="text-danger">*</span></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    </div>

    <!-- Input Nama User -->
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Nama Panggilan <span class="text-danger">*</span></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" wire:model="nama_user">
        @error('nama_user') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    </div>

    <!-- Input Username -->
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Username <span class="text-danger">*</span></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" wire:model="username">
        @error('username') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    </div>

    <!-- Input Password -->
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Password <span class="text-danger">*</span></label>
      <div class="col-sm-10 position-relative">
        <input type="password" id="password" class="form-control" wire:model="password">
        <button type="button" class="btn btn-sm btn-outline-secondary position-absolute top-50 end-0 translate-middle-y me-2"
                onclick="togglePasswordVisibility()" style="z-index: 5;">
          <i id="eyeIcon" class="bi bi-eye"></i>
        </button>
        @error('password') <span class="text-danger d-block mt-1">{{ $message }}</span> @enderror
      </div>
    </div>

    <!-- Pilihan Level -->
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Level <span class="text-danger">*</span></label>
      <div class="col-sm-10">
        <select class="form-select" wire:model.defer="level">
          <option value="">Pilih Level</option>
          <option value="admin">Admin</option>
          <option value="manager">Manager</option>
          <option value="pegawai">Pegawai</option>
        </select>
        @error('level') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    </div>

    <!-- Input Jenis -->
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
      <div class="col-sm-10">
        <select class="form-control" wire:model="jenis">
          <option value="">Pilih Jenis Kelamin</option>
          <option value="Laki Laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
        @error('jenis') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    </div>

    <!-- Input Jabatan -->
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Jabatan</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" wire:model="jabatan">
        @error('jabatan') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    </div>

    <!-- Input Status -->
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Status</label>
      <div class="col-sm-10">
        <select class="form-select" wire:model="status">
          <option value="">-- Pilih Status --</option>
          <option value="Aktif">Aktif</option>
          <option value="Tidak Aktif">Tidak Aktif</option>
        </select>
        @error('status') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    </div>

    <!-- Input Kantor -->
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Kantor</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" wire:model="kantor">
        @error('kantor') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    </div>

    <!-- Input Tanggal Lahir -->
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" wire:model="tgl_lahir">
        @error('tgl_lahir') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    </div>

    <!-- Upload Foto -->
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Foto</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" wire:model="foto">
        @error('foto') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    </div>

    <!-- Tombol Submit -->
    <div class="row mb-3">
      <div class="col-sm-12">
        <button type="submit" class="btn btn-primary float-end">Create</button>
      </div>
    </div>
</form>


        </div>
      </div>

    </div>
  </div>
</section>

</main>
</div>
<!-- Tambahkan ini di bagian bawah sebelum penutup </body> -->
<script>
  function togglePasswordVisibility() {
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      eyeIcon.classList.remove('bi-eye');
      eyeIcon.classList.add('bi-eye-slash');
    } else {
      passwordInput.type = 'password';
      eyeIcon.classList.remove('bi-eye-slash');
      eyeIcon.classList.add('bi-eye');
    }
  }
</script>
