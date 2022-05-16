@extends('layouts.guest')
@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">{{ __('Login') }}</h4>
                        <div class="row mt-3">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" class="text-start" action="{{ route('login') }}">
                        @csrf
                        <x-forms.input label="Email" class="error" type="email" name="email" :value="old('email')" required autofocus />
                        <x-forms.input label="Password" type="password" class="error" name="password" required :value="old('password')" />
                        <x-forms.input label="Remember me" type="checkbox" class="error" name="rememberMe" required :value="old('rememberMe')" />
                        <x-forms.button type="submit" class="danger" value="Login" />
                        <x-item.notice />
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

