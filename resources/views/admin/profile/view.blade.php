@include('layouts.header')

    <!-- Page Content -->
    <main class="page-content">
      <section class="content-section active">
        <div class="section-header">
          <h1>Portfolio Section</h1>
          <p>Manage your portfolio items</p>
        </div>

        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Portfolio Items</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPortfolioModal">
              <i class="bi bi-plus"></i> Add New Item
            </button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img src="../assets/img/portfolio/portfolio-1.webp" alt="Portfolio" class="table-img">
                    </td>
                    <td>Mobile Banking App</td>
                    <td><span class="badge bg-primary">UI/UX</span></td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>
                      <button class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-pencil"></i>
                      </button>
                      <button class="btn btn-sm btn-outline-danger">
                        <i class="bi bi-trash"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="../assets/img/portfolio/portfolio-2.webp" alt="Portfolio" class="table-img">
                    </td>
                    <td>Smart Home Interface</td>
                    <td><span class="badge bg-info">Development</span></td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>
                      <button class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-pencil"></i>
                      </button>
                      <button class="btn btn-sm btn-outline-danger">
                        <i class="bi bi-trash"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="../assets/img/portfolio/portfolio-4.webp" alt="Portfolio" class="table-img">
                    </td>
                    <td>E-commerce Platform</td>
                    <td><span class="badge bg-primary">Web Design</span></td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>
                      <button class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-pencil"></i>
                      </button>
                      <button class="btn btn-sm btn-outline-danger">
                        <i class="bi bi-trash"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>

  <!-- Add Portfolio Modal -->
  <div class="modal fade" id="addPortfolioModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Portfolio Item</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form class="admin-form">
            <div class="row g-4">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="portfolioTitle">Title</label>
                  <input type="text" id="portfolioTitle" class="form-control" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="portfolioCategory">Category</label>
                  <select id="portfolioCategory" class="form-control" required>
                    <option value="">Select Category</option>
                    <option value="ui">UI/UX Design</option>
                    <option value="development">Development</option>
                    <option value="photography">Photography</option>
                    <option value="marketing">Marketing</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="portfolioDescription">Description</label>
                  <textarea id="portfolioDescription" class="form-control" rows="4"></textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="portfolioImage">Image</label>
                  <input type="file" id="portfolioImage" class="form-control" required>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Add Item</button>
        </div>
      </div>
    </div>
  </div>
@include('layouts.footer')
