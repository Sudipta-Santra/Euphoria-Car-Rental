<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Background image for full page */
    body {
      background: url('https://source.unsplash.com/1600x900/?car,luxury') no-repeat center center/cover;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Login container (glass effect) */
    .login-container {
      width: 350px;
      padding: 30px;
      border-radius: 15px;
      background: rgba(255, 255, 255, 0.9); /* transparent white */
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h3 class="text-center mb-4">Login</h3>
    
    <form>
      <!-- Email -->
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>

      <!-- Password -->
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password">
      </div>

      <!-- Login Button -->
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>

    <!-- Register Link -->
    <p class="text-center mt-3">
      Not registered? <a href="#" class="text-decoration-none">Create an account</a>
    </p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
