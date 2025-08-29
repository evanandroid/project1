  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">  
<!-- FOOTER -->
<footer class="footer">
  <div class="footer-container">
    <div class="footer1">
      <div class="logo-footer">
        <img src="{{ asset ('image/logobizponsel1.png') }}" alt="Logo Perusahaan" class="logobiz1 inline size-16 "/>
        <img src="{{ asset ('image/logobizponsel2.png') }}" alt="Logo Perusahaan" class="logobiz1 inline size-40 object-contain"/> 
      </div>
      <!-- Kiri -->
      <div class="footer-links">
        <div class="footer-column">
          <h4>Home</h4>
          <ul>
            <li><a href="/about">About</a></li>
            <li><a href="/katalog">Katalog</a></li>
            <li><a href="/store">Store</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>About</h4>
          <ul>
            <li><a href="#">Our Story</a></li>
            <li><a href="#">Our Founder</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>Help</h4>
          <ul>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Accessibility</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Kanan -->
    <div class="footer-newsletter">
      <h2>Newsletter</h2>
      <p>Get the latest about us and <strong>sign up to get 10% off</strong> today. Never miss a single promo.</p>
      <form>
        <input type="email" placeholder="Enter email address" required>
        <button type="submit">SUBSCRIBE</button>
      </form>
    </div>
  </div>

  <!-- Bawah -->
  <div class="footer-bottom">
    <div class="social-icons">
      <a href="https://www.instagram.com/biz.ponsel.pusat/" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="https://api.whatsapp.com/send?phone=6281234567890" target="_blank"><i class="fab fa-tiktok"></i></a>
      <a href="https://api.whatsapp.com/send?phone=6285728074682"><i class="fab fa-whatsapp"></i></a>
    </div>
    <p>© 2025 Indo Bismar. All Rights Reserved</p>
    <div class="footer-terms">
      <a href="#">Terms of Service</a>
      <a href="#">Privacy & Policy</a>
    </div>
  </div>
</footer>

<script src="{{ asset('js/footer.js') }}" defer></script>