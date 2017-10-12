<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>{{ config('app.name', 'Knowledgebase') }}</title>

    <!-- Styles -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    @include('layouts.partials.navigation')

    @yield('content')

    <footer class="footer">
        <div class="container">
            <span class="text-muted">
                Copyright &copyright; 2017 <a href="https://laracademy.co">Laracademy.co</a>
            </span>
        </div>
    </footer>

    @if(auth()->check())
        <div style="display: none;">
            <form id="frmLogout" action="{{ route('logout') }}" method="POST">
                {!! csrf_field() !!}
            </form>
        </div>
    @endif


    <!-- Scripts -->
    <script src="//code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    @if(auth()->check())
        <script>
            function logout() {
                $('#frmLogout').submit();
            }
        </script>
    @endif
</body>
</html>
