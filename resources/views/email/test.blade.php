<x-mail::message>
# Introduction

{{ $messageText }}

@if($buttonUrl)
<x-mail::button :url="$buttonUrl">
{{ $buttonText }}
</x-mail::button>
@endif

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
