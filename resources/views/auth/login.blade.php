@extends('layouts.app')

@section('content')
    <div class="md:flex items-center justify-center md:h-screen content-center mx-auto">

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="mb-3 text-2xl">{{ __('Login') }}</h1>

            <label for="email" class="text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="mb-3">
                <input id="email" type="email" class="px-8 py-4 rounded-md form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <label for="password" class="text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="px-8 py-4 rounded-md form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="pt-2">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                
                <button type="submit" class="mt-1 px-8 py-3 my-2 bg-yellow-400  text-white font-bold tracking-wide shadow hover:bg-yellow-500 hover:shadow-md rounded-md">
                    {{ __('Login') }}
                </button>
            
                <div></div>

                @if (Route::has('password.request'))
                    <a class="underline text-sm" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                
            </div>
        </form>
    
    </div>

@endsection
