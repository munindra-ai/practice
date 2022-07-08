@component('mail::message')
# Dear {{$name}} ,


Your account has been locked. please Try again after {{$locked_time}} hour.

<!-- @component('mail::button', ['url' => '']) -->
<!-- Button Text -->
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
