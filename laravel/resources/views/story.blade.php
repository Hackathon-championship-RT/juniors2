@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="md-5">

            <div id="study">

                <h2 class="text-center">История игр</h2>

                <div class='container'>
                    <div class="lesson_all">
                        @if (empty($game_stories))
                            <div>
                                <h4>Вы ещё пока не прошли ни одного уровня...(</h4>
                            </div>
                        @endif

                        @if (!empty($game_stories))
                            <h6>Твой личный рейтинг завершенных игр</h6>
                            <table class="table mt-3">
                                <thead>
                                <tr>
                                    <th>Уровень</th>
                                    <th>Время</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($game_stories as $game)
                                    <tr>
                                        <td>Уровень {{ $game['level']['level_number'] }}. {{ $game['level']['name'] }}</td>
                                        <td>{{ $game['time'] }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
