@extends('components.navbar')
@section('content')
    
    <nav class="bg-white border-b">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('Home') }}" class="text-2xl font-bold">Logo</a>
        

<!-- Place the component after nav -->
@livewire('auth-modal')
@endsection