<!-- resources/views/emails/confirmation.blade.php -->

@component('mail::message')
# Confirmar tu dirección de correo electrónico

Gracias por registrarte en nuestra aplicación. Por favor, confirma tu dirección de correo electrónico haciendo clic en el siguiente enlace:

@component('mail::button', ['url' => $url])
Confirmar Correo Electrónico
@endcomponent

¡Gracias!
@endcomponent
