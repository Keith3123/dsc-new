<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Davao Sticker Custom</title>
  <script src="https://cdn.tailwindcss.com"></script> 
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;700;800&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Archivo', sans-serif;
    }
  </style>
</head>
<body class="font-archivo text-gray-800 bg-pink-50">
  <!-- Header -->
  <header class="bg-white shadow-md px-4 py-3">
  <div class="max-w-7xl mx-auto flex items-center justify-between relative">

    <!-- Logo (left) -->
    <div class="flex-shrink-0">
      <img src="logol.png" alt="DSC Logo" class="h-10 mt-2 mb-3">
    </div>

    <!-- Centered Nav (desktop) -->
    <nav class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 space-x-6 text-lg font-semibold">
      <a href="#" class="hover:text-red-700">Products</a>
      <a href="#" class="hover:text-red-700">Graphic Services</a>
      <a href="#" class="hover:text-red-700">Contact Us</a>
      <a href="#" class="hover:text-red-700">About Us</a>
    </nav>

    <!-- Login Button (right) -->
    <div class="hidden md:block">
      <button class="px-4 py-2 bg-black text-white rounded hover:bg-gray-700">
        Login
      </button>
    </div>

    <!-- Hamburger Button (mobile only) -->
    <button id="menu-toggle" class="md:hidden text-3xl">
      &#9776;
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="md:hidden hidden flex flex-col mt-4 space-y-3 text-lg font-semibold px-4">
    <a href="#" class="hover:text-red-700">Products</a>
    <a href="#" class="hover:text-red-700">Graphic Services</a>
    <a href="#" class="hover:text-red-700">Contact Us</a>
    <a href="#" class="hover:text-red-700">About Us</a>
    <button class="w-full py-2 bg-black text-white rounded hover:bg-gray-700">
      Login
    </button>
  </div>
</header>



  <section class="relative h-[80vh]">
  <section class="relative h-[80vh]">

  <!-- Hero Section -->
  <img src="logo.jpg" alt="Hero" class="absolute inset-0 w-full h-full object-cover z-0" />
  <div class="relative z-10 flex flex-col justify-between h-full text-center px-4 py-10">
    <div>
      <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 mb-2">Stick with Style. Stand Out Boldly</h1>
      <p class="text-lg md:text-2xl text-gray-800">Custom Stickers, Decals & Graphics Made to Elevate Your Brand, Gear, and Vibe.</p>
    </div>
    <div class="mt-6 font-medium text-3xl">
      <button class="px-6 py-2 bg-black text-white rounded hover:bg-gray-700 transition mr-2">Shop now</button>
      <button class="px-6 py-2 border border-black text-black rounded hover:bg-gray-300">Get a Quote</button>
    </div>
  </div>
</section>

  <!-- Quality Products -->
  <section class="bg-black text-white py-8 px-8">
  <div class="text-center max-w-5xl mx-auto">
    <h2 class="text-4xl font-bold mb-7">Creative solutions made visual.</h2>
    <p class="text-2xl">
      From bold logos to eye-catching decals and full vehicle wraps, we craft stunning visuals that turn heads and boost your brand.
      If you can imagine it we can design it.
    </p>
  </div>
</section>

  <!-- Quality Products Section -->
