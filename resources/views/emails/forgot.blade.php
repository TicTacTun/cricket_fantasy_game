@component('mail::message')
Hello {{$user->name}}

<p>Press the button to reset your passsword and get access to the website</p>

@component('mail::button',['url' => url('reset/')])
Reset Your Password
@endcomponent

Thanks,<br>
{{config('app.name')}}
@endcomponent