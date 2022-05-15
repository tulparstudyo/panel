<x-guest-layout>
    <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">{{ __('Forget Password') }}</h4>
                        <div class="row mt-3">
                            <x-slot name="logo">
                                <x-jet-authentication-card-logo />
                            </x-slot>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" class="text-start" action="{{ route('password.email') }}">
                        @csrf
                        <div class="input-group input-group-outline my-3">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-jet-button>
                                {{ __('Email Password Reset Link') }}
                            </x-jet-button>
                        </div>
                        <div class="block mt-4">
                            <x-jet-validation-errors class="mb-4" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
