@extends('layouts.app')

@section('content')

<div class="md:flex items-center justify-center md:h-screen">
  
    <div>
        <h1 class='text-2xl mb-4 sm:text-4xl font-medium text-gray-900'>Create</h1>
            @foreach ($breads as $bread)
            {{-- Display the value of name column of ingredient table --}}
                <p>- {{ $bread->name }}</p>
            @endforeach
    </div>

    
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
                <option value="mfe">Meat, fish & egg</option>
                <option value="vegetables">Vegetables</option>
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

</div>


    
@endsection