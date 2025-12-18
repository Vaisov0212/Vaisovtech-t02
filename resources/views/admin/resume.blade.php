@include('layouts.header')
    <!-- Page Content -->
    <main class="page-content">
      <section class="content-section active">
        <div class="section-header">
          <h1>Resume Section</h1>
          <p>Manage your resume and experience</p>
        </div>

        <div class="row g-4">
          <!-- Experience Section -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Work Experience</h5>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addExperienceModal">
                  <i class="bi bi-plus"></i> Add Experience
                </button>
              </div>
              <div class="card-body">
                <div class="experience-list">
                  <div class="experience-item">
                    <div class="experience-header">
                      <div class="experience-info">
                        <h6>Technical Director</h6>
                        <p class="company">Proin Corporation</p>
                        <span class="duration">2022 - Present</span>
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
                    <p class="experience-description">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra veniam sit amet lacus cursus.</p>
                    <ul class="achievements">
                      <li>Managed cross-functional teams of 15+ professionals</li>
                      <li>Implemented agile methodologies resulting in 40% efficiency gain</li>
                      <li>Led digital transformation initiatives worth $2M+</li>
                    </ul>
                  </div>

                  <div class="experience-item">
                    <div class="experience-header">
                      <div class="experience-info">
                        <h6>Senior Development Manager</h6>
                        <p class="company">Consectetur Solutions Inc</p>
                        <span class="duration">2018 - 2022</span>
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
                    <p class="experience-description">Donec quam felis ultricies nec pellentesque eu pretium quis sem nulla consequat massa quis enim donec pede justo fringilla vel.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Education Section -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Education</h5>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addEducationModal">
                  <i class="bi bi-plus"></i> Add Education
                </button>
              </div>
              <div class="card-body">
                <div class="education-list">
                  <div class="education-item">
                    <div class="education-header">
                      <div class="education-info">
                        <h6>Master of Computer Science</h6>
                        <p class="institution">Tempus University</p>
                        <span class="year">2015 - 2017</span>
                      </div>
                      <div class="education-actions">
                        <button class="btn btn-sm btn-outline-primary">
                          <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger">
                          <i class="bi bi-trash"></i>
                        </button>
                      </div>
                    </div>
                    <p class="education-description">Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus donec quam felis ultricies nec.</p>
                  </div>

                  <div class="education-item">
                    <div class="education-header">
                      <div class="education-info">
                        <h6>Bachelor of Information Technology</h6>
                        <p class="institution">Rhoncus Institute of Technology</p>
                        <span class="year">2011 - 2015</span>
                      </div>
                      <div class="education-actions">
                        <button class="btn btn-sm btn-outline-primary">
                          <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger">
                          <i class="bi bi-trash"></i>
                        </button>
                      </div>
                    </div>
                    <p class="education-description">Nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus vivamus elementum semper nisi aenean vulputate.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>

  <!-- Add Experience Modal -->
  <div class="modal fade" id="addExperienceModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Work Experience</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form class="admin-form">
            <div class="form-group">
              <label for="expTitle">Job Title</label>
              <input type="text" id="expTitle" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="expCompany">Company</label>
              <input type="text" id="expCompany" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="expDuration">Duration</label>
              <input type="text" id="expDuration" class="form-control" placeholder="e.g., 2022 - Present" required>
            </div>
            <div class="form-group">
              <label for="expDescription">Description</label>
              <textarea id="expDescription" class="form-control" rows="4"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Add Experience</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Add Education Modal -->
  <div class="modal fade" id="addEducationModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Education</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form class="admin-form">
            <div class="form-group">
              <label for="eduDegree">Degree</label>
              <input type="text" id="eduDegree" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="eduInstitution">Institution</label>
              <input type="text" id="eduInstitution" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="eduYear">Year</label>
              <input type="text" id="eduYear" class="form-control" placeholder="e.g., 2015 - 2017" required>
            </div>
            <div class="form-group">
              <label for="eduDescription">Description</label>
              <textarea id="eduDescription" class="form-control" rows="4"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Add Education</button>
        </div>
      </div>
    </div>
  </div>
@include('layouts.footer')

