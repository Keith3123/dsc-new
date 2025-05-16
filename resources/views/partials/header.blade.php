<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100">

<!-- Sticky Header -->
<header class="bg-white shadow-md sticky px-4 py-3 top-0 z-50 ">
  <div class="w-full flex items-center justify-between h-16">

    <!-- Logo -->
    <div class="flex-shrink-0 pl-2">
      <a href="/">
        <img src="logol.png" alt="DSC Logo" class="h-16">
      </a>
    </div>

    <!-- Navigation Links (desktop) -->
    <nav class="hidden lg:flex space-x-10 text-xl font-semibold items-center">
      <a href="#" class="hover:text-red-700">Products</a>
      <a href="#" class="hover:text-red-700">Graphics Services</a>
      <a href="#" class="hover:text-red-700">Projects</a>
      <a href="#" class="hover:text-red-700">About Us</a>
    </nav>

    <!-- Login Button (desktop) -->
    <div class="hidden lg:block pr-4">
      <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
        class="px-6 py-3 text-xl bg-black text-white rounded-lg hover:bg-gray-700 font-bold">
        Login
      </button>
    </div>

    <!-- Hamburger menu (mobile) -->
    <button id="menu-toggle" class="lg:hidden text-3xl px-2">
      &#9776;
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="lg:hidden hidden flex flex-col mt-4 space-y-3 text-lg font-semibold px-4 pb-4">
    <a href="#" class="hover:text-red-700">Home</a>
    <a href="#" class="hover:text-red-700">Products</a>
    <a href="#" class="hover:text-red-700">Projects</a>
    <a href="#" class="hover:text-red-700">About Us</a>

    <!-- Login (mobile) -->
    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
      class="w-full py-2 bg-black text-white rounded hover:bg-gray-700">Login</button>
  </div>
</header>

<!-- MODAL COMPONENT -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true"
  class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-md max-h-full">
    <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
          Sign in to our platform
        </h3>
        <button type="button"
          class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-hide="authentication-modal">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <div class="p-4 md:p-5">
        <form class="space-y-4" action="#">
          <div>
            <label for="email"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" name="email" id="email" placeholder="name@company.com"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required />
          </div>
          <div>
            <label for="password"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
            <input type="password" name="password" id="password" placeholder="••••••••"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required />
          </div>
          <div class="flex justify-between">
            <div class="flex items-start">
              <div class="flex items-center h-5">
                <input id="remember" type="checkbox"
                  class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                  required />
              </div>
              <label for="remember"
                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
            </div>
            <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
          </div>
          <button type="submit"
            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login
            to your account</button>
          <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Flowbite JS -->
<script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>

</body>
</html>