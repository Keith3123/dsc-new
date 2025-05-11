<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Sticker Login</title>

  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gradient-to-br from-pink-100 to-yellow-100 min-h-screen flex items-center justify-center">



  <!-- Trigger Button -->

  <button onclick="openModal()" class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-6 rounded-full shadow-lg transition">

    Login

  </button>



  <!-- Login Modal -->

  <div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">

    <div class="bg-white w-full max-w-sm p-8 rounded-xl shadow-2xl relative">



      <!-- Close Button -->

      <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-400 hover:text-pink-500 text-2xl font-bold">

        &times;

      </button>



      <!-- Header -->

      <div class="text-center mb-6">

        <img src="https://img.icons8.com/clouds/100/000000/sticker.png" alt="Sticker Icon" class="mx-auto mb-3 w-16 h-16">

        <h2 class="text-2xl font-bold text-gray-800">Welcome Back!</h2>

        <p class="text-sm text-gray-500">Login to your sticker world </p>

      </div>



      <!-- Form -->

      <form onsubmit="event.preventDefault(); alert('Logged in!')">

        <div class="mb-4">

          <label class="block text-sm font-medium text-gray-700 mb-1" for="email">Email</label>

          <input id="email" type="email" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-pink-400 focus:outline-none" />

        </div>



        <div class="mb-6">

          <label class="block text-sm font-medium text-gray-700 mb-1" for="password">Password</label>

          <input id="password" type="password" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-pink-400 focus:outline-none" />

        </div>



        <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded-lg transition">

          Login

        </button>



        <p class="text-sm text-center text-gray-600 mt-4">

          No account?

          <a href="#" class="text-pink-500 hover:underline">Sign up</a>

        </p>

      </form>

    </div>

  </div>



  <script>

    function openModal() {

      document.getElementById('loginModal').classList.remove('hidden');

      document.getElementById('loginModal').classList.add('flex');

    }



    function closeModal() {

      document.getElementById('loginModal').classList.add('hidden');

      document.getElementById('loginModal').classList.remove('flex');

    }

  </script>

</body>

</html>
