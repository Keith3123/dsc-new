@extends('layouts.app')

@section('title', 'Official Page | Davao Sticker Custom')

@section('content') 
<div id="chat-section" class="max-w-3xl mx-auto mt-16 p-6 bg-white shadow-lg rounded-2xl border border-gray-200">
    <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Tell us about your design needs</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 font-semibold px-4 py-3 rounded mb-6 text-center shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('chat-designer') }}" method="POST" class="space-y-6">
        @csrf

       <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-semibold text-gray-600 mb-1">Your Name</label>
            <input type="text" name="name" id="name" placeholder="e.g., Name" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-800 focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-semibold text-gray-600 mb-1">Your Email</label>
            <input type="email" name="email" id="email" placeholder="e.g., dsc@gmail.com " class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-800 focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Service -->
        <div>
            <label for="service" class="block text-sm font-semibold text-gray-600 mb-1">Service You're Interested In</label>
            <input type="text" name="service" id="service" placeholder="e.g., Logo Design" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-800 focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Message -->
        <div>
            <label for="message" class="block text-sm font-semibold text-gray-600 mb-1">Your Customization Details</label>
            <textarea name="message" id="message" rows="4" placeholder="Describe what you want..." class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-800 focus:ring-2 focus:ring-blue-500 resize-none" required></textarea>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-white text-black px-5 py-2 rounded-full border-2 shadow-md hover:bg-gray-400 transition">
                Send to Designer
            </button>
        </div>
    </form>
</div>
@endsection
