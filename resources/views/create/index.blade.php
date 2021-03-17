@extends('layouts.app')

@section('content')

<style>
    
    .bread {
        width: 30rem;
    }

    .bread.bottom {
        margin-top: -0.8em;
    }
    .ingr {
        width: 32rem;
        transform: translateX(-4%);
    }
    .vegge {
        width: 31rem;
        transform: translateX(-2%);
    }
    .img-lettuce {
        content:url(https://i.ibb.co/tDHh7hH/salad.png);
        max-height: 35px;
        margin-top: -0.8em;
    }
    .img-steak {
        content: url(https://i.ibb.co/PzDFqGL/Steak.png);
        max-height: 65px;
        margin-top: -0.8em;
    }
    .img-cheese {
        content: url(https://i.ibb.co/7psnHXw/Cheese.png);
        max-height: 30px;
        margin-top: -0.8em;
    }
    .img-extra {
        content: url(https://i.ibb.co/h1VXYsy/Onions.png);
        max-height: 40px;
        margin-top: -0.8em;
    }
    .img-sauce {
        content: url(https://i.ibb.co/8PsVF5d/sauce.png);
        max-height: 30px;
        margin-top: -0.8em;
    }
    
</style>

<div class="md:w-2/3 md:flex items-center justify-center md:h-screen content-center">

    <div class='w-full sm:w-1/2 pt-7'>
        <h1 class='text-3xl mt-4 sm:text-4xl font-bold curvy-text'>Creation</h1>


            <h2 class="text-xl mt-2 text-yellow-600">Bread</h2>
            @foreach ($breads as $bread)
            {{-- Display the value of name column of ingredient table --}}
                <p class="text-gray-600">- {{ $bread->name }}</p>
            @endforeach

            <h2 class="text-xl mt-2 text-yellow-600">Extra</h2>
                @foreach ($extras as $extra)
                    <p class="text-gray-600">- {{ $extra->name }}</p>
                @endforeach

            <h2 class="text-xl mt-2 text-yellow-600">Vegetable</h2>
                @foreach ($vegetables as $vegetable)
                    <p class="text-gray-600">- {{ $vegetable->name }}</p>
                @endforeach

            <h2 class="text-xl mt-2 text-yellow-600">Cheese</h2>
                @foreach ($cheeses as $cheese)
                    <p class="text-gray-600">- {{ $cheese->name }}</p>
                @endforeach

            <h2 class="text-xl mt-2 text-yellow-600">Main ingredient</h2>
                @foreach ($meatfisheggs as $mfe)
                    <p class="text-gray-600">- {{ $mfe->name }}</p>
                @endforeach


            <h2 class="text-xl mt-2 text-yellow-600">Sauce</h2>
                @foreach ($sauces as $sauce)
                    <p class="text-gray-600">- {{ $sauce->name }}</p>
                @endforeach

            {{-- Button --}}
            <p class='text-gray-700 mt-3 text-lg'>
                <a href=""><button class="mt-1 px-8 py-3 my-2 bg-yellow-400  text-white font-bold tracking-wide shadow hover:bg-yellow-500 hover:shadow-md rounded-md">Create</button></a>
            </p>
              
    </div>




    <div class='flex md:items-center mt-10 mb-32'>

        <div class="text-center text-md md:margin-auto">
        


                <div class="bg-gradient-to-b from-yellow-300 to-yellow-600 p-3 py-16 rounded-t-full bread z-50">
                    <div class="content"></div>
                </div>
            
                @foreach ($extras as $extra)
                    <div class="rounded-xl bread img-extra z-0">
                        <div class="content">{{ $extra->name }}</div>
                    </div>
                @endforeach
                @foreach ($vegetables as $vegetable)
                    <div class="bg-gradient-to-t rounded-full  ingr vegge img-lettuce">
                        <div class="content">{{ $vegetable->name }}</div>
                    </div>
                @endforeach
                @foreach ($cheeses as $cheese)
                    <div class="rounded-lg ingr img-cheese">
                        <div class="content">{{ $cheese->name }}</div>
                    </div>
                @endforeach
                @foreach ($meatfisheggs as $mfe)
                    <div class="rounded-xl ingr img-steak ">
                        <div class="content">{{ $mfe->name }}</div>
                    </div>
                @endforeach
                @foreach ($sauces as $sauce)
                    <div class="rounded-t-xl bread img-sauce">
                        <div class="content">{{ $sauce->name }}</div>
                    </div>
                @endforeach

            <div class="bg-gradient-to-t from-yellow-300 to-yellow-500 p-3 py-8 rounded-b-2xl shadow-xl bread bottom">
                <div class="content bg-yellow-300"></div>
              </div>
          
          </div>


    </div>



    
</div>

</div>


    
@endsection