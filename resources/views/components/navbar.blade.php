<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<nav class="navbar z-50">
  <div class="flex items-center justify-between px-4 h-16">
    <!-- Logo -->
    <div class="kolom-navbar nav-links hidden md:flex items-center space-x-2">
      <x-notification/>    
      <a href="/" class="nav-link">Home</a>
      <a href="/about" class="nav-link">About</a>
      <a href="/katalog" class="nav-link">Katalog</a>      
    </div>
    
    <div class="logobiz ">
      <img src="{{ asset('image/logobizponsel1.png') }}" alt="Logo 1" class="logobiz1 w-12 h-12" />
      <img src="{{ asset('image/logobizponsel2.png') }}" alt="Logo 2" class="logobiz2 w-38 h-20 object-contain mt-2" />
    </div>

    <x-searchbar/>

    <!-- Mobile Menu Button -->
    <button id="mobile-menu-toggle" class="md:hidden p-2 rounded bg-gray-800 text-white">
      <i class="fas fa-bars"></i>
    </button>
  </div>
  <!-- Mobile Navigation -->
  <div id="mobile-menu" class="mobile-nav hidden md:hidden px-4 pb-4">
    <a href="/" class="nav-link block">Home</a>
    <a href="/about" class="nav-link block">About</a>
    <a href="/katalog" class="nav-link block">Katalog</a>
    <x-notification/>
  </div>
</nav>

 <script src="{{ asset('js/navigation.js') }}"></script>