<div class="card border-0 shadow mb-3" style="min-width: 100%; background: white">
    <div class="row g-0 p-3">
        <div class="p-3">
            <div class="card-body" style="border:1px solid rgb(204, 204, 204); border-radius: 7px">
                <h5 class="card-title pb-3 text-center">Уровень {{ $levels[$i]['level_number'] }}. {{ $levels[$i]['name'] }}</h5>
                <p class="badge bg-primary">Количество костей: {{ $levels[$i]['count_chips'] }}</p>
                <p class="card-text pt-3 pb-3">Количество времени: {{ $levels[$i]['time'] }}</p>
                <p class="card-text">{{ $levels[$i]['category']['description'] }}</p>

                <a href="{{ route('level', ['level_id' => $levels[$i]['level_id']]) }}" class="btn btn-primary text-center w-100">Играть!</a>
            </div>
        </div>
    </div>
</div>
