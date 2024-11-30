@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border-radius: 0; border: none; padding: 50px 0;">
                <h3 class="text-center mb-5">{{ __('Регистрация') }}</h3>

                <div>
                    <form method="POST" action="{{ route('register') }}" style="padding: 0 40px;">
                        @csrf

                        <div class="row mb-3">
                            <input id="name" placeholder="Имя" type="text" class="form-control login @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

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

                            <input placeholder="Подтверждение пароля" id="password-confirm" type="password" class="login form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>

                        <div class="">
                            <div class=" m-0 p-0">
                                <button type="submit" class="w-100 mb-1 lk_button m-auto">
                                    {{ __('Зарегистрироваться') }}
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
