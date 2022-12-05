@foreach ($messages as $message)
    <div>
        {{ $message->name }}
    </div>
@endforeach
