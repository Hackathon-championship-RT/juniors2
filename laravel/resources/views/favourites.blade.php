@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="mt-5 md-5">

            <div id="study">

                <h2 class="text-center">Избранные соревнования</h2>

                <div class='container'>

                    <div class="lesson_all">
                        @if (empty($events))
                            <div>
                                <h4>Пока пусто</h4>
                            </div>
                        @endif

                        @if (!empty($events))
                            <div class="anket_all d-flex flex-wrap mt-3">
                                @foreach ($events as $event)
                                    @include('search_card')
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
