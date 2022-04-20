<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> @yield('title')   Control de Notas </title>

  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" 
  rel="stylesheet" >
</head>
<body class="bg-gray-100 text-gray-800">

    <nav class="flex py-5 bg-indigo-500 text-white ">

        <div class="w-1/2 px-12 mr-auto" >
            <p  class="text-2xl font-bold">Gestor de Notas</p>
        </div>
        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">

    <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a  href="{{ url('/login') }}" class="font-semibold border-2 border-white
                         py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ url('/register') }}" class="font-semibold border-2 border-white
                          py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
        </div>
        
    </body>

        
</html>
