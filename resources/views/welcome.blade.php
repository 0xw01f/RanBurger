@extends('layouts.app')

@section('content')
<div class="md:flex items-center justify-center md:h-screen">
  
    <div class='w-full sm:w-1/2 px-6 pt-7 text-center'>
        <h1 class='text-2xl mt-4 sm:text-4xl font-medium text-gray-900'>Welcome to RanBurger</h1>
        <p class='text-gray-700 mt-3 text-lg'>
            Consider endless burger possibilities !
        </p>
        
        <a href="/create"><button class='mt-8 px-8 py-3 bg-yellow-400  text-white font-bold tracking-wide shadow hover:bg-yellow-500 hover:shadow-md rounded-full rounded-r-lg'>
          Get started
        </button></a>
        
        <a href="/contact"><button class='mt-8 px-8 py-3 bg-yellow-200  text-gray-600 font-bold tracking-wide hover:bg-yellow-300 shadow rounded-full rounded-l-lg'>
          Learn more
        </button></a>
        
        
    </div>
    <div class='w-64 mx-auto sm:w-1/2 flex items-center sm:px-5 mt-10'>
        <img src="/images/hamburger-main.svg" alt="" class='max-h-full'>
    </div>
</div>
@endsection