@include('layouts.header')
    <!-- Page Content -->

@section('message_success')

@if(session('success'))
    <div class="alert alert-primary" role="alert">
        {{ session('success') }}
    </div>
@endif

@endsection
    <main class="page-content">
      <section class="content-section active">
        <div class="section-header">
          <h1>Dasturchi haqida</h1>
          <p>Bor malumotlarni faqat yangilsh mumkin !</p>
        </div>
        <div class="card">
          <div class="card-header">
            <h5>Hero</h5>
          </div>
          <div class="container" >
            @yield('message_success')
          </div>
          <div class="card-body">
            <form class="admin-form" method="POST" id="heroForm" action="{{ route('admin.hero_update', $hero->id) }}" enctype="multipart/form-data" >
                @method('PUT')
                @csrf
              <div class="row g-4">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="heroTitle">Asosiy Sarlavxa</label>
                    <input name="main" type="text" id="heroTitle" class="form-control" value="{{ $hero->main; }}" disabled >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="heroSubtitle">sub title</label>
                    <input name="subtitle" type="text" id="heroSubtitle" class="form-control" value="{{ $hero->subtitle; }}" disabled>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="heroDescription">Description</label>
                    <textarea name="description" id="heroDescription" class="form-control" rows="4" disabled>{{ $hero->description; }}</textarea>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="projectsCount">Projects Completed</label>
                    <input name="project" type="number" id="projectsCount" class="form-control" value="{{ $hero->project; }}" disabled>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="experienceYears">Years Experience</label>
                    <input name="experince" type="number" id="experienceYears" class="form-control" value="{{ $hero->experince; }}" disabled>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="happyClients">Happy Clients</label>
                    <input name="clients" type="number" id="happyClients" class="form-control" value="{{ $hero->clients; }}" disabled>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="heroImage">Hero Image</label>
                    <input name="image" type="file" id="heroImage" class="form-control" disabled>
                    <small class="form-text">Current: profile-square-1.webp</small>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">

                    <input name="checbox" type="checkbox" id="heroCheck" class="btn  btn-info" >
                    <a class="text-warning" >ma'lumotlarni yangilashga rozilik berish!</a>
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-primary" disabled>Save Changes</button>
                <button type="button" class="btn btn-outline-secondary">Preview</button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>
  </div>
<script>
$(document).ready(function(){
    $('#heroCheck').on('change', function(){
        // checkbox belgilangan bo'lsa form inputlarini yoqish
        $('#heroForm :input').not(this).prop('disabled', !this.checked);
    });
});
</script>
@include('layouts.footer')
