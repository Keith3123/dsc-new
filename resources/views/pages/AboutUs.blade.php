@extends('layouts.app')

@section('title', 'About Us - Davao Sticker Custom')

@section('content')
<main class="max-w-6xl mx-auto py-20 px-6">
    <div class="flex flex-col md:flex-row items-center md:items-start gap-10">
        {{-- Text Content --}}
        <div class="md:w-1/2 text-center md:text-left">
            <h1 class="text-xl font-semibold mb-6">About Us</h1>
            <p class="mb-6 text-base leading-relaxed">
                At Davao Sticker Custom, we bring your ideas to life through high-quality custom printing and design. From vinyl stickers and business signage to custom shirts and decals, our passion is helping brands stand out. Locally rooted and creatively driven, we’re committed to delivering fast, affordable, and reliable printing solutions for individuals and businesses across Davao City.
            </p>

            <h2 class="text-lg font-semibold mb-4">Our Story</h2>
            <p class="text-base leading-relaxed">
                What began as a small local venture in the heart of Davao City has grown into one of the region’s go-to names for quality custom prints. Located at <strong>R. Castillo St., Brgy Ubalde, Agdao, Davao City</strong>, Davao Sticker Custom was built on the belief that creativity should be accessible and affordable. With a passion for design and a commitment to top-tier service, we’ve helped countless individuals and businesses bring their visions to life — one sticker, shirt, and sign at a time.
            </p>
        </div>

        {{-- Shop Image --}}
        <div class="md:w-1/2 mt-8">
            <img src="{{ asset('dscStore.jpg') }}" alt="Davao Sticker Custom Shop" class="rounded-lg shadow-lg w-full h-auto">
        </div>
    </div>
</main>

{{-- Google Map --}}
<section class="bg-white py-12 px-6">
    <div class="max-w-5xl mx-auto">
        <div class="mt-8 mb-8">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.034091927927!2d125.613927314769!3d7.073034594847503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32fca3a0a7a3a3a3%3A0x123456789abcdef!2sR.%20Castillo%20St.%2C%20Davao%20City!5e0!3m2!1sen!2sph!4v1698652800000!5m2!1sen!2sph"
                width="100%"
                height="300"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Map showing R. Castillo St. Brgy Ubalde Agdao Davao City">
            </iframe>
        </div>

        {{-- Google Maps Button --}}
        <div class="mb-12 text-center">
            <a href="https://www.google.com/maps/place/R.+Castillo+St,+Davao+City" target="_blank" class="inline-block bg-black text-white px-6 py-2 rounded hover:bg-gray-700 transition">
                View on Google Maps
            </a>
        </div>
    </div>
</section>

{{-- Contact Info Section --}}
<section class="bg-gray-50 py-16 px-6 rounded">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-lg font-semibold mb-4">Contact Us</h2>
        <p class="mb-4">We'd love to hear from you! Reach out to us via:</p>

        <p class="mb-1 flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m0 8V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2h14a2 2 0 002-2z" />
            </svg>
            davaostickercustom@gmail.com
        </p>

        <p class="mb-1 flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.83 5.49a1 1 0 01-.252 1.034l-2.05 2.05a11.042 11.042 0 005.516 5.516l2.05-2.05a1 1 0 011.034-.252l5.49 1.83a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            0917 588 4737
        </p>

        <p class="mb-4 flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M22 12a10 10 0 10-11.49 9.87v-6.99h-2.88v-2.88h2.88V9.41c0-2.85 1.69-4.43 4.28-4.43 1.24 0 2.54.22 2.54.22v2.8h-1.43c-1.41 0-1.85.88-1.85 1.79v2.14h3.15l-.5 2.88h-2.65v6.99A10 10 0 0022 12z"/>
            </svg>
            <a href="https://www.facebook.com/davaostickercustom" target="_blank" class="text-blue-600 hover:underline ml-1">facebook.com/davaosticker</a>
        </p>

        <h3 class="text-base font-semibold mb-2">Visit Us</h3>
        <p class="mb-4 text-sm">R. Castillo St., BRGY. Ubalde, Davao City, Philippines, 8000. <br>Walk-ins are welcome!</p>

        
        
    </div>
</section>

@endsection
