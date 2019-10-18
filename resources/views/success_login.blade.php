<html>

<body>
    @if(isset(Auth::user()->email))
    <h1>Welcome {{ Auth::user()->email }}</h1>
    <a href="{{ url('/logout') }}">Logout</a>
    @else
    <script>window.location='/login';</script>
    @endif
</body>

</html>