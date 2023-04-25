<x-mail::message>
# De {{ $nom }}<br>
Mail : {{ $email }}<br>
Titre : {{ $objet }}<br>

{{ $message }}

<x-mail::button :url="'http://passion_gestion.test'">
Visit us
</x-mail::button>

Merci,<br>
{{ config('app.name') }}
</x-mail::message>
