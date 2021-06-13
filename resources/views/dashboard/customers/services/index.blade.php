

@foreach ($services as $service)
    {{ $service->id }}
    <a href="{{ route('dashboard.customers.services.purchase', $service->id) }}">
        {{ $service->title }}
    </a>
    <br />
@endforeach