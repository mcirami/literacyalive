<x-mail::message>
# Contact Message

You have a new message from {{ $name }}
<br>
Email: {{ $email }}
<br>
Message: {{ $message }}
<br>
<br>
{{--
<x-mail::button :url="''">
Button Text
</x-mail::button>
--}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
