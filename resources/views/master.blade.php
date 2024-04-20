<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" />

    <!-- title -->
    @yield('meta')
   
    <script
      src="https://kit.fontawesome.com/f320c552c0.js"
      crossorigin="anonymous"
    ></script>
    @vite(['resources/css/app.scss'])

  </head>
  <body>
    <main>
        @yield('content')
    </main>


</body>

</html>
