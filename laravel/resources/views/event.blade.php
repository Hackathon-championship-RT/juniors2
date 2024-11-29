@extends('layouts.app')

@section('content')

    <div class='container'>

        <div class="lesson m-4 text-center">
            <h1 class="text-center">Название: {{ $event['name'] }}</h1>
            <p>{{ $event['event_name_id'] }}</p>
            <p>Спортивное мероприятие: {{ $event['sport'][0] }}</p>
            <p>Классы и дисциплина: {{ $event['description'] }}</p>
            <p>Возрастная категория: {{ $event['gender_age'] }}</p>
            <p>Состав: {{ $event['structure'] }}</p>
            <p>Дата начала, конца: {{ $event['start'] }}, {{ $event['end'] }}</p>
            <p>Место проведения: {{ $event['address'] }}</p>
            <p>Количество участников: {{ $event['count'] }}</p>
            <p class="mt-3">Количество отметившихся об участии: {{ $count }}</p>

            @if($favourite_status == 0)
                <a href="{{ route('add_favourite', ['event_id' => $event['event_id'], 'user_id' => $user['id']]) }}" class="mt-3 mb-3 btn border-primary">
                    Участвую
                </a>
            @endif
            @if($favourite_status == 1)
                <a href="{{ route('remove_favourite', ['event_id' => $event['event_id'], 'user_id' => $user['id']]) }}" class="mt-3 mb-3 btn border-danger">
                    Не участвую
                </a>
            @endif

            {{--    <div class="d-flex justify-content-center">--}}
            {{--        --}}
            {{--        @if ($bookmark_status == 0)--}}
            {{--            <a href="{{ route('add_bookmark', ['lesson_id' => $lesson['lesson_id']]) }}" class="btn border-primary m-3" style="border: 3px solid"><h6 class="m-1">Добавить в избранные</h6></a>--}}
            {{--        @endif--}}
            {{--        @if ($bookmark_status == 1)--}}
            {{--            <a href="#" class="btn border-primary m-3 disabled" style="border: 3px solid"><h6 class="m-1">В избранном</h6></a>--}}
            {{--        @endif--}}
            {{--    </div>--}}

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card border-0 shadow">
                        <div class="card-header bg-white text-center"><h6 class="m-1">{{ __('Оставьте свое мнение об этом мероприятии') }}</h6></div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('add_review') }}">
                                @csrf

                                <input type="hidden" name="user_id" id="user_id" value="{{ $user['id'] }}">
                                <input type="hidden" name="event_id" id="event_id" value="{{ $event['event_id'] }}">

                                <div class="mb-3">
                                    <label for="review" class="col-md-4 col-form-label text-center">{{ __('Отзыв:') }}</label>

                                    <div class="w-100">
                                        <textarea id="review" type="text" class="form-control @error('review') is-invalid @enderror" style="min-height: 200px; max-height:200px" name="review" value="{{ old('review') }}" required autocomplete="review" autofocus></textarea>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="w-100">
                                        <button type="submit" class="btn border-primary w-100" style="border: 3px solid">
                                            <h6 class="m-1">{{ __('Отправить') }}</h6>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @if (count($reviews) === 0)
                <h4 class="mt-5">{{ __('Отзывов пока нет') }}</h4>
            @endif
            @if (count($reviews) !== 0)
                @for ($i=0; $i<count($reviews); $i++)
                    <div class="review shadow p-4 d-block bg-white rounded-3 m-4">
                        <div class="d-flex">
                            <img class="m-1 mt-0 mb-0" src="{{ asset('img/' . $reviews[$i]['user']['avatar']) }}" alt="{{ $reviews[$i]['user']['avatar'] }}" style="width: 42px; height: 42px; border-radius: 50%">
                            <h3>{{ $reviews[$i]['user']['name'] }}</h3>
                        </div>
                        <p class="d-flex mt-4 mb-4">{{ $reviews[$i]['review'] }}</p>
                        <p class="d-flex mt-4">{{ \Carbon\Carbon::parse($reviews[$i]['created_at'])->format('Y-m-d H:i') }}</p>
                    </div>
                @endfor
            @endif


        </div>

@endsection
