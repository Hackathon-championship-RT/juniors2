@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="md-5">

            <div id="study">

                <h2 class="text-center">Таблица лидеров</h2>

                <div class='container'>

                    <div class="lesson_all">
                        @if (empty($game_stories))
                            <div>
                                <h6 class="text-center mt-5 mb-5">Ещё пока никто не сыграл в эту игру...(</h6>
                            </div>
                        @endif

                        @if (!empty($game_stories))
                            <h4 class="mt-3 mb-5">Общая таблица по времени:</h4>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Место</th>
                                        <th>Уровень</th>
                                        <th>Игрок</th>
                                        <th>Время</th>
                                    </tr>
                                    </thead>
                                    <tbody class="tbody">
                                    @foreach($game_stories as $game)
                                        <tr>
                                            <td>{{ $game['story_id'] }}</td>
                                            <td>{{ $game['placement'] }}</td>
                                            <td style="display: flex; align-items: center"><img src="{{ asset('storage/'. $game['user']['avatar']) }}" alt="avatar" width="30" height="30" style="object-fit: cover"> <span style="margin-left: 10px">{{ $game['user']['name'] }}</span></td>
                                            <td>{{ $game['time'] }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            <h4 class="mt-5 mb-5">Таблица по времени:</h4>
                            @foreach($grouped_game_stories as $grouped_game_story)
                                <h5 class="text-center mb-3 mt-5">{{ $grouped_game_story[0]['placement'] }}</h5>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Место</th>
                                            <th>Игрок</th>
                                            <th>Время</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($grouped_game_story as $game)
                                            <tr>
                                                <td>{{ $game['story_id'] }}</td>
                                                <td style="display: flex; align-items: center"><img src="{{ asset('storage/'. $game['user']['avatar']) }}" alt="avatar" width="30" height="30" style="object-fit: cover"> <span style="margin-left: 10px">{{ $game['user']['name'] }}</span></td>
                                                <td>{{ $game['time'] }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
