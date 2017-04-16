@component('mail::message')

# Contact Form
<hr />
## Subject: {{ $data['subject'] }}
## From: {{ $data['fullname'] }}
## Reply-to: {{ $data['email'] }}
<hr />

{{ $data['bodyMessage'] }}

@component('mail::button', ['url' => 'mailto:' . $data['email'] . '?Subject=Hello%20again' ] )
Reply
@endcomponent

{{ config('app.name') }}
@endcomponent
