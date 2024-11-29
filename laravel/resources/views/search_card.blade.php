<div class="card border-0 shadow mb-3" style="min-width: 100%; background: white">
    <div class="row g-0 p-3">
        <div class="p-3">
            <div class="card-body" style="border:1px solid rgb(204, 204, 204); border-radius: 7px">
                <h5 class="card-title pb-3 text-center"><a style="color:black" href="{{ route('event', ['id' => $event['event_id']]) }}" }>{{ $event['name'] }}</a></h5>
                <p class="badge bg-primary">{{ $event['sport'][0] }}</p>
                <p class="card-text pt-3 pb-3">{{ $event['status'] }}</p>
                <p class="card-text pt-3 pb-3 ">{{ $event['start']}} -> {{ $event['end'] }}</p>
                <p class="card-text">{{ $event['gender_age']}}</p>
                <p class="card-text">{{ $event['address']}}</p>
                <p class="card-text">{{ $event['count'] }}</p>

            </div>
        </div>
    </div>
</div>
