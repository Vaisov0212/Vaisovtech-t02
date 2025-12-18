@include('layouts.header')

    <!-- Page Content -->
    <main class="page-content">
      <section class="content-section active">
        <div class="section-header">
          <h1>Hero Section</h1>
          <p>Manage your hero section content</p>
        </div>

        <div class="card">
          <div class="card-header">
            <h5>Hero Content</h5>
          </div>
          <div class="card-body">
            <form class="admin-form">
              <div class="row g-4">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="heroTitle">Main Title</label>
                    <input type="text" id="heroTitle" class="form-control" value="Creative Designer, Developer, Freelancer, Artist">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="heroSubtitle">Subtitle</label>
                    <input type="text" id="heroSubtitle" class="form-control" value="I create digital experiences that inspire and engage">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="heroDescription">Description</label>
                    <textarea id="heroDescription" class="form-control" rows="4">I create digital experiences that inspire and engage. With a passion for clean design and innovative solutions, I transform ideas into beautiful, functional realities.</textarea>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="projectsCount">Projects Completed</label>
                    <input type="number" id="projectsCount" class="form-control" value="150">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="experienceYears">Years Experience</label>
                    <input type="number" id="experienceYears" class="form-control" value="5">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="happyClients">Happy Clients</label>
                    <input type="number" id="happyClients" class="form-control" value="98">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="heroImage">Hero Image</label>
                    <input type="file" id="heroImage" class="form-control">
                    <small class="form-text">Current: profile-square-1.webp</small>
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <button type="button" class="btn btn-outline-secondary">Preview</button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>
  </div>
@include('layouts.footer')
