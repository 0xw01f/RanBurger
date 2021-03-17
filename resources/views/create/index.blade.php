@extends('layouts.app')

@section('content')

<style>
    
    
    
</style>

<div class="md:w-2/3 md:flex items-center justify-center md:h-screen content-center">

    <div class='w-full sm:w-1/2 pt-7'>
        <h1 class='text-3xl mt-4 sm:text-4xl font-bold curvy-text'>Creation</h1>


            <h2 class="text-xl mt-2 text-yellow-600">Bread</h2>
            @foreach ($breads as $bread)
            {{-- Display the value of name column of ingredient table --}}
                <p id="bread" class="text-gray-600"></p>
            @endforeach

            <h2 class="text-xl mt-2 text-yellow-600">Extra</h2>
                @foreach ($extras as $extra)
                    <p id="extra" class="text-gray-600"></p>
                @endforeach

            <h2 class="text-xl mt-2 text-yellow-600">Vegetable</h2>
                @foreach ($vegetables as $vegetable)
                    <p id="vegetable" class="text-gray-600"></p>
                @endforeach

            <h2 class="text-xl mt-2 text-yellow-600">Cheese</h2>
                @foreach ($cheeses as $cheese)
                    <p id="cheese" class="text-gray-600"></p>
                @endforeach

            <h2 class="text-xl mt-2 text-yellow-600">Main ingredient</h2>
                @foreach ($meatfisheggs as $mfe)
                    <p id="mfe" class="text-gray-600"></p>
                @endforeach


            <h2 class="text-xl mt-2 text-yellow-600">Sauce</h2>
                @foreach ($sauces as $sauce)
                    <p id="sauce" class="text-gray-600"></p>
                @endforeach

            {{-- Button --}}
            <p class='text-gray-700 mt-3 text-lg'>
                <div id="app">
                    <create-button></create-button>
                </div>
                
            </p>
              
    </div>

    <div class='flex md:items-center mt-10 mb-32'>
        <div id="burger-container" class="text-center text-md md:margin-auto ml-72">
            <div id="bread-t"></div>
                <div id="extra"></div>
                <div id="vegetable"></div>
                <div id="vegetable"></div>
                <div id="cheese"></div>
                <div id="mfe"></div>
                <div id="sauce"></div>
            <div id="bread-b"></div>
        </div>
    </div>

</div>

</div>


    
@endsection