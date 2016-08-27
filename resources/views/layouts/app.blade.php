<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LearnThroughManga</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    @stack('scripts')
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        .caret-up {
            width: 0;
            height: 0;
            border-left: 4px solid rgba(0, 0, 0, 0);
            border-right: 4px solid rgba(0, 0, 0, 0);
            border-bottom: 4px solid;

            display: inline-block;
            margin-left: 2px;
            vertical-align: middle;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    LearnThroughManga
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manga By Level <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/manga/all')}}">All</a></li>
                            <li><a href="{{ url('/manga/beginner')}}">Beginner</a></li>
                            <li><a href="{{ url('/manga/intermediate')}}">Intermediate</a></li>
                            <li><a href="{{ url('/manga/advanced')}}">Advanced</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/vocab') }}">Find Vocab</a></li>
                    <li><a href="{{ url('/manga/search') }}">Find Manga</a></li>
                    <div hidden>
                        <li><a href="{{ url('/mymanga') }}">My Manga</a></li>
                        <li><a href="{{ url('/myvocab') }}">My Vocab</a></li>
                    </div>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/request/word') }}">Request A Word</a></li>
                    <li><a href="{{ url('/request/word') }}">Request A Manga</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script type="text/javascript">
        $(function(){
        $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                    $(this).toggleClass('open');
                    $('b', this).toggleClass("caret caret-up");
                },
                function() {
                    $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                    $(this).toggleClass('open');
                    $('b', this).toggleClass("caret caret-up");
                });
        });
    </script>
</body>
</html>
