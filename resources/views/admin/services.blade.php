@include('layouts.header')
    <!-- Page Content -->
    <main class="page-content">
      <section class="content-section active">
        <div class="section-header">
          <h1>Services Section</h1>
          <p>Manage your services</p>
        </div>

        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Services</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addServiceModal">
              <i class="bi bi-plus"></i> Add New Service
            </button>
          </div>
          <div class="card-body">
            <div class="row g-4">
              <div class="col-md-6 col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                      <div class="stats-icon">
                        <i class="bi bi-code-slash"></i>
                      </div>
                      <div class="experience-actions">
                        <button class="btn btn-sm btn-outline-primary">
                          <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger">
                          <i class="bi bi-trash"></i>
                        </button>
                      </div>
                    </div>
                    <h5>Web Development</h5>
                    <p>Custom web applications built with modern technologies and best practices.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                      <div class="stats-icon">
                        <i class="bi bi-palette"></i>
                      </div>
                      <div class="experience-actions">
                        <button class="btn btn-sm btn-outline-primary">
                          <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger">
                          <i class="bi bi-trash"></i>
                        </button>
                      </div>
                    </div>
                    <h5>UI/UX Design</h5>
                    <p>Beautiful and intuitive user interfaces that enhance user experience.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                      <div class="stats-icon">
                        <i class="bi bi-phone"></i>
                      </div>
                      <div class="experience-actions">
                        <button class="btn btn-sm btn-outline-primary">
                          <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger">
                          <i class="bi bi-trash"></i>
                        </button>
                      </div>
                    </div>
                    <h5>Mobile Apps</h5>
                    <p>Native and cross-platform mobile applications for iOS and Android.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>

  <!-- Add Service Modal -->
  <div class="modal fade" id="addServiceModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Service</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form class="admin-form">
            <div class="form-group">
              <label for="serviceTitle">Service Title</label>
              <input type="text" id="serviceTitle" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="serviceDescription">Description</label>
              <textarea id="serviceDescription" class="form-control" rows="4" required></textarea>
            </div>
            <div class="form-group">
              <label for="serviceIcon">Icon Class (Bootstrap Icons)</label>
              <input type="text" id="serviceIcon" class="form-control" placeholder="bi bi-code-slash" required>
            </div>
            <div class="form-group">
              <label for="serviceImage">Service Image</label>
              <input type="file" id="serviceImage" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Add Service</button>
        </div>
      </div>
    </div>
  </div>
@include('layouts.footer')
