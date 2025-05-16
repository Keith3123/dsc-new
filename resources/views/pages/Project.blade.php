@extends('layouts.app')

@section('title', 'Our Projects')

@section('content')
<section class="w-full py-12 bg-white">
  <div class="max-w-screen-xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-4">Our Projects</h2>
    <p class="text-base text-center text-gray-700 leading-relaxed mb-10">
      Explore our range of high-quality projects Davao Sticker Custom has successfully completed — from eye-catching vehicle wraps and durable vinyl stickers to high-impact business signage and custom merchandise. Our work helps local businesses in Davao stand out with bold, professional, and creative visual solutions.
    </p>

    {{-- Projects Grid --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
      {{-- Project Cards --}}
      <div class="bg-white shadow-md rounded-2xl p-4 hover:shadow-lg transition-transform duration-200 transform hover:-translate-y-1">
        <img src="hondaCivicProj.jpg" alt="Project 1" class="w-full h-60 object-cover rounded-lg mb-4">
        <h3 class="text-xl font-semibold mb-2">Honda Civic</h3>
        <p class="text-sm text-gray-600">HONDA CIVIC change color from BLACK to PINK</p>
      </div>

      <div class="bg-white shadow-md rounded-2xl p-4 hover:shadow-lg transition-transform duration-200 transform hover:-translate-y-1">
        <img src="Elevation.jpg" alt="Project 2" class="w-full h-60 object-cover rounded-lg mb-4">
        <h3 class="text-xl font-semibold mb-2">Elevation Fitness Gym</h3>
        <p class="text-sm text-gray-600">Custom design decals for Elevation Fitness Gym van.</p>
      </div>

      <div class="bg-white shadow-md rounded-2xl p-4 hover:shadow-lg transition-transform duration-200 transform hover:-translate-y-1">
        <img src="sniper155.jpg" alt="Project 3" class="w-full h-60 object-cover rounded-lg mb-4">
        <h3 class="text-xl font-semibold mb-2">Sniper-155 Sticker Wrap</h3>
        <p class="text-sm text-gray-600">Quality decals and stickers on a wonderful Sniper-155.</p>
      </div>

      <div class="bg-white shadow-md rounded-2xl p-4 hover:shadow-lg transition-transform duration-200 transform hover:-translate-y-1">
        <img src="B2B.jpg" alt="Project 4" class="w-full h-60 object-cover rounded-lg mb-4">
        <h3 class="text-xl font-semibold mb-2">Bumper 2 Bumper Carshow</h3>
        <p class="text-sm text-gray-600">Matina Global Township Bumper2Bumper Carshow</p>
      </div>

      <div class="bg-white shadow-md rounded-2xl p-4 hover:shadow-lg transition-transform duration-200 transform hover:-translate-y-1">
        <img src="quibs.jpg" alt="Project 5" class="w-full h-60 object-cover rounded-lg mb-4">
        <h3 class="text-xl font-semibold mb-2">Pstr. A.Quiboloy Car Decal</h3>
        <p class="text-sm text-gray-600">Pstr. A.Quiboloy custom campaign car decal.</p>
      </div>

      <div class="bg-white shadow-md rounded-2xl p-4 hover:shadow-lg transition-transform duration-200 transform hover:-translate-y-1">
        <img src="tatayDigs.jpg" alt="Project 6" class="w-full h-60 object-cover rounded-lg mb-4">
        <h3 class="text-xl font-semibold mb-2">FPRRD Custom Sticker</h3>
        <p class="text-sm text-gray-600">I stand with tatay digong custom sticker.</p>
      </div>
    </div>

    {{-- View All Projects Button --}}
    <div class="text-center mt-10">
      <a class="inline-block bg-black text-white px-6 py-2 rounded hover:bg-gray-700 transition">
        View All Projects
      </a>
    </div>
  </div>
</section>

{{-- Testimonials Section --}}
<section class="w-full py-16 bg-gray-50">
  <div class="max-w-screen-xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-8">What Our Clients Say</h2>

    <div class="overflow-x-auto">
      <div class="flex space-x-6 px-2 pb-4">
        {{-- Testimonial Card 1 --}}
        <div class="min-w-[340px] max-w-sm bg-white p-6 rounded-xl shadow-md flex-shrink-0">
          <div class="flex items-center gap-4 mb-4">
            <img src="girlT.jpg" alt="Client 1" class="w-12 h-12 rounded-full object-cover">
            <div>
              <h4 class="font-semibold text-lg">Marianne B.</h4>
              <p class="text-sm text-gray-500">Local Business Owner</p>
            </div>
          </div>
          <p class="text-gray-700 mb-3">"Davao Sticker Custom exceeded my expectations! Their design team is creative and very professional. Highly recommended!"</p>
          <div class="flex text-yellow-400">
            @for ($i = 0; $i < 5; $i++)
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" viewBox="0 0 20 20">
                <path d="M9.049 2.927C9.332 2.093 10.668 2.093 10.951 2.927l1.259 3.907h4.104c.887 0 1.255 1.136.54 1.67l-3.32 2.413 1.26 3.908c.283.834-.755 1.528-1.54 1.004L10 13.011l-3.304 2.818c-.785.524-1.823-.17-1.54-1.004l1.26-3.908-3.32-2.413c-.715-.534-.347-1.67.54-1.67h4.104L9.049 2.927z"/>
              </svg>
            @endfor
          </div>
        </div>

        {{-- Testimonial Card 2 --}}
        <div class="min-w-[340px] max-w-sm bg-white p-6 rounded-xl shadow-md flex-shrink-0">
          <div class="flex items-center gap-4 mb-4">
            <img src="boyT.jpg" alt="Client 2" class="w-12 h-12 rounded-full object-cover">
            <div>
              <h4 class="font-semibold text-lg">Jonathan D.</h4>
              <p class="text-sm text-gray-500">Car Enthusiast</p>
            </div>
          </div>
          <p class="text-gray-700 mb-3">"Amazing attention to detail! My car wrap turned out even better than I imagined. Will definitely be back!"</p>
          <div class="flex text-yellow-400">
            @for ($i = 0; $i < 5; $i++)
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" viewBox="0 0 20 20">
                <path d="M9.049 2.927C9.332 2.093 10.668 2.093 10.951 2.927l1.259 3.907h4.104c.887 0 1.255 1.136.54 1.67l-3.32 2.413 1.26 3.908c.283.834-.755 1.528-1.54 1.004L10 13.011l-3.304 2.818c-.785.524-1.823-.17-1.54-1.004l1.26-3.908-3.32-2.413c-.715-.534-.347-1.67.54-1.67h4.104L9.049 2.927z"/>
              </svg>
            @endfor
          </div>
        </div>

        {{-- Testimonial Card 3 --}}
        <div class="min-w-[340px] max-w-sm bg-white p-6 rounded-xl shadow-md flex-shrink-0">
          <div class="flex items-center gap-4 mb-4">
            <img src="girl2T.jpg" alt="Client 3" class="w-12 h-12 rounded-full object-cover">
            <div>
              <h4 class="font-semibold text-lg">Elaine C.</h4>
              <p class="text-sm text-gray-500">Freelance Designer</p>
            </div>
          </div>
          <p class="text-gray-700 mb-3">"From stickers to shirts, everything was perfect. Super friendly staff and top-notch printing quality!"</p>
          <div class="flex text-yellow-400">
            @for ($i = 0; $i < 5; $i++)
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" viewBox="0 0 20 20">
                <path d="M9.049 2.927C9.332 2.093 10.668 2.093 10.951 2.927l1.259 3.907h4.104c.887 0 1.255 1.136.54 1.67l-3.32 2.413 1.26 3.908c.283.834-.755 1.528-1.54 1.004L10 13.011l-3.304 2.818c-.785.524-1.823-.17-1.54-1.004l1.26-3.908-3.32-2.413c-.715-.534-.347-1.67.54-1.67h4.104L9.049 2.927z"/>
              </svg>
            @endfor
          </div>
        </div>
      </div>
    </div>

    {{-- View All Testimonials Button --}}
    <div class="text-center mt-6">
      <a  class="inline-block bg-black text-white px-6 py-2 rounded hover:bg-gray-700 transition">
        View All Testimonials
      </a>
    </div>
  </div>
</section>
@endsection
