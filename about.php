<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - CarRentals</title>
   <link rel="stylesheet" href="CSS/Style.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .hero-section {
      background: url('image/Img3.jpeg') no-repeat center center/cover;
      height: 60vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
      position: relative;
    }

    .hero-section::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.47);
    }

    .hero-section h1 {
      font-size: 3rem;
      font-weight: 700;
      z-index: 1;
    }

    .content-section {
      padding: 60px 20px;
    }

    .content-section h2 {
      font-weight: 600;
      color: #e63946;
      margin-bottom: 20px;
    }

    .content-section p {
      font-size: 1.1rem;
      line-height: 1.7;
      color: #444;
    }

    .team-card {
      border: none;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: 0.3s;
    }

    .team-card:hover {
      transform: translateY(-10px);
    }

    .team-card .card-body {
      text-align: center;
      padding: 20px;
    }
  </style>
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
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="cars.php">Cars</a></li>
          <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
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

  <!-- Hero Section -->
  <section class="hero-section">
    <h1>About CarRentals</h1>
  </section>

  <!-- Company Info -->
  <section class="content-section container">
    <h2>Who We Are</h2>
    <p>
      At <strong>CarRentals</strong>, we are passionate about making your journeys easier, safer, 
      and more enjoyable. With a wide fleet of modern cars, affordable pricing, and 24/7 customer 
      support, we aim to be your trusted partner for every road trip, business meeting, or holiday adventure. 
    </p>

    <p>
      Since our beginning, we have built a reputation for quality service and customer satisfaction. 
      Whether you need a luxury ride, an SUV for family trips, or an economy car for daily travel, 
      CarRentals has the right option for you.
    </p>
  </section>

  <!-- Mission & Vision -->
  <section class="content-section bg-light">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-6 mb-4">
          <h2>🚀 Our Mission</h2>
          <p>To provide hassle-free, affordable, and reliable car rental services, ensuring comfort and safety for every customer.</p>
        </div>
        <div class="col-md-6">
          <h2>🌍 Our Vision</h2>
          <p>To become the most trusted car rental brand, making transportation convenient and accessible for everyone, everywhere.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Team -->
  <section class="content-section container">
    <h2 class="text-center mb-5">Meet Our Team</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card team-card">
          <img src="image/ceo.jpeg" class="card-img-top" alt="CEO">
          <div class="card-body">
            <h5 class="card-title">ccccc</h5>
            <p class="card-text">Founder & CEO</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card team-card">
          <img src="image/manager.jpeg" class="card-img-top" alt="Manager">
          <div class="card-body">
            <h5 class="card-title">bbbb</h5>
            <p class="card-text">Operations Manager</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card team-card">
          <img src="image/officer.jpeg" class="card-img-top" alt="Support">
          <div class="card-body">
            <h5 class="card-title">xxxx</h5>
            <p class="card-text">Customer Support Head</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center p-3 mt-5">
    <p>&copy; 2025 CarRentals. All Rights Reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
