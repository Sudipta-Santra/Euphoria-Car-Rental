<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Rental Admin Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="admin_style.css">
</head>
<body>
  <div class="d-flex">

    <!-- Sidebar -->
    <div class="sidebar bg-dark text-white p-3 vh-100">
      <h4 class="text-center mb-4">Car Rental Admin</h4>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link text-white"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link text-white"><i class="bi bi-car-front me-2"></i> Cars</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link text-white"><i class="bi bi-people me-2"></i> Customers</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link text-white"><i class="bi bi-calendar-check me-2"></i> Bookings</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link text-white"><i class="bi bi-cash-coin me-2"></i> Payments</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link text-white"><i class="bi bi-graph-up me-2"></i> Reports</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link text-white"><i class="bi bi-gear me-2"></i> Settings</a></li>
        <li class="nav-item mt-4"><a href="admin-login.html" class="nav-link text-danger"><i class="bi bi-box-arrow-right me-2"></i> Logout</a></li>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1">
      
      <!-- Top Navbar -->
      <nav class="navbar navbar-light bg-light shadow-sm px-3">
        <span class="navbar-brand mb-0 h4">Dashboard</span>
        <div>
          <span class="me-3">Hello, Admin</span>
          <img src="https://via.placeholder.com/40" class="rounded-circle" alt="Admin">
        </div>
      </nav>

      <!-- Dashboard Content -->
      <div class="container-fluid p-4">
        
        <!-- Stat Cards -->
        <div class="row g-4">
          <div class="col-md-3">
            <div class="card text-center shadow-sm">
              <div class="card-body">
                <i class="bi bi-car-front fs-1 text-primary"></i>
                <h6 class="mt-2">Total Cars</h6>
                <p class="fs-4">120</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-center shadow-sm">
              <div class="card-body">
                <i class="bi bi-calendar-check fs-1 text-success"></i>
                <h6 class="mt-2">Active Bookings</h6>
                <p class="fs-4">45</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-center shadow-sm">
              <div class="card-body">
                <i class="bi bi-people fs-1 text-warning"></i>
                <h6 class="mt-2">Pending Booking</h6>
                <p class="fs-4">230</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-center shadow-sm">
              <div class="card-body">
                <i class="bi bi-cash-coin fs-1 text-danger"></i>
                <h6 class="mt-2">Total Customer</h6>
                <p class="fs-4">$12,500</p>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card text-center shadow-sm">
              <div class="card-body">
                <i class="bi bi-cash-coin fs-1 text-danger"></i>
                <h6 class="mt-2">Revenue</h6>
                <p class="fs-4">$12,500</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Recent Bookings Table -->
        <div class="card mt-4 shadow-sm">
          <div class="card-header bg-primary text-white">Recent Bookings</div>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Customer</th>
                  <th>Car</th>
                  <th>Pickup</th>
                  <th>Return</th>
                  <th>Status</th>
                  <th>Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>John Doe</td>
                  <td>Toyota Corolla</td>
                  <td>2025-08-28</td>
                  <td>2025-08-30</td>
                  <td><span class="badge bg-success">Confirmed</span></td>
                  <td>$200</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jane Smith</td>
                  <td>Honda Civic</td>
                  <td>2025-08-29</td>
                  <td>2025-09-02</td>
                  <td><span class="badge bg-warning">Pending</span></td>
                  <td>$300</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Michael Lee</td>
                  <td>BMW X5</td>
                  <td>2025-08-27</td>
                  <td>2025-08-28</td>
                  <td><span class="badge bg-danger">Cancelled</span></td>
                  <td>$150</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
