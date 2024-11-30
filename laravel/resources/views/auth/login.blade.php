@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border-radius: 0; border: none; padding: 50px 0;">
                <h3 class="text-center mb-5">{{ __('Авторизация') }}</h3>

                <div>
                    <form method="POST" action="{{ route('login') }}" style="padding: 0 40px;">
                        @csrf

                        <div class="row mb-3">
                            <input id="email" placeholder="Электронная почта" type="email" class="login form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <input placeholder="Пароль" id="password" type="password" class="login form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="border-radius: 0">

                                <label class="form-check-label" for="remember">
                                    {{ __('Запомнить меня') }}
                                </label>
                            </div>
                        </div>

                        <div class="">
                            <div class=" m-0 p-0">
                                <button type="submit" class="w-100 mb-1 lk_button m-auto">
                                    {{ __('Войти') }}
                                </button>

                                <a href="auth/telegram/redirect" class="mt-1 text-center w-100 lk_button m-auto">
                                    Через телеграм
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
