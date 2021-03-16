@extends('layouts.app')

@section('content')

<div class="md:w-2/3 md:flex items-center justify-center md:h-screen content-center">

    <div class='w-full sm:w-1/2 pt-7'>
        <h1 class='text-2xl mt-4 sm:text-4xl font-medium'>Creation</h1>
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


        <p class='text-gray-700 mt-3 text-lg'>
            <button class="mt-1 px-8 py-3 my-2 bg-yellow-400  text-white font-bold tracking-wide shadow hover:bg-yellow-500 hover:shadow-md rounded-md">Create</button>
        </p>
              
    </div>


    <div class='flex md:items-center float-right mt-10'>

        <div class="container text-center w-96 text-md">
            {{-- Bread --}}
            <div class="bg-yellow-300 p-3 py-8 rounded-t-full ">
              <div class="content">{{ $bread->name }}</div>
            </div>
            
                @foreach ($extras as $extra)
                    <div class="bg-purple-200 p-1 rounded-xl ">
                        <div class="content">{{ $extra->name }}</div>
                    </div>
                @endforeach
                @foreach ($vegetables as $vegetable)
                    <div class="bg-green-500 p-1 rounded-t-xl">
                        <div class="content">{{ $vegetable->name }}</div>
                    </div>
                @endforeach
                @foreach ($cheeses as $cheese)
                    <div class="bg-yellow-200 rounded-lg">
                        <div class="content">{{ $cheese->name }}</div>
                    </div>
                @endforeach
                @foreach ($meatfisheggs as $mfe)
                    <div class="bg-yellow-700 p-1 rounded-xl">
                        <div class="content">{{ $mfe->name }}</div>
                    </div>
                @endforeach
                @foreach ($sauces as $sauce)
                    <div class="bg-pink-300 p-0 rounded-t-xl">
                        <div class="content">{{ $sauce->name }}</div>
                    </div>
                @endforeach

            <div class="bg-yellow-300 p-3 py-6 rounded-b-2xl shadow-xl">
                <div class="content bg-yellow-300"></div>
              </div>
          
          </div>


    </div>



    @if (Auth::user() && Auth::user()->name == 'w01f_admin')
    <form action="/create" method="POST">
        @csrf
        <div class="m-10">
            <h1 class="text-2xl">Add ingredient</h1>

            <label for="name" class="flex mt-4">Ingredient name</label>
            <input type="text" name="name" class="px-8 py-4 rounded-md @error('name') is-invalid @enderror" value="{{ old('name') }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <div class="text-red-500"><i class="fa fa-exclamation-triangle"></i> {{ $message}}</div>
                </span>
            @enderror

            {{-- <label for="type" class="flex mt-4">Ingredient type *</label>
            <input type="text" name="type" class="px-8 py-4 rounded-md @error('type') is-invalid @enderror" value="{{ old('type') }}">
            @error('type')
                <span class="invalid-feedback" role="alert">
                    <div class="text-red-500"><i class="fa fa-exclamation-triangle"></i> {{ $message}}</div>
                </span>
            @enderror --}}

            <label for="type" class="flex mt-4">Category:</label>
            <select id="type" name="type" class="rounded p-4 @error('type') is-invalid @enderror">
                <option value="bread">Bread</option>
                <option value="mfe">Meat, Fish & Egg</option>
                <option value="vegetable">Vegetable</option>
                <option value="sauce">Sauce</option>
                <option value="cheese">Cheese</option>
                <option value="extra">Extra</option>
            </select>
            @error('type')
                <span class="invalid-feedback" role="alert">
                    <div class="text-red-500"><i class="fa fa-exclamation-triangle"></i> {{ $message}}</div>
                </span>
            @enderror 

            <label for="price" class="flex mt-4">Ingredient average price</label>
            <input type="text" name="price" class="px-8 py-4 rounded-md @error('price') is-invalid @enderror" value="{{ old('price') }}">
            @error('price')
                <span class="invalid-feedback" role="alert">
                    <div class="text-red-500"><i class="fa fa-exclamation-triangle"></i> {{ $message}}</div>
                </span>
            @enderror

            
            <label for="veggie" class="flex mt-4"> Veggie</label>
            <input type="checkbox" name="veggie" class="p-2 switch-input @error('veggie') is-invalid @enderror" value="1" {{ old('veggie') ? 'checked="checked"' : '' }}>    
            @error('veggie')
                <span class="invalid-feedback" role="alert">
                    <div class="text-red-500"><i class="fa fa-exclamation-triangle"></i> {{ $message}}</div>
                </span>
            @enderror 

            <div class="mt-4"></div>
            <button type="submit" class='mt-1 px-8 py-3 bg-yellow-400  text-white font-bold tracking-wide shadow hover:bg-yellow-500 hover:shadow-md rounded-md'>Submit</button>
        </div>
        
    </form>
    @endif
    

</div>


    
@endsection