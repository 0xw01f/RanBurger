@extends('layouts.app')

@section('content')

<div class="md:flex items-center justify-center md:h-screen">
  
    <div>
        <h1 class='text-2xl mb-4 sm:text-4xl font-medium text-gray-900'>Create</h1>
            @foreach ($ingredients as $ingredient)
            {{-- Display the value of name column of ingredient table --}}
                <p>- {{ $ingredient->name }}</p>
            @endforeach
    </div>

    
    <form action="/create" method="POST">
        @csrf
        <div class="m-10">
            <h1 class="text-2xl">Add ingredient</h1>

            <label for="iName" class="flex mt-4">Ingredient name *</label>
            <input type="text" name="iName" class="px-8 py-4 rounded-md">
            @error('iName')
                <div class="text-red-500"><i class="fa fa-exclamation-triangle"></i> Name cannot be empty.</div>
            @enderror

            <label for="iType" class="flex mt-4">Ingredient type *</label>
            <input type="text" name="iType" class="px-8 py-4 rounded-md">
            @error('iType')
                <div class="text-red-500"><i class="fa fa-exclamation-triangle"></i> Type cannot be empty.</div>
            @enderror

            <label for="iPrice" class="flex mt-4">Ingredient average price *</label>
            <input type="text" name="iPrice" class="px-8 py-4 rounded-md">
            @error('iPrice')
                <div class="text-red-500"><i class="fa fa-exclamation-triangle"></i> Price cannot be empty.</div>
            @enderror

            <div class="mt-4"></div>
            <button type="submit" class='mt-1 px-8 py-3 bg-yellow-400  text-white font-bold tracking-wide shadow hover:bg-yellow-500 hover:shadow-md rounded-md'>Submit</button>
        </div>
        
    </form>

</div>


    
@endsection