@extends('layouts.app')

@section('content')
<div class="bg-gray-200 p-10 font-nunito">
    <div class="container mx-auto">
        <div class="bg-white p-4 max-w-sm mx-auto shadow-xs">
            <div class="text-2xl font-bold tracking-wider mb-3">{{ __('Reset Password') }}</div>

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="mb-6">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <p class="text-red-500 text-xs italic mt-3">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-input w-full" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="">
                    <button type="submit" class="w-full sm:w-auto bg-purple-600 hover:bg-purple-700 hover:shadow-lg text-gray-100 font-semibold py-2 px-6 rounded-sm focus:outline-none focus:shadow-outline focus:bg-purple-700 tracking-wider uppercase" >

                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
