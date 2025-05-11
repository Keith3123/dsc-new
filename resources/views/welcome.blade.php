@extends('components.navbar')
@section('content')

    <div class="p-6">
        @yield('content')
    </div>

<!-- Place the component after nav -->
@livewire('auth-modal')
@endsection