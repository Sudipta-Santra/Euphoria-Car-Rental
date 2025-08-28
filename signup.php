<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;   /* full screen height */
      background-color: #f0f2f5;
    }
    .signup-box {
      width: 900px;
      max-width: 100%;
      background: #fff;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
    }
    .left-side img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .right-side {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 30px;
    }
    .card-body {
      width: 100%;
      max-width: 350px;
    }
  </style>
</head>
<body class="bg-info-subtle">

  <!-- Main centered box -->
  <div class="signup-box row g-0">
    
    <!-- Left Side (Local Image) -->
    <div class="col-md-6 left-side">
      <img src="image/Img1.jpeg" alt="Signup" />
    </div>
    
    <!-- Right Side (Signup Form) -->
    <div class="col-md-6 right-side">
      <div class="card-body">
        <h3 class="text-center text-primary-emphasis fst-normal fw-bold fs-2">Sign Up</h3>
        <form>
          <div class="mb-3">
            <label class="form-label fw-semibold">Full Name</label>
            <input type="text" class="form-control" placeholder="Enter your name">
          </div>
          <div class="mb-3">
            <label class="form-label fw-semibold">Email</label>
            <input type="email" class="form-control" placeholder="Enter your email">
          </div>
          <div class="mb-3">
            <label class="form-label fw-semibold">Password</label>
            <input type="password" class="form-control" placeholder="Enter password">
          </div>
          <div class="mb-3">
            <label class="form-label fw-semibold">Confirm Password</label>
            <input type="password" class="form-control" placeholder="Confirm password">
          </div>
          <button type="submit" class="btn btn-info w-100">Register</button>
          <p class="text-center mt-3">Already have an account? <a href="login.php">Login</a></p>
        </form>
      </div>
    </div>

  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
