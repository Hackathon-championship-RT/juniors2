@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="md-5">

            <div id="study">

                <h2 class="text-center">История игр</h2>

                <div class='container'>
{{--                    <form action="{{ route('search') }}" id="searchLessonForm">--}}
{{--                        @csrf--}}
{{--                        <div class="form-group mb-3 mt-4 d-flex justify-content-center">--}}
{{--                            <label for="name">--}}
{{--                                <input type="search" name="name" id="name" class="form-control" style="background: #f5f5f5; border: 0" placeholder="Название" value="{{ $request['name'] }}">--}}
{{--                            </label>--}}
{{--                            <label for="sport" class="m-2 mt-0 mb-0">--}}
{{--                                <select name="sport" id="sport"  class="form-control border-0" style="background: #f5f5f5">--}}
{{--                                    <option value="">Спорт ↓</option>--}}
{{--                                    @foreach($sports as $sport)--}}
{{--                                        <option value="{{ $sport['sport_id'] }}"--}}
{{--                                                @if($sport['sport_id'] == $request['sport'])--}}
{{--                                                    selected--}}
{{--                                                @endif--}}
{{--                                        >{{ $sport['name'] }}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </label>--}}
{{--                            <label for="gender" class="m-2 mt-0 mb-0">--}}
{{--                                <select name="gender" id="gender" class="form-control border-0" style="background: #f5f5f5">--}}
{{--                                    <option value="">Возрастная группа ↓</option>--}}
{{--                                    <option value="мужчины"--}}
{{--                                            @if('мужчины' == $request['gender'])--}}
{{--                                                selected--}}
{{--                                            @endif--}}
{{--                                    >Мужчины</option>--}}
{{--                                    <option value="женщины"--}}
{{--                                            @if('женщины' == $request['gender'])--}}
{{--                                                selected--}}
{{--                                        @endif--}}
{{--                                    >Женщины</option>--}}
{{--                                    <option value="юниоры"--}}
{{--                                            @if('юниоры' == $request['gender'])--}}
{{--                                                selected--}}
{{--                                        @endif--}}
{{--                                    >Юниоры</option>--}}
{{--                                    <option value="юниорки"--}}
{{--                                            @if('юниорки' == $request['gender'])--}}
{{--                                                selected--}}
{{--                                        @endif--}}
{{--                                    >Юниорки</option>--}}
{{--                                    <option value="юноши"--}}
{{--                                            @if('юноши' == $request['gender'])--}}
{{--                                                selected--}}
{{--                                        @endif--}}
{{--                                    >Юноши</option>--}}
{{--                                    <option value="девушки"--}}
{{--                                            @if('девушки' == $request['gender'])--}}
{{--                                                selected--}}
{{--                                        @endif--}}
{{--                                    >Девушки</option>--}}
{{--                                    <option value="мальчики"--}}
{{--                                            @if('мальчики' == $request['gender'])--}}
{{--                                                selected--}}
{{--                                        @endif--}}
{{--                                    >Мальчики</option>--}}
{{--                                    <option value="девочки"--}}
{{--                                            @if('девочки' == $request['gender'])--}}
{{--                                                selected--}}
{{--                                        @endif--}}
{{--                                    >Девочки</option>--}}
{{--                                </select>--}}
{{--                            </label>--}}
{{--                            <label for="place" class="m-2 mt-0 mb-0">--}}
{{--                                <input type="search" value="{{ $request['address'] }}" name="address" id="address" class="form-control" placeholder="Место проведения" style="background: #f5f5f5; border: 0">--}}
{{--                            </label>--}}
{{--                            <label for="age" class="m-2 mt-0 mb-0">--}}
{{--                                <input value="{{ $request['age'] }}" type="number" name="age" id="age" class="form-control" style="background: #f5f5f5; border: 0" placeholder="Возраст" min="0">--}}
{{--                            </label>--}}
{{--                            <label for="date" class="m-2 mt-0 mb-0">--}}
{{--                                <select name="date" class="form-control border-0" style="background: #f5f5f5">--}}
{{--                                    <option value="{{ null }}">Дата ↓</option>--}}
{{--                                    <option value="now"--}}
{{--                                            @if($request['date'] == 'now')--}}
{{--                                                selected--}}
{{--                                        @endif--}}
{{--                                    >Идущие</option>--}}
{{--                                    <option value="{{ \Carbon\Carbon::now()->addMonth()->format('Y-m-d') }}"--}}
{{--                                            @if($request['date'] == \Carbon\Carbon::now()->addMonth()->format('Y-m-d'))--}}
{{--                                                selected--}}
{{--                                            @endif--}}
{{--                                    >На месяц</option>--}}
{{--                                    <option value="{{ \Carbon\Carbon::now()->addMonth(3)->format('Y-m-d') }}"--}}
{{--                                            @if($request['date'] == \Carbon\Carbon::now()->addMonth(3)->format('Y-m-d'))--}}
{{--                                                selected--}}
{{--                                            @endif--}}
{{--                                    >На 3 месяца</option>--}}
{{--                                    <option value="{{ \Carbon\Carbon::now()->addMonth(6)->format('Y-m-d') }}"--}}
{{--                                            @if($request['date'] == \Carbon\Carbon::now()->addMonth(6)->format('Y-m-d'))--}}
{{--                                                selected--}}
{{--                                           @endif--}}
{{--                                    >На 6 месяцев</option>--}}
{{--                                    <option value="prev"--}}
{{--                                            @if($request['date'] == 'prev')--}}
{{--                                                selected--}}
{{--                                        @endif--}}
{{--                                    >Прошедшие</option>--}}
{{--                                </select>--}}
{{--                                <input type="date" name="date" class="form-control" value="{{ $request['date'] }}">--}}
{{--                            </label>--}}
{{--                        </div>--}}

