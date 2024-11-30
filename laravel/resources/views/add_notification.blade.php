@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Создание уведомления') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('add_notification') }}">
                        @csrf

                        <div class="row mb-3 w-100">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Соревнование') }}</label>

                            <div class="col-md-6">
                                <select name="event_id" class="form-control">
                                    @foreach($user_events as $event)
                                        <option value="{{ $event['event_id'] }}">{{ $event['start'] }} - {{ $event['name'] }}</option>
                                    @endforeach
                                </select>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Напомнить за сколько дней?') }}</label>

                            <div class="col-md-6">
                                <input id="day" type="number" min="0" class="form-control @error('password') is-invalid @enderror" name="day" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
