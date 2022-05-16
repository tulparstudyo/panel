@extends('layouts.guest')
@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">{{ __('Register') }}</h4>
                        <div class="row mt-3">

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" class="text-start" action="{{ route('register') }}">
                        @csrf
                        <x-forms.input label="Name" class="error" type="text" name="name" :value="old('name')" required autofocus />
                        <x-forms.input label="Email" class="error" type="email" name="email" :value="old('email')" required autofocus />
                        <x-forms.input label="Password" type="password" class="error" name="password" required :value="old('password')" />
                        <x-forms.input label="Confirm Password" type="password" class="error" name="password_confirmation" required :value="old('password_confirmation')" />
                        <x-forms.button type="submit" class="danger" value="Register" />
                        <p class="mt-4 text-sm text-center">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </p>
                        <x-item.notice />
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop


