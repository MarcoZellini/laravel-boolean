<x-mail::message>
    Mail From: {{ $lead->email }} <br>
    To: {{ env('MAIL_FROM_ADDRESS', 'no_reply@cocktails.it') }}<br>
    <small>The body of your message:</small> <br><br>
    - {{ $lead->message }}
</x-mail::message>
