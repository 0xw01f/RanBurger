@extends('layouts.app')

@section('content')

<div class="md:flex items-center justify-center md:h-screen">
  
    <div>
        <h1 class='text-2xl mb-4 sm:text-4xl font-medium text-gray-900'>Clients</h1>
            @foreach ($clients as $client)
                <p>- {{ $client }}</p>
            @endforeach
    </div>

</div>


    
@endsection