@include('layouts.header')
    <!-- Page Content -->
    <main class="page-content">
      <section class="content-section active">
        <div class="section-header">
          <h1>Contact Messages</h1>
          <p>Manage incoming messages</p>
        </div>

        <div class="card">
          <div class="card-header">
            <h5>Recent Messages</h5>
          </div>
          <div class="card-body">
            <div class="messages-list">
              <div class="message-item">
                @foreach ($message as $item)

              <div class="message-item">
                <div class="message-avatar">
                  <img src="../assets/img/person/person-m-2.webp" alt="User" class="avatar">
                </div>
                <div class="message-content">
                  <div class="message-header">
                    <h6>Michael Johnson</h6>
                    <span class="message-time">1 day ago</span>
                  </div>
                  <p class="mb-2"><strong>Email:</strong> michael.j@example.com</p>
                  <p>Great portfolio! I'd like to discuss a potential project with you.</p>
                  <div class="message-actions">
                    <button class="btn btn-sm btn-primary">Reply</button>
                    <button class="btn btn-sm btn-outline-secondary">Mark as Read</button>
                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
       <div class="d-flex justify-content-center mt-3">
             {{ $message->links() }}
        </div>
    </main>
  </div>
  @include('layouts.footer')
