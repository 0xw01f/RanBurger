@extends('layouts.app')

@section('content')

<div class="md:flex items-center justify-center md:h-screen">
  
    <div class="bg-gray-400 bg-opacity-25 p-5 rounded-lg">
        <h1 class='text-2xl mb-4 sm:text-4xl font-medium text-gray-900'>Contact</h1>
        <form action="">
            <label for="text" class="pr-2">Text</label>
            <input name="text" type="text"/>
        </form>
    </div>

</div>


@endsection