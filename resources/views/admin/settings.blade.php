@include('layouts.header')
    <!-- Page Content -->
    <main class="page-content">
      <section class="content-section active">
        <div class="section-header">
          <h1>Settings</h1>
          <p>Manage your site settings</p>
        </div>

        <div class="row g-4">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5>General Settings</h5>
              </div>
              <div class="card-body">
                <form class="admin-form">
                  <div class="form-group">
                    <label for="siteTitle">Site Title</label>
                    <input type="text" id="siteTitle" class="form-control" value="Alex Smith Portfolio">
                  </div>
                  <div class="form-group">
                    <label for="siteDescription">Site Description</label>
                    <textarea id="siteDescription" class="form-control" rows="3">Creative Designer, Developer, Freelancer, Artist</textarea>
                  </div>
                  <div class="form-group">
                    <label for="contactEmail">Contact Email</label>
                    <input type="email" id="contactEmail" class="form-control" value="info@example.com">
                  </div>
                  <div class="form-group">
                    <label for="contactPhone">Contact Phone</label>
                    <input type="tel" id="contactPhone" class="form-control" value="+1 5589 55488 55">
                  </div>
                  <button type="submit" class="btn btn-primary">Save Settings</button>
                </form>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5>Social Media</h5>
              </div>
              <div class="card-body">
                <form class="admin-form">
                  <div class="form-group">
                    <label for="twitterUrl">Twitter URL</label>
                    <input type="url" id="twitterUrl" class="form-control" value="https://twitter.com">
                  </div>
                  <div class="form-group">
                    <label for="linkedinUrl">LinkedIn URL</label>
                    <input type="url" id="linkedinUrl" class="form-control" value="https://linkedin.com">
                  </div>
                  <div class="form-group">
                    <label for="githubUrl">GitHub URL</label>
                    <input type="url" id="githubUrl" class="form-control" value="https://github.com">
                  </div>
                  <div class="form-group">
                    <label for="instagramUrl">Instagram URL</label>
                    <input type="url" id="instagramUrl" class="form-control" value="https://instagram.com">
                  </div>
                  <button type="submit" class="btn btn-primary">Save Social Links</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
@include('layouts.footer')

