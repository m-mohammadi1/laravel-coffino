

@foreach ($services as $service)
    {{ $service->id }}
    <a href="{{ route('services.purchase', $service->id) }}">
        {{ $service->title }}
    </a>
    <br />
@endforeach