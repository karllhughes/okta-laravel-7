@auth
    <a href="{{ url('/home') }}">{{ $homeLinkText }}</a>
@else
    <a href="{{ url('/login/okta') }}">{{ $loginLinkText }}</a>
@endauth
