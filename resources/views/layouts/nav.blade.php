<!-- resources/views/layouts/nav.blade.php -->
<header class="flex items-center justify-between p-6 bg-white shadow-md">
    <div>
        <img src="logol.png" alt="DSC Logo" class="h-10 w-auto">
    </div>
    <nav class="space-x-6 text-2xl font-semibold">
        <a href="#" class="hover:text-red-700">Products</a>
        <a href="#" class="hover:text-red-700">Graphic Services</a>
        <a href="#" class="hover:text-red-700">Contact Us</a>
        <a href="#" class="hover:text-red-700">About us</a>
    </nav>
    <button wire:click="openAuthModal"
            class="px-4 py-2 text-2xl bg-black text-white rounded hover:bg-gray-700">
        Login
    </button>
</header>