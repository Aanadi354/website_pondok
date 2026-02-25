
<div>

    <div class="card mb-3">
    <div class="d-flex justify-content-center py-4">
              <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">PPPM RM</span>
              </a>
            </div>  

        <div class="card-body">

            <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Silahkan Melakukan Login</h5>
                <p class="text-center small">Enter your username &amp; password to login</p>
            </div>

@if (session()->has('error'))
    <div class="text-danger">
        {{ session('error') }}
    </div>
@endif
<br>

            <form wire:submit="login" class="row g-3 needs-validation" novalidate="">

                <div class="col-12">
                    <label for="yourUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                        <input wire:model="username" type="text"  class="form-control" id="yourUsername" required="">
                        <div class="invalid-feedback">Please enter your username.</div>
                    </div>
                </div>
                

                <div class="col-12 position-relative">
                    <label for="yourPassword" class="form-label">Password</label>

                    <div class="input-group">
                        <input wire:model="password" type="password" class="form-control" id="yourPassword" required>
                        <button type="button" class="btn btn-outline-secondary" onclick="togglePassword()" tabindex="-1">
                            <i id="toggleIcon" class="bi bi-eye"></i>
                        </button>
                    </div>

                    <div class="invalid-feedback">Please enter your password!</div>
                </div>

                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Login</button>
                </div>
                
            </form>

        </div>
    </div>
</div>
<script>
    function togglePassword() {
        const input = document.getElementById('yourPassword');
        const icon = document.getElementById('toggleIcon');
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');
        }
    }
</script>

