<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
    rel="stylesheet"
  />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    @vite('resources/css/app.css')
</head>
<body>
    <img id="background" class="absolute z-[-1] opacity-35 -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />

    <div class="container">


        <div class=" nav">
            @include('layouts.nav')
        </div>


        <div class=" content">

            @yield('content')

        </div>

        <div class=" footer">
            @include('layouts.footer')
        </div>



    </div>


</body>
</html>
