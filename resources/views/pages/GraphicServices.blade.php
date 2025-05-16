@extends('layouts.app') 

@section('title', 'Our Graphic Services')

@section('content')
<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
  <h1 class="text-3xl font-bold text-center mb-12">Our Graphics Services</h1>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

    <!-- SERVICE 1 -->
    <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-transform duration-200 transform hover:-translate-y-1">
      <img src="customIllustrationGS.jpg" alt="Custom Illustrations" class="mx-auto h-32 mb-4 object-contain" />
      <h2 class="text-xl font-bold mb-2">Custom Illustrations</h2>
      <p class="text-gray-600">Hand-crafted digital illustrations tailored to your brand’s unique style and message.</p>
    </div>

    <!-- SERVICE 2 -->
    <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-transform duration-200 transform hover:-translate-y-1">
      <img src="logoDesignGS.jpg" alt="Logo Design" class="mx-auto h-32 mb-4 object-contain" />
      <h2 class="text-xl font-bold mb-2">Logo Design</h2>
      <p class="text-gray-600">Professional logo creation that captures your brand’s essence and stands out in the market.</p>
    </div>

    <!-- SERVICE 3 -->
    <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-transform duration-200 transform hover:-translate-y-1">
      <img src="brandIdentity.jpg" alt="Brand Identity" class="mx-auto h-32 mb-4 object-contain" />
      <h2 class="text-xl font-bold mb-2">Brand Identity</h2>
      <p class="text-gray-600">Comprehensive brand identity packages including logos, color schemes, and typography.</p>
    </div>

    <!-- SERVICE 4 -->
    <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-transform duration-200 transform hover:-translate-y-1">
      <img src="printDesignGS.jpg" alt="Print Design" class="mx-auto h-32 mb-4 object-contain" />
      <h2 class="text-xl font-bold mb-2">Print Design</h2>
      <p class="text-gray-600">Eye-catching designs for business cards, brochures, posters, and other print materials.</p>
    </div>

    <!-- SERVICE 5 -->
    <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-transform duration-200 transform hover:-translate-y-1">
      <img src="merchDesign.jpg" alt="Merchandise Design" class="mx-auto h-32 mb-4 object-contain" />
      <h2 class="text-xl font-bold mb-2">Merchandise Design</h2>
      <p class="text-gray-600">Custom designs for apparel, promotional items, and branded merchandise.</p>
    </div>

    <!-- SERVICE 6 -->
    <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-transform duration-200 transform hover:-translate-y-1">
      <img src="vehicledesign.jpg" alt="Vehicle Design" class="mx-auto h-32 mb-4 object-contain" />
      <h2 class="text-xl font-bold mb-2">Vehicle Design</h2>
      <p class="text-gray-600">Custom vehicle wraps and graphics designed for maximum impact on the road.</p>
    </div>

  </div>
</div>
@endsection
