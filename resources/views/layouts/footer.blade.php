   {{-- <footer id="footer" class="footer dark-background">
    <div class="container">
      <div class="copyright text-center">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Admin Panel</strong> <span>All Rights Reserved</span></p>
      </div>
    </div>
  </footer>
 <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}

 <!-- Vendor JS Files -->
  <script src="{{ asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('dashboard/vendor/aos/aos.js')}}"></script>

  <!-- Admin JS File -->
  {{-- <script src="{{ asset('/dashboard/js/admin.js')}}"></script> --}}
  {{-- <script src="{{ asset('/dashboard/vendor/aos/aos.js')}}"></script> --}}

<script>
function logouts(){
    event.preventDefault();
    document.getElementById('logout-form').submit();
}
</script>
</body>

</html>
