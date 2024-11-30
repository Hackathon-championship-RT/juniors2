<div class="card border-0 mb-3" style="min-width: 100%; background: white; border-radius: 0">
    <div class="row g-0 p-3">
        <div class="p-3">
            <div class="card-body" style="">
                <h5 class="card-title pb-3 text-center">Уровень {{ $levels[$i]['level_number'] }}. {{ $levels[$i]['name'] }}</h5>
                <p class="card-text pt-3 pb-3">{{ $levels[$i]['time'] }}</p>
                <p class="card-text">{{ $levels[$i]['category']['description'] }}</p>

                <a href="{{ route('level', ['level_id' => $levels[$i]['level_id']]) }}" class="lk_button w-100">Играть!</a>
            </div>
        </div>
    </div>
</div>
