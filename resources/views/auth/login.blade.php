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
       background-color: #ffffff;
      margin: 0;
      padding: 0;
    }

     /* KANAN */
    .kanan {
       position: fixed;
      top: 50px;
      right: -40px;
      /* display: flex;
      align-items: center;
      gap: 15px;
      z-index: 1000; */
        width: 100%;
      max-width: 600px;
      padding: 60px 40px;
    }

   .kanan img {
  width: 600px;         /* ukuran pasti */
  max-width: 100%;      /* agar tidak melebihi lebar layar */
  height: auto;
  position: relative;   /* BUKAN fixed */
}


    @media (max-width: 768px) {
      body {
        flex-direction: column;
      }
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

    /* .bus-img {
      width: 100%;
      height: 100vh;
      object-fit: cover;
      object-position: right;
      user-drag: none;
    } */

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

          <h3 class="fw-bold mb-1">Login Akun</h3>
          <p class="text-muted mb-4">Hi, Selamat Datang! #SahabatTravel</p>

          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
              <label>Email*</label>
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                     placeholder="ex. email@domain.com" required>
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

       <!-- KANAN -->
  <div class="kanan">
    <img src="images/bus.png" alt="Foto Travel">
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

