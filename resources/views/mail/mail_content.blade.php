@component('mail::message')

@component('mail::panel')
{{ $content }}
{{-- @foreach($images as $img)
<img src="{{ asset('storage') }}/{{ $img['path'] }}" alt="">123
@endforeach --}}

@endcomponent

@component('mail::button', ['url'=>
'http://my.campaign.fptplay.net/mail'])
Sign up
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent