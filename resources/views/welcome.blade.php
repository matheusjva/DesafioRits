<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .Group4{

position: absolute;
width: 139.8px;
height: 74px;
left: 392px;
top: 29px;
            }


.CARREIRAS{

position: absolute;
width: 90px;
height: 11px;
left: 417px;
top: 92px;

font-family: TT Norms;
font-size: 9px;
line-height: 11px;
/* identical to box height */
text-align: center;
letter-spacing: 0.5em;

color: #FFFFFF;
}


.Group {

position: absolute;
width: 139.8px;
height: 56px;
left: 392px;
top: 29px;
}


.Path1 {

position: absolute;
width: 84px;
height: 56px;
left: 419.98px;
top: 29px;

background: #4EEF61;

}
.Path2 {

position: absolute;
width: 23.31px;
height: 28px;
left: 392px;
top: 42.98px;

/* Branco */
background: #FFFFFF;
}

.Path3 {

position: absolute;
width: 23.32px;
height: 27.92px;
left: 508.49px;
top: 43.06px;

/* Branco */
background: #FFFFFF;
}

.Rectangle14 {

position: absolute;
width: 6.99px;
height: 28px;
left: 445.66px;
top: 42.98px;

/* Branco */
background: #FFFFFF;
}

.Path4 {

position: absolute;
width: 20.97px;
height: 28px;
left: 459.64px;
top: 42.98px;

/* Branco */
background: #FFFFFF;
}
        </style>
    </head>
    <body>
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top" >
         <div class="container">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <form class="form-inline">
                              <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                        </form>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio
                              <span class="sr-only">(current)</span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                     </li>
                     @guest
                        <li class="nav-item">
                              <a class="nav-link" href="#">{{ __('Entrar') }}</a>
                        </li>
                        {{--<li class="nav-item">--}}
                              {{--@if (Route::has('register'))--}}
                                 {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>--}}
                              {{--@endif--}}
                        {{--</li>--}}
                     @else
                        <li class="nav-item">
                              <a class="nav-link" href="#">Admin</a>
                        </li>
                        <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                 </form>
                              </div>
                        </li>
                     @endguest
                  </ul>
            </div>
         </div>
      </nav>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>


