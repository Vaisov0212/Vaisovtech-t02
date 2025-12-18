@include('layouts.header')

    <!-- Page Content -->
    <main class="page-content">
      <section class="content-section active">
        <div class="section-header">
          <h1>Skills Section</h1>
          <p>Manage your skills and certifications</p>
        </div>

        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Skills & Certifications</h5>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addSkillModal">
              <i class="bi bi-plus"></i> Add Skill
            </button>
          </div>
          <div class="card-body">
            <div class="row g-4">
              <div class="col-md-6">
                <h6>Technical Skills</h6>
                <div class="skills-list">
                  <div class="skill-item">
                    <div class="skill-info">
                      <span class="skill-name">HTML/CSS</span>
                      <span class="skill-percentage">95%</span>
                    </div>
                    <div class="skill-bar progress">
                      <div class="progress-bar" role="progressbar" style="width: 95%"></div>
                    </div>
                    <div class="skill-actions">
                      <button class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-pencil"></i>
                      </button>
                      <button class="btn btn-sm btn-outline-danger">
                        <i class="bi bi-trash"></i>
                      </button>
                    </div>
                  </div>
                  <div class="skill-item">
                    <div class="skill-info">
                      <span class="skill-name">JavaScript</span>
                      <span class="skill-percentage">88%</span>
                    </div>
                    <div class="skill-bar progress">
                      <div class="progress-bar" role="progressbar" style="width: 88%"></div>
                    </div>
                    <div class="skill-actions">
                      <button class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-pencil"></i>
                      </button>
                      <button class="btn btn-sm btn-outline-danger">
                        <i class="bi bi-trash"></i>
                      </button>
                    </div>
                  </div>
                  <div class="skill-item">
                    <div class="skill-info">
                      <span class="skill-name">PHP</span>
                      <span class="skill-percentage">85%</span>
                    </div>
                    <div class="skill-bar progress">
                      <div class="progress-bar" role="progressbar" style="width: 85%"></div>
                    </div>
                    <div class="skill-actions">
                      <button class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-pencil"></i>
                      </button>
                      <button class="btn btn-sm btn-outline-danger">
                        <i class="bi bi-trash"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <h6>Certifications</h6>
                <div class="certifications-list">
                  <div class="certification-item">
                    <div class="cert-info">
                      <h6>AWS Certified Solutions Architect</h6>
                      <p class="cert-issuer">Amazon Web Services</p>
                      <span class="cert-date">2023</span>
                    </div>
                    <div class="cert-actions">
                      <button class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-pencil"></i>
                      </button>
                      <button class="btn btn-sm btn-outline-danger">
                        <i class="bi bi-trash"></i>
                      </button>
                    </div>
                  </div>
                  <div class="certification-item">
                    <div class="cert-info">
                      <h6>Laravel Expert Certification</h6>
                      <p class="cert-issuer">Laravel LLC</p>
                      <span class="cert-date">2022</span>
                    </div>
                    <div class="cert-actions">
                      <button class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-pencil"></i>
                      </button>
                      <button class="btn btn-sm btn-outline-danger">
                        <i class="bi bi-trash"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>

  <!-- Add Skill Modal -->
  <div class="modal fade" id="addSkillModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Skill</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form class="admin-form">
            <div class="form-group">
              <label for="skillName">Skill Name</label>
              <input type="text" id="skillName" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="skillPercentage">Percentage</label>
              <input type="number" id="skillPercentage" class="form-control" min="0" max="100" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Add Skill</button>
        </div>
      </div>
    </div>
  </div>
@include('layouts.footer')
