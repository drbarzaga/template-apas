@component('mail::message')
# Contact Message

Name: {{ $data['name'] }}

{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
