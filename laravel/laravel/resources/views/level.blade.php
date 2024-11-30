@extends('layouts.app')

@section('content')

    <div class='container'>

        <div class="lesson m-4 text-center">
            <h1 class="text-center">Уровень {{ $level['level_number'] }}: {{ $level['name'] }}</h1>

            <div class="" style="max-width: 1200px; max-height: 1200px; border: 1px solid red; height: 70vh;"></div>
        </div>

@endsection
