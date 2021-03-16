<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>

          
          .dropdown:hover .dropdown-content {
            display: block;
          }
          </style>

    </head>
    <body class="bg-yellow-100">

          <nav class="hidden fixed w-screen lg:px-40 sm:px-10 px-2 sm:flex justify-between items-center">
              <div class="flex items-center mx-5 py-5 md:py-0">
                <img src="/images/burger.svg" alt="Burger" class="h-11">
                <h1 class="text-2xl ml-6 inline-block">RanBurger</h1>
              </div>
              <div class="md:flex md:flex-grow">
                <ul class="text-lg md:flex md:ml-auto ">
                  <li @if (Route::is('home')) class="shadow rounded-lg" @endif>
                    <a class="w-full md:w-auto p-5 inline-block rounded-lg hover:shadow hover:bg-yellow-200" href="/">Home</a>
                  </li>
                  
                  <li @if (Route::is('create')) class="shadow rounded-lg" @endif><a class="w-full md:w-auto p-5 inline-block rounded-lg hover:shadow hover:bg-yellow-200" href="/create">Create</a></li>
                  
                  <li @if (Route::is('about')) class="shadow rounded-lg" @endif><a class="w-full md:w-auto p-5 inline-block rounded-lg hover:shadow hover:bg-yellow-200" href="/about">About</a></li>
                  <li @if (Route::is('contact')) class="shadow rounded-lg" @endif><a class="w-full md:w-auto p-5 inline-block rounded-lg hover:shadow hover:bg-yellow-200" href="/contact">Contact</a></li>
                 
                  <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                            <li @if (Route::is('login')) class="shadow rounded-lg" @endif>
                                <a class="w-full md:w-auto p-5 inline-block rounded-lg hover:shadow hover:bg-yellow-200" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        
                        @if (Route::has('register'))
                            <li @if (Route::is('register')) class="shadow rounded-lg" @endif>
                                <a class="w-full md:w-auto p-5 inline-block rounded-lg hover:shadow hover:bg-yellow-200" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="dropdown">
                            <a href="/profile/{{ Auth::user()->name}}-{{ Auth::user()->id }}" class="w-full md:w-auto p-5 inline-block rounded-lg hover:shadow hover:bg-yellow-200" href="#">
                                {{ Auth::user()->name }}
                            </a>
  
                            
                            {{-- <div class="dropdown-content hidden absolute rounded-md p-3 mt-10 hover:text-yellow-600 hover:shadow-md">
                              <a href="/profile/{{ Auth::user()->name}}-{{ Auth::user()->id }}">My profile</a>
                            </div> --}}
                            
                            <div class="dropdown-content hidden absolute rounded-md p-3 px-5 bg-yellow-200 bg-opacity-60 hover:text-yellow-600 hover:shadow-md">
                              <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                              </a>
                            </div>

                    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        
                        </li>
                    @endguest
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
   

            
            <a href="/create" class="flex-1 mr-8 py-3 no-underline border-b-2 border-transparent tracking-wide flex flex-col rounded-full shadow-md">
              <i class="fa fa-plus fa-3x"></i>
              <span class="pt-1">Create</span>
            </a>
            
       

            <a href="@if (Auth::check()) /profile/{{ Auth::user()->name}}-{{ Auth::user()->id }} @else /login @endif" class="flex-1 mr-8 py-3 no-underline border-b-2 border-transparent tracking-wide flex flex-col rounded-full">
              <i class="fa fa-user fa-3x"></i>
              <span class="pt-1">{{ Auth::user()->name ?? 'Login'}}</span>
            </a>
          </nav>

    </body>
</html>
