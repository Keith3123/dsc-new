@extends('layouts.app')

@section('title', 'Official Page | Davao Sticker Custom')

@section('content') 


   {{-- Hero Section --}}
  <section class="relative h-[80vh]">
    <img src="logo.jpg" alt="Hero" class="absolute inset-0 w-full h-full object-cover z-0" />
    <div class="relative z-10 flex flex-col justify-between h-full text-center px-4 py-10">
      <div>
        <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 mb-2">Stick with Style. Stand Out Boldly</h1>
        <p class="text-lg md:text-2xl text-gray-800">Custom Stickers, Decals & Graphics Made to Elevate Your Brand, Gear, and Vibe.</p>
      </div>
      <div class="mt-6 font-medium text-3xl flex-col sm:flex-row items-center sm:space-x-4 space-y-3 sm:space-y-0">
        <a href="{{route('pages.product')}}" class="px-6 py-2 bg-black text-white rounded hover:bg-gray-700 transition">Shop now</a>
        <button class="px-6 py-2 border border-black text-black rounded hover:bg-gray-300">Get a Quote</button>
      </div>
    </div>
  </section>

  {{-- Quality Statement --}}
  <section class="bg-black text-white py-8 px-8">
    <div class="text-center max-w-5xl mx-auto">
      <h2 class="text-4xl font-bold mb-7">Creative solutions made visual.</h2>
      <p class="text-2xl">From bold logos to eye-catching decals and full vehicle wraps, we craft stunning visuals...</p>
    </div>
  </section>

    {{-- Cards go here --}}
    <!-- [Your Product Cards] -->
     <!-- Quality Products Section -->
    <section class="py-12 px-4">
      <h2 class="text-3xl font-bold text-center mb-10">Quality Products</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
    
    <!-- Product Card 1 -->
    <div class="bg-white rounded-xl shadow-md p-4 text-center hover:shadow-lg transition">
      <img src="vinylStickers.jpg" alt="Vinyl Stickers" class="rounded mb-4 mx-auto">
      <p class="text-base font-semibold mb-2">Vinyl Stickers</p>
      <a href="{{route('pages.product')}}" class="px-4 py-2 bg-black text-white rounded hover:bg-gray-700 transition">Shop</a>
    </div>

    <!-- Product Card 2 -->
    <div class="bg-white rounded-xl shadow-md p-4 text-center hover:shadow-lg transition">
      <img src="/vehicledecal.avif" alt="Vehicle Decals" class="rounded mb-4 mx-auto">
      <p class="text-base font-semibold mb-2">Vehicle Decals</p>
      <a href="{{route('pages.product')}}" class="px-4 py-2 bg-black text-white rounded hover:bg-gray-700 transition">Shop</a>
    </div>

    <!-- Product Card 3 -->
    <div class="bg-white rounded-xl shadow-md p-4 text-center hover:shadow-lg transition">
      <img src="/bsignage.avif" alt="Business Signages" class="rounded mb-4 mx-auto">
      <p class="text-base font-semibold mb-2">Business Signages</p>
      <a href="{{route('pages.product')}}" class="px-4 py-2 bg-black text-white rounded hover:bg-gray-700 transition">Shop</a>
    </div>

    <!-- Product Card 4 -->
    <div class="bg-white rounded-xl shadow-md p-4 text-center hover:shadow-lg transition">
      <img src="/walldecal.jpg" alt="Wall Decals" class="rounded mb-4 mx-auto">
      <p class="text-base font-semibold mb-2">Wall Decals</p>
      <a href="{{route('pages.product')}}" class="px-4 py-2 bg-black text-white rounded hover:bg-gray-700 transition">Shop</a>
    </div>

    <!-- Product Card 5 -->
    <div class="bg-white rounded-xl shadow-md p-4 text-center hover:shadow-lg transition">
      <img src="/lanyard.jpg" alt="ID Lanyards" class="rounded mb-4 mx-auto">
      <p class="text-base font-semibold mb-2">ID Lanyards</p>
      <a href="{{route('pages.product')}}" class="px-4 py-2 bg-black text-white rounded hover:bg-gray-700 transition">Shop</a>
    </div>

    <!-- Product Card 6 -->
    <div class="bg-white rounded-xl shadow-md p-4 text-center hover:shadow-lg transition">
      <img src="/keychain.jpg" alt="Custom Keychains" class="rounded mb-4 mx-auto">
      <p class="text-base font-semibold mb-2">Custom Keychains</p>
      <a href="{{route('pages.product')}}" class="px-4 py-2 bg-black text-white rounded hover:bg-gray-700 transition">Shop</a>
    </div>

  </div>
</section>

    {{-- Projects go here --}}
    <!-- [Your Featured Projects] -->
    <section class="py-12 px-4">
  <h2 class="text-2xl font-bold text-center mb-6">Featured Projects</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
    
    <!-- Project Card 1 -->
    <div class="flex flex-col border p-4 rounded shadow bg-white h-full">
      <img src="carWrapProj.webp" alt="Car Wrap" class="mb-4">
      <div class="mt-auto">
        <h3 class="font-semibold">Racing Team Vehicle Wrap</h3>
        <p class="text-sm text-gray-500">Motorsport Wrap Design</p>
      </div>
    </div>

    <!-- Project Card 2 -->
    <div class="flex flex-col border p-4 rounded shadow bg-white h-full">
      <img src="fDelBranding.png" alt="Food Delivery" class="mb-4">
      <div class="mt-auto">
        <h3 class="font-semibold">Food Delivery Fleet Branding</h3>
        <p class="text-sm text-gray-500">Full Car Sticker Wrap</p>
      </div>
    </div>

    <!-- Project Card 3 -->
    <div class="flex flex-col border p-4 rounded shadow bg-white h-full">
      <img src="retailStoreBranding.jpg" alt="Window Sticker" class="mb-4">
      <div class="mt-auto">
        <h3 class="font-semibold">Retail Store Window Graphics</h3>
        <p class="text-sm text-gray-500">Transparent Glass Decal</p>
      </div>
    </div>

  </div>

  <div class="text-center mt-6">
    <a href="{{route('pages.proj')}}" class="inline-block px-6 py-2 bg-black text-white rounded hover:bg-gray-700 transition">View More</a>
  </div>
</section>

@endsection
