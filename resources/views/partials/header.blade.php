<header class="bg-white shadow-md px-4 py-3 relative">
  <div class="relative h-16 w-full flex items-center justify-center">
    
    <!-- Logo -->
    <div class="absolute left-0 top-1/2 transform -translate-y-1/2">
      <a href="/">
        <img src="logol.png" alt="DSC Logo" class="h-16">
      </a>
    </div>

    <!-- Centered navigation links (large screens) -->
    <nav class="hidden lg:flex space-x-10 text-2xl font-semibold relative items-center">
      <a href="#" class="hover:text-red-700">Home</a>
      <a href="#" class="hover:text-red-700">Products</a>
      <a href="#" class="hover:text-red-700">Projects</a>

      <!-- About Us Dropdown (desktop) -->
      <div class="relative">
        <button id="desktop-about-toggle" class="flex items-center gap-1 hover:text-red-700 focus:outline-none">
          About Us
          <svg class="w-4 h-4 transform transition-transform" id="desktop-arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div id="desktop-about-menu" class="absolute hidden bg-white text-black shadow-xl rounded-xl mt-3 w-48 z-20">
          <div class="p-4 space-y-2">
            <a href="#" class="block hover:text-red-700">Contact</a>
            <a href="#" class="block hover:text-red-700">Service</a>
            <a href="#" class="block hover:text-red-700">Location</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Login Button -->
    <div class="absolute right-4 top-1/2 transform -translate-y-1/2 hidden lg:block">
      <button class="px-6 py-3 text-xl bg-black text-white rounded-lg hover:bg-gray-700 font-bold">
        Login
      </button>
    </div>

    <!-- Hamburger menu -->
    <button id="menu-toggle" class="lg:hidden absolute right-4 text-3xl">&#9776;</button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="lg:hidden hidden flex flex-col mt-4 space-y-3 text-lg font-semibold px-4">
    <a href="#" class="hover:text-red-700">Home</a>
    <a href="#" class="hover:text-red-700">Products</a>
    <a href="#" class="hover:text-red-700">Projects</a>

    <!-- Mobile About Us Dropdown -->
    <div>
      <button id="mobile-about-toggle" class="flex items-center justify-between w-full hover:text-red-700">
        About Us
        <svg class="w-4 h-4 ml-2 transform transition-transform" id="mobile-arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <div id="mobile-about-menu" class="hidden mt-2 bg-white text-black shadow-xl rounded-xl p-4 space-y-2">
        <a href="#" class="block hover:text-red-700">Contact</a>
        <a href="#" class="block hover:text-red-700">Service</a>
        <a href="#" class="block hover:text-red-700">Location</a>
      </div>
    </div>

    <button class="w-full py-2 bg-black text-white rounded hover:bg-gray-700">Login</button>
  </div>

  <!-- JavaScript for toggles -->
  <script>
    const toggleButton = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    const desktopAboutToggle = document.getElementById('desktop-about-toggle');
    const desktopAboutMenu = document.getElementById('desktop-about-menu');
    const desktopArrow = document.getElementById('desktop-arrow');

    const mobileAboutToggle = document.getElementById('mobile-about-toggle');
    const mobileAboutMenu = document.getElementById('mobile-about-menu');
    const mobileArrow = document.getElementById('mobile-arrow');

    toggleButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });

    desktopAboutToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      desktopAboutMenu.classList.toggle('hidden');
      desktopArrow.classList.toggle('rotate-180');
    });

    mobileAboutToggle.addEventListener('click', () => {
      mobileAboutMenu.classList.toggle('hidden');
      mobileArrow.classList.toggle('rotate-180');
    });

    // Close desktop dropdown when clicking outside
    window.addEventListener('click', (e) => {
      if (!desktopAboutToggle.contains(e.target) && !desktopAboutMenu.contains(e.target)) {
        desktopAboutMenu.classList.add('hidden');
        desktopArrow.classList.remove('rotate-180');
      }
    });
  </script>
</header>
