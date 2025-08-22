<link rel="stylesheet" href="{{ asset('css/iklan1.css') }}">

<div class= "slider-container flex flex-col items-center px-10 rounded-2xl">
    <div class= "slide active">
        <img src="{{ asset('image/iklan1.jpg') }}" alt="iklan1" class="h-full w-full object-cover rounded-2xl">
    </div>
    <div class= "slide">
        <img src="{{ asset('image/iklan2.jpg') }}" alt="iklan2" class="h-full w-full object-cover rounded-2xl">
    </div>
    <div class= "slide">
        <img src="{{ asset('image/iklan3.jpg') }}" alt="iklan3" class="h-full w-full object-cover rounded-2xl">
    </div>
    <div class= "slide">
        <img src="{{ asset('image/iklan4.jpg') }}" alt="iklan4" class="h-full w-full object-cover rounded-2xl">
    </div>
    
    <button id="prev" class="nav-button"  >&#10094;</button>
    <button id="next" class="nav-button"  >&#10095;</button>

    <div class="dots-container"></div>
</div>

<script src="{{ asset('js/iklan1.js') }}" defer></script>