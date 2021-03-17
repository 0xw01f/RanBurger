@extends('layouts.app')

@section('content')

<div class="md:flex items-center justify-center md:h-screen mx-auto">
    <h1 class="text-2xl">{{ __('Dashboard') }}</h1>
   
    <div class="">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        

        {{ __('You are logged in!') }}
    </div>
</div>

@endsection
