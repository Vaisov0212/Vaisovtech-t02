<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Admin Panel - Portfolio Management</title>
  <meta name="description" content="Portfolio Admin Panel - Manage your portfolio content">
  <meta name="keywords" content="admin, portfolio, management, dashboard">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Favicons -->
  <link href="{{ asset('/dashboard/img/favicon.png')}}"  rel="icon">
  <link href="{{ asset('/dashboard/img/apple-touch-icon.png')}}"  rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('dashboard/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('dashboard/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('dashboard/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Admin CSS File -->
  <link href="{{ asset('dashboard/css/admin.css')}}" rel="stylesheet">
</head>

<body class="admin-body">

  <!-- Sidebar -->
  <nav id="sidebar" class="sidebar">
    <div class="sidebar-header">
      <div class="admin-logo">
        <img src="{{ asset('dashboard/img/profile/profile-square-1.webp')}}" alt="Admin" class="admin-avatar">
        <div class="admin-info">
          <h4>Alex Smith</h4>
          <p>Portfolio Admin</p>
        </div>
      </div>
    </div>

    <ul class="sidebar-menu">
      <li class="menu-item active">
        <a href="{{ route('admin.dashboard') }}" class="menu-link">
          <i class="bi bi-speedometer2"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.hero') }}" class="menu-link">
          <i class="bi bi-house"></i>
          <span>Hero Section</span>
        </a>
      </li>
      <li class="menu-item">
        <a href="#about" class="menu-link">
          <i class="bi bi-person"></i>
          <span>About Section</span>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.skills') }}" class="menu-link">
          <i class="bi bi-gear"></i>
          <span>Skills Section</span>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.resume') }}" class="menu-link">
          <i class="bi bi-file-earmark-text"></i>
          <span>Resume Section</span>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.services') }}" class="menu-link">
          <i class="bi bi-briefcase"></i>
          <span>Services Section</span>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.portfolio') }}" class="menu-link">
          <i class="bi bi-collection"></i>
          <span>Portfolio Section</span>
        </a>
      </li>
      <li class="menu-item">
        <a href="#testimonials" class="menu-link">
          <i class="bi bi-chat-quote"></i>
          <span>Testimonials</span>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.contact') }}" class="menu-link">
          <i class="bi bi-envelope"></i>
          <span>Contact Section</span>
        </a>
      </li>
      <li class="menu-item">
        <a href="#settings" class="menu-link">
          <i class="bi bi-gear-fill"></i>
          <span>Settings</span>
        </a>
      </li>
    </ul>

    <div class="sidebar-footer">
      <a href="{{ asset('dashboard/index.html')}}" class="btn btn-outline-light btn-sm">
        <i class="bi bi-eye"></i> View Site
      </a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Top Navigation -->
    <header class="top-navbar">
      <div class="navbar-content">
        <button class="sidebar-toggle" id="sidebarToggle">
          <i class="bi bi-list"></i>
        </button>

        <div class="navbar-right">
          <div class="search-box">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Search 'dashboard.">
          </div>

          <div class="notifications">
            <button class="notification-btn">
              <i class="bi bi-bell"></i>
              <span class="badge">3</span>
            </button>
          </div>

          <div class="admin-profile">
            <img src="{{ asset('dashboard/img/profile/profile-square-1.webp')}}" alt="Admin" class="profile-img">
            <div class="profile-dropdown">
              <a href="#"><i class="bi bi-person"></i> Profile</a>
              <a href="#"><i class="bi bi-gear"></i> Settings</a>
              <a href="#" onclick="logouts()" ><i class="bi bi-box-arrow-right"></i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                     @csrf
                </form>
            </div>
          </div>
        </div>
      </div>
    </header>

<div class="container">
    @yield('message_success')
</div>

