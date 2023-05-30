<x-mail::message>
# De {{ $nom }}<br>
Mail : {{ $email }}<br>
Titre : {{ $objet }}<br>

{{ $message }}


Merci,<br>
{{ config('app.name') }}
</x-mail::message>
