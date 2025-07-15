{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Travel Jaya</title>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container-fluid min-vh-100 d-flex flex-column">
    <!-- Login Button -->
    <div class="d-flex justify-content-end p-3">
      <a href="/login" class="btn btn-primary">Login</a>
    </div>

    <!-- Main Content -->
    <div class="row flex-grow-1">
      <!-- Left Content -->
      <div class="col-md-6 d-flex flex-column justify-content-center px-5">
        <h4 class="text-primary fw-bold">🚍 Travel Jaya <small class="text-muted">ARKATAMA MALANG</small></h4>
        <h1 class="display-5 fw-bold">Mudah, <span class="text-primary text-decoration-underline">Cepat</span>, dan Menyenangkan</h1>
        <p class="fs-5 text-muted">Rencanakan perjalanan Anda dengan mudah, dan biarkan kami mengurus sisanya.</p>

        <div class="d-flex gap-3 my-3">
          <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" height="50">
          <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" height="50">
        </div>

        <!-- Search Form -->
        <form class="bg-white shadow rounded p-4 d-flex flex-wrap gap-2 align-items-center mt-4">
          <input type="text" class="form-control" placeholder="Lokasi" style="flex:1; min-width: 180px">
          <input type="datetime-local" class="form-control" style="flex:1; min-width: 180px">
          <input type="datetime-local" class="form-control" style="flex:1; min-width: 180px">
          <button type="submit" class="btn btn-primary">Search</button>
        </form>
      </div>

      <!-- Right Image -->
      <div class="col-md-6 d-none d-md-flex align-items-center justify-content-end pe-0">
        <img src="{{ asset('images/bus.png') }}"
     alt="Bus"
     style="width: 480px; max-width: 100%; user-drag: none;"
     draggable="false"
     class="img-fluid ms-auto d-block">
      </div>      
    </div>
  </div>

</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing Page</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #ffffff;
      margin: 0;
      padding-bottom: 100px;
    }

    /* Tombol Login di pojok kanan atas */
.login-button {
  position: absolute;
  top: 20px;
  right: 150px;
  z-index: 1000;
}

/* Style tombol login */
.login-button a {
  background-color: #007bff;   /* Biru Bootstrap */
  color: white;                /* Teks putih */
  border: none;                /* Hilangkan border */
  padding: 8px 20px;
  border-radius: 10px;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.login-button a:hover {
  background-color: #0056b3;   /* Biru lebih gelap saat hover */
  color: white;
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

    /*left content */

      .left-section {
       position: fixed;
      top: 100px;
      left: 50px;
      /* display: flex;
      align-items: center;
      gap: 15px;
      z-index: 1000; */
        width: 100%;
      max-width: 600px;
      padding: 60px 40px;
    }

    .headline {
      font-size: 3rem;
      font-weight: bold;
      color: #222;
      line-height: 1.3;
    }

    .highlight {
      color: #007bff;
      text-decoration: underline;
      text-decoration-thickness: 5px;
      text-underline-offset: 6px;
    }

    .description {
      font-size: 1.5rem;
      color: #555;
      margin-top: 20px;
    }

    .store-buttons {
      display: flex;
      gap: 16px;
      margin-top: 30px;
    }

    .store-buttons img {
      height: 45px;
      cursor: pointer;
    }

    @media (max-width: 768px) {
      .left-section {
        padding: 30px 20px;
        text-align: center;
        margin: 0 auto;
      }

      .store-buttons {
        justify-content: center;
      }
    }

    /* Branding Logo + Teks (pojok kiri atas) */
    .logo-text-container {
      position: fixed;
      top: 20px;
      left: 20px;
      display: flex;
      align-items: center;
      gap: 15px;
      z-index: 1000;
    }

    .logo-img {
      width: 60px;
      height: auto;
    }

    .brand-title {
      font-size: 1.5rem;
      font-weight: 700;
      color: #007bff;
    }

    .brand-subtitle {
      font-size: 1rem;
      letter-spacing: 1px;
      color: #007bff;
      border-top: 1px solid #cce5ff;
      padding-top: 2px;
      margin-top: 2px;
    }

    /* Search Bar Style */
    .search-bar {
      position: fixed;
      bottom: 30px;
      left: 50%;
      transform: translateX(-50%);
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      padding: 12px 24px;
      background-color: white;
      max-width: 100%;
      max-width: 1000px;
      z-index: 999;
    }

    .form-section {
      display: flex;
      align-items: center;
      padding: 0 16px;
      border-left: 1px solid #dee2e6;
    }

    .form-section:first-child {
      border-left: none;
    }

    .form-control:focus {
      box-shadow: none;
    }

    .input-group-text {
      background-color: white;
      border: none;
    }

    .form-control {
      border: none;
    }
  </style>
</head>
<body>

    <!-- Tombol Login -->
  <div class="login-button">
    <a href="{{ route('login') }}" class="btn btn-outline-primary px-4">
      Login
    </a>
  </div>

   <!-- KANAN -->
  <div class="kanan">
    <img src="images/bus.png" alt="Foto Travel">
  </div>

   <div class="left-section">
    <!-- Headline -->
    <div class="headline">
      Mudah, <span class="highlight">Cepat</span>,<br>dan Menyenangkan
    </div>

    <!-- Description -->
    <p class="description">
      Rencanakan perjalanan Anda dengan mudah,<br>
      dan biarkan kami mengurus sisanya.
    </p>

    <!-- App Buttons -->
    <div class="store-buttons">
      <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play">
      <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="App Store">
    </div>
  </div>
  
  <!-- Branding Section -->
  <div class="logo-text-container">
    <img src="images/logotravel.png" alt="Logo Travel Jaya" class="logo-img">
    <div>
      <div class="brand-title">Travel Jaya <em>by</em></div>
      <div class="brand-subtitle">ARKATAMA MALANG</div>
    </div>
  </div>

  <!-- Search Bar Fixed at Bottom -->
  <div class="search-bar d-flex align-items-center w-100">
    
    <!-- Location -->
    <div class="form-section flex-grow-1">
      <div class="input-group">
        <span class="input-group-text">
          <i class="bi bi-geo-alt-fill text-secondary"></i>
        </span>
        <input type="text" class="form-control" placeholder="Search your location">
      </div>
    </div>

    <!-- Pickup date -->
    <div class="form-section flex-grow-1">
      <div class="input-group">
        <span class="input-group-text">
          <i class="bi bi-calendar-event text-secondary"></i>
        </span>
        <input type="datetime-local" class="form-control" placeholder="Pick up date">
      </div>
    </div>

    <!-- Return date -->
    <div class="form-section flex-grow-1">
      <div class="input-group">
        <span class="input-group-text">
          <i class="bi bi-calendar-event text-secondary"></i>
        </span>
        <input type="datetime-local" class="form-control" placeholder="Return date">
      </div>
    </div>

    <!-- Search Button -->
    <div class="form-section">
      <button class="btn btn-primary px-4">Search</button>
    </div>

  </div>

</body>
</html>
