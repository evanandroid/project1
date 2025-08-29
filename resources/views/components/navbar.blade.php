<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<div>
    <nav class="navbar sticky top-0 z-50 bg-linear-180">
    <div class=" max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-30 items-center justify-between">
        <div class=" flex items-center">
          <div class="ml-10 shrink-0">
            <img src="{{ asset ('image/logobizponsel1.png') }}" alt="Logo Perusahaan" class="logobiz inline size-16 right-50"/>
            <img src="{{ asset ('image/logobizponsel2.png') }}" alt="Logo Perusahaan" class="logobiz2 inline size-40 object-contain mt-3" /> 
          </div>
        </div>
          <div class="navigation md:block mr-10">
            <div class="flex flex-row items-baseline space-x-2">  
              <x-searchbar></x-searchbar>    
              <x-navlink href="/">Home</x-navlink>
              <a href="/about" class="{{ request()->is('about') ? 'bg-gray-900 text-white rounded-2xl px-3 py-2' : 'text-gray-300 hover:bg-gray-700 hover:text-white  rounded-2xl px-3 py-2' }} px-3 py-2 text-sm font-medium text-white hover:bg-gray-700 hover:text-white">About</a>
              <a href="/katalog" class="{{ request()->is('katalog') ? 'bg-gray-900 text-white rounded-2xl px-3 py-2' : 'text-gray-300 hover:bg-gray-700 hover:text-white rounded-2xl px-3 py-2' }} px-3 py-2 text-sm font-medium text-white hover:bg-gray-700 hover:text-white">Katalog</a>
              <a href="/katalog" class="{{ request()->is('katalog') ? 'bg-gray-900 text-white rounded-2xl px-3 py-2' : 'text-gray-300 hover:bg-gray-700 hover:text-white rounded-2xl px-3 py-2' }} px-3 py-2 text-sm font-medium text-white hover:bg-gray-700 hover:text-white">Katalog</a>
              <x-notification></x-notification>
            </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/SplitText.min.js"></script>
        
          </div>
        
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" id="mobile-menu-toggle" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
              <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
              <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <el-disclosure id="mobile-menu" class="block md:hidden">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" aria-current="page" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Dashboard</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Reports</a>
      </div>
     
          <button type="button" class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
              <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
      </div>
    </el-disclosure>
  </nav> 
</div>
 <script src="{{ asset('js/navigation.js') }}"></script>