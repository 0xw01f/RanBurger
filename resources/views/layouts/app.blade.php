<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        
        <nav class="fixed w-screen bg-gray-900 lg:px-40 sm:px-10 px-2 sm:flex justify-between items-center border-b-1 border-gray-600">
            <div class="flex px-4 justify-between sm:py-0 pb-1">
              <a href="">
                <img src="https://www.ravilamkoti.codes/static/b7742c4d36a8aad0eae9e469b8af55d5/55abd/logo.png" alt="Logo"
                     class='h-12'>
              </a>
            
              <button class='text-blue-300 text-3xl sm:hidden block focus:outline-none' id='navIcon'>
                &#9776;
              </button>
            </div>
            
            <ul class='hidden sm:flex cursor-pointer' id='navContent'>
              <li class='py-4 px-6 sm:border-b-2 border-blue-300 hover:text-blue-300 transition duration-200 text-blue-300 hover:bg-gray-800 sm:hover:bg-transparent text-white '><a href="/">Home</a></li>
              <li class='text-white py-4 px-6 sm:border-b-2 border-transparent hover:border-blue-300 sm:hover:text-blue-300 transition hover:bg-gray-800 duration-200 sm:hover:bg-transparent'><a href="/clients">Clients</a></li>
              <li class='text-white py-4 px-6 sm:border-b-2 border-transparent hover:border-blue-300 sm:hover:text-blue-300 transition hover:bg-gray-800 duration-200 sm:hover:bg-transparent'><a href="/about">About</a></li>
              <li class='text-white py-4 px-6 sm:border-b-2 border-transparent hover:border-blue-300 sm:hover:text-blue-300 transition hover:bg-gray-800 duration-200 sm:hover:bg-transparent'><a href="/contact">Contact</a></li>
            </ul>
          </nav>

          <header class='container flex flex-col-reverse sm:flex-row py-24 mx-auto max-w-screen-lg'>
              
            @yield('content')

          </header>

    </body>
</html>
