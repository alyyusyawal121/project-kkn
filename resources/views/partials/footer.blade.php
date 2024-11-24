<footer id="footer" class="footer dark-background">
  <div class="container footer-top py-5">
    <div class="row gy-4">
      
      <!-- Logo & Contact Info Section -->
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.html" class="logo d-flex align-items-center mb-3">
          <span class="sitename text-light fs-3">Surodakan</span>
        </a>
        <div class="footer-contact text-light pt-2">
          <p>Kantor Kelurahan Surodakan,Jl. Diponegoro No.23, Krajan, Surodakan, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66316</p>
          <p><strong>Phone:</strong> </p>
          <p><strong>Email:</strong> </p>
        </div>
      </div>

      <!-- Useful Links Section -->
      <div class="col-lg-2 col-md-3 footer-links">
        <h4 class="text-light">Useful Links</h4>
        <ul class="list-unstyled">
          <li><a href="#">Home</a></li>
          <li><a href="/potensi">Program</a></li>
          <li><a href="/galeri">Gallery</a></li>
          <li><a href="/blog">Blog</a></li>
        </ul>
      </div>

      <!-- Comment Section -->
      <div class="col-lg-4 col-md-12 footer-comment">
        <h4 class="text-light">Feedback</h4>
        <p class="text-light">Leave your comments or suggestions to help us improve!</p>
        <form action="{{ route('comments.store') }}" method="POST" class="php-mail-form">
          @csrf
          <div class="comment-form">
              <textarea name="comment" rows="4" class="form-control mb-3" placeholder="Enter your comment here..." required></textarea>
              <button type="submit" class="btn btn-dark w-100">Send Comment</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer Bottom Section -->
  <div class="container text-center py-4">
    <p class="">&copy; <strong class="sitename">Universitas Negeri Malang</strong> All Rights Reserved</p>
    <p class="credits text-light">
      Designed by <a href="https://www.instagram.com/kkn.um.surodakan/" class="text-decoration-none">Kelompok KKN UM Surodakan</a>
    </p>
  </div>
</footer>

