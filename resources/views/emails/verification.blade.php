Hi, {{ $user->fullName() }}

<br/><br/>Please active your account : {{ url('auth/verify', $user->email_token)}}<br>