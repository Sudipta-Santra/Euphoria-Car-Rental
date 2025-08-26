<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Bootstrap Webpage</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/Style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Car Rental</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
              data-bs-target="#navbarNav" aria-controls="navbarNav" 
              aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="cars.php">Cars</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
        <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="btn btn-outline-light" href="login.php">Login / Sign Up</a>
        </li>
      </ul>
      </div>
    </div>
  </nav>

  <!-- Carousel Section -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/img4.jpeg" class="d-block w-100" alt="Car1">
    </div>
    <div class="carousel-item">
      <img src="image/img1.jpeg" class="d-block w-100" alt="car2">
    </div>
    <div class="carousel-item">
      <img src="image/img5.jpeg" class="d-block w-100" alt="car3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <!-- Content Section -->
  <section class="py-5">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Feature One</h5>
              <p class="card-text">Some quick example text to build on the card title.</p>
              <a href="#" class="btn btn-outline-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Feature Two</h5>
              <p class="card-text">Some quick example text to build on the card title.</p>
              <a href="#" class="btn btn-outline-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Feature Three</h5>
              <p class="card-text">Some quick example text to build on the card title.</p>
              <a href="#" class="btn btn-outline-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
<!-- Footer -->
<footer class="bg-dark text-light pt-5 pb-3">
  <div class="container">
    <div class="row">
      
      <!-- Company Info -->
      <div class="col-md-4 mb-3">
        <h5 class="fw-bold">CarRentals</h5>
        <p>Drive your dream car today! Affordable car rental services with 24/7 support.</p>
      </div>
      
      <!-- Quick Links -->
      <div class="col-md-4 mb-3">
        <h5 class="fw-bold">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="index.php" class="text-decoration-none text-light">Home</a></li>
          <li><a href="about.php" class="text-decoration-none text-light">About</a></li>
          <li><a href="cars.php" class="text-decoration-none text-light">All Cars</a></li>
          <li><a href="Contact" class="text-decoration-none text-light">Contact</a></li>
        </ul>
      </div>
      
      <!-- Contact Info -->
      <div class="col-md-4 mb-3">
        <h5 class="fw-bold">Contact Us</h5>
        <p><i class="bi bi-telephone-fill"></i> +91 12345 54321</p>
        <p><i class="bi bi-envelope-fill"></i> info@carrentals.com</p>
        <p><i class="bi bi-geo-alt-fill"></i> 123, Park Street, Kolkata, India</p>
        
        <!-- Social Icons -->
        <div>
          <a href="#" class="text-light me-3"><i class="bi bi-facebook"></i>facebook</a>
          <a href="#" class="text-light me-3"><i class="bi bi-twitter"></i>twitter</a>
          <a href="#" class="text-light me-3"><i class="bi bi-instagram"></i>instagram</a>
        </div>
      </div>
    </div>
    
    <!-- Bottom -->
    <div class="text-center mt-4">
      <p class="mb-0">© 2025 CarRentals. All Rights Reserved.</p>
    </div>
  </div>
</footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
