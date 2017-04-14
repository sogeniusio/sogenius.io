@component('mail::message')

# Customer Review
Dear {{ $data['firstname'] }},<br /><br />
Thank you for working with us on your last project. We appreciate your business and value you as a customer. To help us continue our high quality of service, we invite you to leave us your feedback. Our goal is always to provide our very best product so that our customers are happy. It’s also our goal to continue improving. That’s why we value your feedback.

@component('mail::button', ['url' => $data['url'] ] )
Share your experience!
@endcomponent

@component('mail::panel')
"I value your input and I think sharing your experience would give others a great idea of what it’s like to work with me.”
@endcomponent

Thanks,<br /><br />
![So Genius I/O Logo][logo]

[logo]: {{asset('/images/signed.png')}} "Logo"
Hosnel G.<br /><br />
<strong>Founder</strong><br />
{{ config('app.name') }}
@endcomponent
