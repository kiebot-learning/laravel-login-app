<html>

<head>
    <title>Login Page</title>
</head>

<body>

    @if (isset(Auth::user() -> email))
    <script>window.location='/login/success';</script>
    @endif

    @if ($message = Session::get('error'))
    <div align='center'>{{ $message }}</div>
    @endif

    @if (count($errors) > 0)
    <center>
        <ul>
        @foreach($errors -> all() as $error)
            <li style="color:red">{{ $error }}</li>
        @endforeach
        </ul>
    </center>
    @endif
    <form method="post" action="{{ url('/login/checkLogin') }}">
        {{csrf_field()}}
        <table width="20%" background="0099CC" align="center">

            <tr>
                <td>Email:</td>
                <td><input type="email" name="email"></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="login" value="Login"></td>
            </tr>

        </table>
    </form>

</body>

</html>