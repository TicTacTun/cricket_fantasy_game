@component('mail::message')
Hello {{$user->name}}

<p>To get again entry change the pass :D</p>

@component('mail::button',['url' => url('reset/')])
Reset Your Password
@endcomponent

Thanks,<br>
{{config('app.name')}}
@endcomponent