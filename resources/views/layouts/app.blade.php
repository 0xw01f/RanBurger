<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="bg-yellow-100">

          <nav class="hidden fixed w-screen lg:px-40 sm:px-10 px-2 sm:flex justify-between items-center">
              <div class="flex items-center mx-5 py-5 md:py-0">
                    <svg class="fill-current inline-block" width="34" height="34" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                <h1 class="text-2xl ml-2 inline-block">RanBurger</h1>
              </div>
              <div class="md:flex md:flex-grow">
                <ul class="text-lg md:flex md:ml-auto ">
                  <li>
                    <a class="w-full md:w-auto p-5 inline-block rounded-lg hover:shadow hover:bg-yellow-200" href="">Home</a>
                  </li>
                  <li><a class="w-full md:w-auto p-5 inline-block rounded-lg hover:shadow hover:bg-yellow-200" href="">About</a></li>
                  <li><a class="w-full md:w-auto p-5 inline-block rounded-lg hover:shadow hover:bg-yellow-200" href="">Projects</a></li>
                  <li><a class="w-full md:w-auto p-5 inline-block rounded-lg hover:shadow hover:bg-yellow-200" href="">Blog</a></li>
                  <li><a class="w-full md:w-auto p-5 inline-block rounded-lg hover:shadow hover:bg-yellow-200" href="">Contact</a></li>
                </ul>
              </div>
          </nav>


          <header class='container flex flex-col-reverse sm:flex-row pt-28 md:pt-0 mx-auto max-w-screen-lg'>
              
            @yield('content')

          </header>

          </div>
          <nav class="md:hidden p-1 shadow-inner bottom-0 fixed w-screen flex flex-row justify-center -mb-px text-xs text-gray-600 bg-yellow-300 font-bold text-center">
            <a href="/" class="flex-1 mr-8 py-3 no-underline border-b-2 border-transparent tracking-wide flex flex-col rounded-full">
              <i class="fa fa-home fa-3x"></i>
              <span class="pt-1">Home</span>
            </a>

            <a href="/clients" class="flex-1 mr-8 py-3 no-underline border-b-2 border-transparent tracking-wide flex flex-col rounded-full shadow-md ">
              <i class="fa fa-plus fa-3x"></i>
              <span class="pt-1">Create</span>
            </a>

            <a href="/login" class="flex-1 mr-8 py-3 no-underline border-b-2 border-transparent tracking-wide flex flex-col rounded-full">
              <i class="fa fa-user fa-3x"></i>
              <span class="pt-1">Account</span>
            </a>
          </nav>

    </body>
</html>
