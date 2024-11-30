@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="md-5">

            <div id="study">

                <h2 class="text-center">Уровни игры</h2>

                <div class='container'>
                    <div class="lesson_all">
                        @if (empty($levels))
                            <div>
                                <h4>Ничего не найдено</h4>
                            </div>
                        @endif

                        @if (!empty($levels))
                                <div class="anket_all d-flex flex-wrap mt-3 mb-3">
                                @for($i=0;$i<count($levels);$i++)
                                    @include('search_card')
                                @endfor
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
