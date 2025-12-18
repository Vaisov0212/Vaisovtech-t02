<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Admin Login - Portfolio Management</title>
  <meta name="description" content="Admin Login - Portfolio Management System">
  <meta name="keywords" content="admin, login, portfolio, management">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Login CSS -->
  <link href="assets/css/login.css" rel="stylesheet">
</head>

<body class="login-body">

  <div class="login-container">
    <div class="login-card">
      <div class="login-header">
        <div class="login-logo">
          <img src="../assets/img/profile/profile-square-1.webp" alt="Admin" class="logo-img">
          <h1>Admin Panel</h1>
          <p>Portfolio Management System</p>
        </div>
      </div>

      <div class="login-form">
        <form id="loginForm" class="admin-login-form">
          <div class="form-group">
            <label for="email">Email Address</label>
            <div class="input-group">
              <span class="input-group-text">
                <i class="bi bi-envelope"></i>
              </span>
              <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
              <span class="input-group-text">
                <i class="bi bi-lock"></i>
              </span>
              <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
              <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                <i class="bi bi-eye"></i>
              </button>
            </div>
          </div>

          <div class="form-options">
            <div class="form-check">
              <input type="checkbox" id="rememberMe" class="form-check-input">
              <label for="rememberMe" class="form-check-label">Remember me</label>
            </div>
            <a href="#" class="forgot-password">Forgot Password?</a>
          </div>

          <button type="submit" class="btn btn-primary btn-login">
            <i class="bi bi-box-arrow-in-right"></i>
            Sign In
          </button>
        </form>
      </div>

      <div class="login-footer">
        <p>&copy; 2024 Portfolio Admin Panel. All rights reserved.</p>
        <a href="../index.html" class="back-to-site">
          <i class="bi bi-arrow-left"></i> Back to Site
        </a>
      </div>
    </div>

    <!-- Background Elements -->
    <div class="login-background">
      <div class="floating-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>
      </div>
    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Login JS -->
  <script src="assets/js/login.js"></script>

</body>

</html>

