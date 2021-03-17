@extends('layouts.app')

@section('content')
<div class="md:flex items-center justify-center md:h-96">
  
    <div class='w-full sm:w-1/2 px-6 pt-7 text-center'>
        <h1 class='text-2xl mt-4 sm:text-5xl font-light text-gray-900'>Welcome to <span class="curvy-text font-bold">RanBurger</span></h1>
        <p class='text-gray-700 mt-3 text-xl font-light italic'>
            Consider endless burger possibilities !
        </p>
        
        <a href="/create"><button class='mt-8 px-8 py-3 bg-yellow-400  text-white font-bold tracking-wide shadow hover:bg-yellow-500 hover:shadow-md rounded-full rounded-r-lg'>
          Get started
        </button></a>
        
        <a href="/about"><button class='mt-8 px-8 py-3 bg-yellow-200  text-gray-600 font-bold tracking-wide hover:bg-yellow-300 shadow rounded-full rounded-l-lg'>
          Learn more
        </button></a>
        
        
    </div>
    <div class='w-64 mx-auto sm:w-1/2 flex items-center sm:px-5 mt-10'>
        <img src="/images/hamburger-main.svg" alt="" class='max-h-full'>
    </div>

    <div class="absolute text-center bottom-40 flex flex-row">

      <div class="relative static px-32 border-r border-gray-600">
        <h1 class="text-5xl font-thin">{{ $ingredientsCount }}</h1>
        <h2 class="text-2xl font-thin">Available ingredients</h2>
      </div>

      <div class="relative static px-32 border-l border-gray-600">
        <h1 class="text-5xl font-thin">75</h1>
        <h2 class="text-2xl font-thin">Burgers created</h2>
      </div>
      
    </div>
</div>

@endsection