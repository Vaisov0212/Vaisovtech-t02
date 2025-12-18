@include('layouts.header')


    <!-- Page Content -->
    <main class="page-content">
      <!-- Dashboard Section -->
      <section class="content-section active">
        <div class="section-header">
          <h1>Dashboard</h1>
          <p>Welcome to your portfolio admin panel</p>
        </div>

        <!-- Stats Cards -->
        <div class="row g-4 mb-4">
          <div class="col-xl-3 col-md-6">
            <div class="stats-card">
              <div class="stats-icon">
                <i class="bi bi-eye"></i>
              </div>
              <div class="stats-content">
                <h3>1,234</h3>
                <p>Total Views</p>
                <span class="stats-change positive">+12%</span>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6">
            <div class="stats-card">
              <div class="stats-icon">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="stats-content">
                <h3>45</h3>
                <p>New Messages</p>
                <span class="stats-change positive">+8%</span>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6">
            <div class="stats-card">
              <div class="stats-icon">
                <i class="bi bi-collection"></i>
              </div>
              <div class="stats-content">
                <h3>12</h3>
                <p>Portfolio Items</p>
                <span class="stats-change neutral">0%</span>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6">
            <div class="stats-card">
              <div class="stats-icon">
                <i class="bi bi-star"></i>
              </div>
              <div class="stats-content">
                <h3>4.8</h3>
                <p>Average Rating</p>
                <span class="stats-change positive">+0.2</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Recent Activity -->
        <div class="row g-4">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-header">
                <h5>Recent Activity</h5>
              </div>
              <div class="card-body">
                <div class="activity-list">
                  <div class="activity-item">
                    <div class="activity-icon">
                      <i class="bi bi-plus-circle"></i>
                    </div>
                    <div class="activity-content">
                      <h6>New portfolio item added</h6>
                      <p>Mobile Banking App - UI/UX Design</p>
                      <span class="activity-time">2 hours ago</span>
                    </div>
                  </div>

                  <div class="activity-item">
                    <div class="activity-icon">
                      <i class="bi bi-envelope"></i>
                    </div>
                    <div class="activity-content">
                      <h6>New message received</h6>
                      <p>From: john.doe@example.com</p>
                      <span class="activity-time">4 hours ago</span>
                    </div>
                  </div>

                  <div class="activity-item">
                    <div class="activity-icon">
                      <i class="bi bi-pencil"></i>
                    </div>
                    <div class="activity-content">
                      <h6>About section updated</h6>
                      <p>Profile information modified</p>
                      <span class="activity-time">1 day ago</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <h5>Quick Actions</h5>
              </div>
              <div class="card-body">
                <div class="quick-actions">
                  <a href="portfolio.html" class="action-btn">
                    <i class="bi bi-plus-circle"></i>
                    <span>Add Portfolio Item</span>
                  </a>
                  <a href="testimonials.html" class="action-btn">
                    <i class="bi bi-chat-quote"></i>
                    <span>Add Testimonial</span>
                  </a>
                  <a href="contact.html" class="action-btn">
                    <i class="bi bi-envelope"></i>
                    <span>View Messages</span>
                  </a>
                  <a href="settings.html" class="action-btn">
                    <i class="bi bi-gear"></i>
                    <span>Site Settings</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>

 @include('layouts.footer')