{{--                        <div class="col text-center">--}}
{{--                            <button class="btn shadow rounded bg-white border-0 text-nowrap" type="submit" id="submit">--}}
{{--                                <h6 class="m-1">Поиск  --}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">--}}
{{--                                        <path d="M10.7204 9.43396H10.0429L9.80274 9.2024C10.6723 8.19384 11.1502 6.90626 11.1492 5.57462C11.1492 4.47206 10.8223 3.39427 10.2097 2.47753C9.59719 1.56079 8.72655 0.846274 7.70793 0.424345C6.6893 0.00241539 5.56843 -0.107981 4.48706 0.107117C3.40569 0.322215 2.41239 0.853145 1.63277 1.63277C0.853145 2.41239 0.322215 3.40569 0.107117 4.48706C-0.107981 5.56843 0.00241539 6.6893 0.424345 7.70793C0.846274 8.72655 1.56079 9.59719 2.47753 10.2097C3.39427 10.8223 4.47206 11.1492 5.57462 11.1492C6.9554 11.1492 8.2247 10.6432 9.2024 9.80274L9.43396 10.0429V10.7204L13.7221 15L15 13.7221L10.7204 9.43396ZM5.57462 9.43396C3.43911 9.43396 1.71527 7.71012 1.71527 5.57462C1.71527 3.43911 3.43911 1.71527 5.57462 1.71527C7.71012 1.71527 9.43396 3.43911 9.43396 5.57462C9.43396 7.71012 7.71012 9.43396 5.57462 9.43396Z" fill="black"/>--}}
{{--                                    </svg>--}}
{{--                                </h6>--}}
{{--                            </button>--}}
{{--                            @if ($status == 1)--}}
{{--                                <a href="{{ route('search') }}" class="btn border-0 shadow text-danger"><h6 class="m-1">Сбросить</h6></a>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </form>--}}

                    <div class="lesson_all">
                        @if (empty($game_stories))
                            <div>
                                <h4>Вы ещё пока не прошли ни одного уровня...(</h4>
                            </div>
                        @endif

                        @if (!empty($game_stories))
                            <h5>Твой личный рейтинг завершенных игр</h5>
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