<section class="py-12 px-4">
  <h2 class="text-3xl font-bold text-center mb-10">Quality Products</h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
    
    <!-- Product Card 1 -->
    <div class="bg-white rounded-xl shadow-md p-4 text-center hover:shadow-lg transition">
      <img src="vinylStickers.jpg" alt="Vinyl Stickers" class="rounded mb-4 mx-auto">
      <p class="text-base font-semibold mb-2">Vinyl Stickers</p>
      <button class="px-4 py-2 bg-black text-white rounded hover:bg-gray-700 transition">Shop</button>
    </div>

    <!-- Product Card 2 -->
    <div class="bg-white rounded-xl shadow-md p-4 text-center hover:shadow-lg transition">
      <img src="/vehicledecal.avif" alt="Vehicle Decals" class="rounded mb-4 mx-auto">
      <p class="text-base font-semibold mb-2">Vehicle Decals</p>
      <button class="px-4 py-2 bg-black text-white rounded hover:bg-gray-700 transition">Shop</button>
    </div>

    <!-- Product Card 3 -->
    <div class="bg-white rounded-xl shadow-md p-4 text-center hover:shadow-lg transition">
      <img src="/bsignage.avif" alt="Business Signages" class="rounded mb-4 mx-auto">
      <p class="text-base font-semibold mb-2">Business Signages</p>
      <button class="px-4 py-2 bg-black text-white rounded hover:bg-gray-700 transition">Shop</button>
    </div>

    <!-- Product Card 4 -->
    <div class="bg-white rounded-xl shadow-md p-4 text-center hover:shadow-lg transition">
      <img src="/walldecal.jpg" alt="Wall Decals" class="rounded mb-4 mx-auto">
      <p class="text-base font-semibold mb-2">Wall Decals</p>
      <button class="px-4 py-2 bg-black text-white rounded hover:bg-gray-700 transition">Shop</button>
    </div>

    <!-- Product Card 5 -->
    <div class="bg-white rounded-xl shadow-md p-4 text-center hover:shadow-lg transition">
      <img src="/lanyard.jpg" alt="ID Lanyards" class="rounded mb-4 mx-auto">
      <p class="text-base font-semibold mb-2">ID Lanyards</p>
      <button class="px-4 py-2 bg-black text-white rounded hover:bg-gray-700 transition">Shop</button>
    </div>

    <!-- Product Card 6 -->
    <div class="bg-white rounded-xl shadow-md p-4 text-center hover:shadow-lg transition">
      <img src="/keychain.jpg" alt="Custom Keychains" class="rounded mb-4 mx-auto">
      <p class="text-base font-semibold mb-2">Custom Keychains</p>
      <button class="px-4 py-2 bg-black text-white rounded hover:bg-gray-700 transition">Shop</button>
    </div>

  </div>
</section>


  <!-- Featured Projects -->
  <section class="py-12 px-4">
    <h2 class="text-2xl font-bold text-center mb-6">Featured Projects</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
      <div class="border p-4 rounded shadow bg-white">
        <img src="/path-car1.jpg" alt="Car Wrap" class="mb-4">
        <h3 class="font-semibold">Racing Team Vehicle Wrap</h3>
        <p class="text-sm text-gray-500">Motorsport Wrap Design</p>
      </div>
      <div class="border p-4 rounded shadow bg-white">
        <img src="/path-car2.jpg" alt="Food Delivery" class="mb-4">
        <h3 class="font-semibold">Food Delivery Fleet Branding</h3>
        <p class="text-sm text-gray-500">Full Car Sticker Wrap</p>
      </div>
      <div class="border p-4 rounded shadow bg-white">
        <img src="/path-room.jpg" alt="Window Sticker" class="mb-4">
        <h3 class="font-semibold">Retail Store Window Graphics</h3>
        <p class="text-sm text-gray-500">Transparent Glass Decal</p>
      </div>
    </div>
    <div class="text-center mt-6">
      <button class="px-6 py-2 bg-pink-600 text-white rounded hover:bg-pink-700">View More</button>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black text-white py-8 px-6">
  <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between">
    <div class="flex flex-col items-start mb-4 md:mb-0">
      <img src="logo2.png" alt="DSC LogoFooter" class="h-12 w-auto mb-4">
      <p class="text-sm">Creative solutions made visual. We craft stunning designs that elevate <br> your brand logos, websites, marketing materials, and more. <br> Let's bring your vision to life.</p>
    </div>
      <div class="mt-4 md:mt-0">
        <h4 class="font-semibold mb-2">Product</h4>
        <ul class="text-sm space-y-1">
          <li><a href="#" class="hover:underline">Stickers</a></li>
          <li><a href="#" class="hover:underline">Vehicle Wraps</a></li>
          <li><a href="#" class="hover:underline">Wall Decals</a></li>
        </ul>
      </div>
      <div class="mt-4 md:mt-0">
        <h4 class="font-semibold mb-2">About</h4>
        <ul class="text-sm space-y-1">
          <li><a href="#" class="hover:underline">Our Story</a></li>
          <li><a href="#" class="hover:underline">Team</a></li>
          <li><a href="#" class="hover:underline">Careers</a></li>
        </ul>
      </div>
      <div class="mt-4 md:mt-0">
        <h4 class="font-semibold mb-2">Connect</h4>
        <ul class="text-sm space-y-1">
          <li><a href="#" class="hover:underline">Facebook</a></li>
          <li><a href="#" class="hover:underline">Instagram</a></li>
          <li><a href="#" class="hover:underline">Email Us</a></li>
        </ul>
      </div>
    </div>
    <div class="mt-12 text-center text-xs text-gray-400">
      &copy; 2025 Davao Sticker Custom. All rights reserved. | Terms & Conditions | Privacy Policy
    </div>
  </footer>
  <script>
  const toggleButton = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');

  toggleButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>
</body>

</html>
