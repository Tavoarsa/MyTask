@if (Auth::check())
  {{HTML::link('logout', 'Logout')}}
@else
  {{HTML::link('login', 'Login')}}
@endif

{{HTML::link('register', 'Registro');}}
{{HTML::link('restricted', 'Area Restringida');}}
