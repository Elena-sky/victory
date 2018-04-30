<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <title>your victorious ads</title>

    <!-- Fonts -->
    <script src="https://use.fontawesome.com/29af5d7ea7.js"></script>
{{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}

<!-- Styles -->
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


</head>


<body>

<!-- header -->
<header>
    <section id="header-section" class="header-section">
        <div class="container">

            <!-- menu -->
            <div class="row">
                <nav class="navbar navbar-expand-md fixed-top container">

                    <button class="navbar-toggler collapsed " type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                    </button>

                    <div class="navbar-collapse collapse" id="navbarsExampleDefault" style="">
                        <ul class="navbar-nav nav-block">
                            <li class="nav-item active nav-block__nav-item">
                                <a class="nav-link disabled nav-block__nav-link" href="#about-section">about</a>
                            </li>
                            <li class="nav-item nav nav-block__nav-item">
                                <a class="nav-link disabled nav-block__nav-link" href="#forpublishers-section">for publishers</a>
                            </li>
                            <li class="nav-item nav-block__nav-item">
                                <a class="nav-link disabled nav-block__nav-link" href="#foradvertisers-section">for advertisers</a>
                            </li>
                            <li class="nav-item nav-block__nav-item">
                                <a class="nav-link disabled nav-block__nav-link" href="#contacts-section">contacts</a>
                            </li>


                            @guest
                                <li class="nav-item nav-block__nav-item">
                                    <a class="nav-link disabled nav-block__nav-link" href="{{ route('register') }}">sign up</a>
                                </li>
                                <li class="nav-item nav-block__nav-item">
                                    <a class="nav-link disabled nav-block__nav-link" href="{{ route('login') }}">login</a>
                                </li>
                            @else

                                <li class="nav-item nav-block__nav-item">
                                    <a class="nav-link disabled nav-block__nav-link" href="#">Welcome,  {{ Auth::user()->name }}</a>
                                </li>

                                <li class="nav-item nav-block__nav-item">

                                    <a class="nav-link disabled nav-block__nav-link"
                                       href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                                </li>

                             @endguest

                        </ul>

                    </div>
                </nav>
            </div>
            <!-- End menu -->


            <!-- image and text -->
            <div class="row you-victorious-row">
                <div class="col-md-6 offset-md-6 you-victorious-block">
                    <img class="you-victorious-block__img" src="{{asset('img/logo.svg')}}"  alt="">
                    <h1 class="you-victorious-block__title">your victorious ads</h1>
                    <a class="you-victorious-block__signup" href="{{route('register')}}">sign up</a>
                </div>
            </div>
            <!-- End image and text -->

        </div>
    </section>

</header>
<!-- End header -->

@yield('content')


</body>

<script src="{{ asset("js/script.js") }}"></script>

</html>
