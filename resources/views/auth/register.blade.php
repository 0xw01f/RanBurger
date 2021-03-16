@extends('layouts.app')

@section('content')
<div class="md:flex items-center justify-center md:h-screen content-center mx-auto">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h1 class="mb-3 text-2xl">{{ __('Register') }}</h1>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="px-8 py-4 mb-3 rounded-md form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <div class="text-red-500"><i class="fa fa-exclamation-triangle"></i> {{ $message}}</div>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="px-8 py-4 mb-3 rounded-md form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <div class="text-red-500"><i class="fa fa-exclamation-triangle"></i> {{ $message}}</div>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="px-8 py-4 mb-3 rounded-md form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <div class="text-red-500"><i class="fa fa-exclamation-triangle"></i> {{ $message}}</div>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="px-8 py-4 mb-3 rounded-md form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="mt-1 px-8 py-3 my-2 bg-yellow-400 text-white font-bold tracking-wide shadow hover:bg-yellow-500 hover:shadow-md rounded-md">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
</div>
@endsection
