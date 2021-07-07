@component('mail::message')


        <h1>سلام {{ $body['name'] }}</h1>
        <p>تیکت شما پاسخ داده شده است</p>


@component('mail::button', ['url' => route('dashboard.tickets.show', $body['ticket_id'])])
مشاهده تیکت
@endcomponent

با تشکر,<br>
{{ config('app.name') }}
@endcomponent
