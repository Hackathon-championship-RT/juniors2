@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="mt-5 md-5">

            <div id="study">

                <h2 class="text-center">Уведомления</h2>
                <p class="text-center mt-3">Уведомления будут отправляться вам в Telegram. Если вы не вошли через Telegram, следует
                    <a style="color: black" href="/auth/telegram/redirect">войти</a>.</p>

                <a href="{{ route('add_notification') }}" class="w-100 btn border-primary">
                        Добавить уведомление
                </a>
                <div class='container'>

                    <div class="lesson_all">
                        @if (empty($notifications_arr))
                            <div class="text-center mt-5">
                                <h4>Пока пусто</h4>
                            </div>
                        @endif

                        @if (!empty($notifications_arr))
                            <div class="anket_all d-flex flex-wrap mt-3">
                                @foreach ($notifications_arr as $notification)
                                    @include('notification_card')
                                @endforeach
                            </div>
                        @endif
                    </div>
                    {{ $notifications->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
