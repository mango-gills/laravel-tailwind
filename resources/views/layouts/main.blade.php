  <script src="https://cdn.tailwindcss.com"></script>


  <!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      @vite('resources/css/app.css')
      <title>Laravel</title>

  </head>

  <body class="container mx-auto text-black bg-neutral-100 font-nunito">
      @yield('content')
  </body>

  </html>