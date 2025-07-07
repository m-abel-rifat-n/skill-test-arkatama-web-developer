<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Travel Jaya</title>

  <!-- Bootstrap + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Google reCAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <style>
    body {
      margin: 0;
      padding: 0;
    }

    .login-section {
      min-height: 100vh;
    }

    .login-box {
      max-width: 400px;
      width: 100%;
      background: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .bus-img {
      width: 100%;
      height: 100vh;
      object-fit: cover;
      object-position: right;
      user-drag: none;
    }

    .input-group-text {
      cursor: pointer;
    }
  </style>
</head>
<body>

  <div class="container-fluid">
    <div class="row g-0">
      
      <!-- Left Login Form -->
      <div class="col-lg-5 d-flex align-items-center justify-content-center login-section">
        <div class="login-box">
          <!-- Logo -->
          <div class="text-primary fw-bold mb-3">
            🚍 Travel Jaya <small class="text-muted">ARKATAMA MALANG</small>
          </div>

          <h3 class="fw-bold mb-1">Login Akun</h3>
          <p class="text-muted mb-4">Hi, Selamat Datang! #SahabatTravel</p>

          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
              <label>Email*</label>
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                     placeholder="cth: email@domain.com" required>
              @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
              <label>Password*</label>
              <div class="input-group">
                <input type="password" id="password" name="password"
                       class="form-control @error('password') is-invalid @enderror"
                       placeholder="Enter password" required>
                <span class="input-group-text" onclick="togglePassword()">
                  <i id="eye-icon" class="bi bi-eye"></i>
                </span>
              </div>
              @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="text-end mb-3">
              <a href="#" class="text-decoration-none text-primary">Lupa Password</a>
            </div>

            <!-- reCAPTCHA -->
            <div class="mb-3">
              <div class="g-recaptcha" data-sitekey="your-site-key-here"></div>
            </div>

            <button type="submit" class="btn btn-primary w-100 fw-semibold">
            Login
            </button>

            @if(session('error'))
              <div class="alert alert-danger mt-3">{{ session('error') }}</div>
            @endif
          </form>
        </div>
      </div>

      <!-- Right Gambar Bus -->
      <div class="col-md-7 d-none d-md-flex align-items-center justify-content-end pe-0">
        <img src="{{ asset('images/bus.png') }}" alt="Bus Travel"
     style="width: 100%; max-width: 480px; max-height: 500px; object-fit: contain; object-position: right; margin-left: auto;"
     draggable="false">

      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    function togglePassword() {
      const password = document.getElementById('password');
      const icon = document.getElementById('eye-icon');
      const isHidden = password.type === 'password';
      password.type = isHidden ? 'text' : 'password';
      icon.className = isHidden ? 'bi bi-eye-slash' : 'bi bi-eye';
    }
  </script>

</body>
</html>

