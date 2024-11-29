<div class="card border-0 shadow mb-3" style="min-width: 100%; background: white">
    <div class="row g-0 p-3">
        <div class="p-3">
            <div class="card-body" style="border:1px solid rgb(204, 204, 204); border-radius: 7px">
                <h5 class="card-title pb-3 text-center">{{ $notification['event']['event_name_id'] }} <a style="color:black" href="{{ route('event', ['id' => $notification['event']['event_id']]) }}" }>{{ $notification['event']['name'] }}</a></h5>
                <p class="badge bg-primary">{{ $notification['event']['sport']['name'] }}</p>
                <p class="card-text pt-3 pb-3">Уведомление придет: {{ $notification['date_notification'] }}</p>
                <a class="btn border-danger" href="{{ route('delete_notification', ['notification_id' => $notification['notification_id']]) }}">Удалить</a>
            </div>
        </div>
    </div>
</div>
