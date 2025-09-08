    <link rel="stylesheet" href="{{ asset('css/produk.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css"/>
      
<div class=" containerproduk2 flex-col gap-1" >
    <div class="flex justify-between mx-[50px]">
        <div class="judul-confetti-wrapper" style="position:relative; display:block;">
        <h1 class="judul text-2xl font-bold tracking-tight text-white">Yang baru diskon minggu ini</h1>
        </div>
        <button class="button1 text-sm text-blue-600">Lihat Semua ></button>
    </div>
    <div class="containerproduk">
        <ul id="autoWidth1" class="cs-hidden">
            <li class="item-a">
                <div class="box">
                    <div class="details">
                        <img src="{{ asset('image/applelogo.png') }}" alt="logo" class="logoapple" width="30px" style="height: auto;">
                    </div>
                    <img src="{{ asset('image/iphone16.png') }}" alt="hero image" class="model">
                    <p class="name">Iphone 16 Pro</p>
                    <button class="view">view details</button>

                </div>
                    <div class="spec-modal" style="display:none;">
    <div class="spec-content">
        <h2>Spesifikasi Iphone 16 Pro</h2>
        <ul>
            <li>Layar: 6.7" OLED</li>
            <li>Chipset: A18 Bionic</li>
            <li>Kamera: 48MP Triple</li>
            <li>Baterai: 4500mAh</li>
            <!-- Tambahkan spesifikasi lain sesuai produk -->
        </ul>
        <button class="close-spec">Tutup</button>
    </div>

            </li>

                        <li class="item-a">
                <div class="box">
                    <div class="details">
                        <img src="{{ asset('image/samsunglogo.png') }}" alt="logo" class="logosamsung" width="30px" style="height: auto;">
                    </div>
                    <img src="{{ asset('image/samsungs25.jpg') }}" alt="hero image" class="model">
                    <p class="name">Samsung S25</p>
                    <button class="view">view details</button>
                </div>
            </li>

                        <li class="item-a">
                <div class="box">
                    <div class="details">
                        <img src="{{ asset('image/applelogo.png') }}" alt="logo" class="logoapple" width="30px" style="height: auto;">
                    </div>
                    <img src="{{ asset('image/opporeno14f.jpg') }}" alt="hero image" class="model">
                    <p class="name">Iphone 16 Pro</p>
                    <button class="view">view details</button>
                </div>
            </li>

                        <li class="item-a">
                <div class="box">
                    <div class="details">
                        <img src="{{ asset('image/applelogo.png') }}" alt="logo" class="logoapple" width="30px" style="height: auto;">
                    </div>
                    <img src="{{ asset('image/iphone16.png') }}" alt="hero image" class="model">
                    <p class="name">Iphone 16 Pro</p>
                    <button class="view">view details</button>
                </div>
            </li>

                        <li class="item-a">
                <div class="box">
                    <div class="details">
                        <img src="{{ asset('image/applelogo.png') }}" alt="logo" class="logoapple" width="30px" style="height: auto;">
                    </div>
                    <img src="{{ asset('image/iphone16.png') }}" alt="hero image" class="model">
                    <p class="name">Iphone 16 Pro</p>
                    <button class="view">view details</button>
                </div>
            </li>

                        <li class="item-a">
                <div class="box">
                    <div class="details">
                        <img src="{{ asset('image/applelogo.png') }}" alt="logo" class="logoapple" width="30px" style="height: auto;">
                    </div>
                    <img src="{{ asset('image/iphone16.png') }}" alt="hero image" class="model">
                    <p class="name">Iphone 16 Pro</p>
                    <button class="view">view details</button>
                </div>
            </li>

             <li class="item-a">
                <div class="box">
                    <div class="details">
                        <img src="{{ asset('image/applelogo.png') }}" alt="logo" class="logoapple" width="30px" style="height: auto;">
                    </div>
                    <img src="{{ asset('image/iphone16.png') }}" alt="hero image" class="model">
                    <p class="name">Iphone 16 Pro</p>
                    <button class="view">view details</button>
                </div>
            </li>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <script src="{{ asset('js/produk.js') }}" defer></script>
</div>



