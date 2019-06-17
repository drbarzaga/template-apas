@component('mail::message')
# Need Quote

Name: {{ $data['name'] }}
Email: {{ $data['email'] }}

@if($data['message'])
<p style="text-align: justify">
    {{ $data['message'] }}
</p>
@endif
@endcomponent
