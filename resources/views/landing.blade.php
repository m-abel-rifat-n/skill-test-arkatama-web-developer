<!DOCTYPE html>
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
</html>
