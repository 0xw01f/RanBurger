@extends('layouts.app')

@section('content')

    <div class='w-full sm:w-1/2 px-6'>
        <h1 class='text-2xl mt-4 sm:text-4xl font-semibold text-gray-900'>Welcome to RanBurger</h1>
        <p class='text-gray-700 mt-3'>
            Endless burger possibilities !
        </p>
        <button class='mt-8 px-8 py-3 bg-yellow-400 rounded text-white font-bold tracking-wide shadow hover:bg-yellow-500 hover:shadow-md rounded-full rounded-r-lg'>
          Get started
        </button>
        <button class='mt-8 px-8 py-3 bg-yellow-200 rounded text-gray-600 font-bold tracking-wide hover:bg-yellow-100 shadow rounded-full rounded-l-lg'>
          Learn more
        </button>
      </div>
      <div class='w-64 mx-auto sm:w-1/2 flex items-center sm:px-5'>
        <img src="https://avocode.com/static/images/tutorials/banner-img@2x.png" alt="" class='max-h-full'>
      </div>

@endsection