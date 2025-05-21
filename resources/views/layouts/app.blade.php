  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Davao Sticker Custom')</title>
    <script src="https://cdn.tailwindcss.com"></script> 
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;700;800&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Archivo', sans-serif;
      }
    </style>
  </head>
  <body class="min-h-screen flex flex-col bg-white text-black">
    
      <!-- HEADER -->
    @include('partials.header')

    <!-- PAGE CONTENT -->
    <main class="flex-grow">
      @yield('content')
    </main>
    

    <!-- Footer -->
    @include('partials.footer')

      <main>
          @yield('scripts')
      </main>

    <script>
      const toggleButton = document.getElementById('menu-toggle');
      const mobileMenu = document.getElementById('mobile-menu');
      toggleButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
      });
    </script>
  </body>
  </html>


