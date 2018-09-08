@component('mail::message')
# Introduction

There is a new record from {{$name}}
<br>
Message:{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
