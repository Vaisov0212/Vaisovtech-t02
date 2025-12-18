@include('layouts.header')

    <!-- Page Content -->
    <main class="page-content">
      <section class="content-section active">
        <div class="section-header">
          <h1>Testimonials</h1>
          <p>Manage client testimonials</p>
        </div>

        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Testimonials</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTestimonialModal">
              <i class="bi bi-plus"></i> Add New Testimonial
            </button>
          </div>
          <div class="card-body">
            <div class="messages-list">
              <div class="message-item">
                <div class="message-avatar">
                  <img src="../assets/img/person/person-f-1.webp" alt="Client" class="avatar">
                </div>
                <div class="message-content">
                  <div class="message-header">
                    <h6>Jane Smith</h6>
                    <span class="message-time">CEO, Tech Solutions</span>
                  </div>
                  <div class="mb-2">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </div>
                  <p>"Working with Alex was an absolute pleasure. The attention to detail and creative solutions exceeded our expectations. Highly recommended!"</p>
                  <div class="message-actions">
                    <button class="btn btn-sm btn-outline-primary">
                      <i class="bi bi-pencil"></i> Edit
                    </button>
                    <button class="btn btn-sm btn-outline-danger">
                      <i class="bi bi-trash"></i> Delete
                    </button>
                  </div>
                </div>
              </div>

              <div class="message-item">
                <div class="message-avatar">
                  <img src="../assets/img/person/person-m-2.webp" alt="Client" class="avatar">
                </div>
                <div class="message-content">
                  <div class="message-header">
                    <h6>Michael Johnson</h6>
                    <span class="message-time">Founder, Startup Inc</span>
                  </div>
                  <div class="mb-2">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </div>
                  <p>"The project was delivered on time and within budget. The quality of work is outstanding. We'll definitely work together again!"</p>
                  <div class="message-actions">
                    <button class="btn btn-sm btn-outline-primary">
                      <i class="bi bi-pencil"></i> Edit
                    </button>
                    <button class="btn btn-sm btn-outline-danger">
                      <i class="bi bi-trash"></i> Delete
                    </button>
                  </div>
                </div>
              </div>

              <div class="message-item">
                <div class="message-avatar">
                  <img src="../assets/img/person/person-m-4.webp" alt="Client" class="avatar">
                </div>
                <div class="message-content">
                  <div class="message-header">
                    <h6>David Brown</h6>
                    <span class="message-time">Director, Design Studio</span>
                  </div>
                  <div class="mb-2">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </div>
                  <p>"Professional, creative, and reliable. Alex transformed our vision into a beautiful reality. The best decision we made!"</p>
                  <div class="message-actions">
                    <button class="btn btn-sm btn-outline-primary">
                      <i class="bi bi-pencil"></i> Edit
                    </button>
                    <button class="btn btn-sm btn-outline-danger">
                      <i class="bi bi-trash"></i> Delete
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>

  <!-- Add Testimonial Modal -->
  <div class="modal fade" id="addTestimonialModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Testimonial</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form class="admin-form">
            <div class="form-group">
              <label for="testimonialName">Client Name</label>
              <input type="text" id="testimonialName" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="testimonialPosition">Position/Company</label>
              <input type="text" id="testimonialPosition" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="testimonialText">Testimonial Text</label>
              <textarea id="testimonialText" class="form-control" rows="4" required></textarea>
            </div>
            <div class="form-group">
              <label for="testimonialRating">Rating (1-5)</label>
              <input type="number" id="testimonialRating" class="form-control" min="1" max="5" value="5" required>
            </div>
            <div class="form-group">
              <label for="testimonialImage">Client Photo</label>
              <input type="file" id="testimonialImage" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Add Testimonial</button>
        </div>
      </div>
    </div>
  </div>
@include('layouts.footer')
