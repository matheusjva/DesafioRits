<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="#">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  <title>Desafio Rits</title>

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5f1ea4c594.js"></script>  {{--  <link href="/css/material-kit.css?v=2.0.5" rel="stylesheet" />  --}}

  <!-- CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<style>
    .menufont {
        font-family: 'Ubuntu', sans-serif;
        font-size: 12px;
        line-height: 14px;
        text-align: center;
        letter-spacing: 0.025em;
        text-transform: uppercase;
        color: white;


        /* BG Escuro */

        background: #2E2236;
    }

    .menubotao {
        /* Verde */

        background: #4EEF61;
        border-radius: 50px;
    }
    .natal {
        font-family:  'Ubuntu', sans-serif;
        font-size: 12px;
        line-height: 110%;
        /* or 13px */

        text-align: center;
        letter-spacing: -0.025em;
        text-transform: uppercase;

        /* Verde */

        color: #4EEF61;
    }
    .backgroundImg {
        background-color: rgba(46, 34, 54, 0.8) !important;
        background-image: url('https://paqti.com.br/wp-content/uploads/2018/08/alex-kotliarskyi-361081-unsplash-e1533783277923.jpg');
        background-blend-mode: color;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top center;
    }


    .retanguloInput {
        background-color: #F6F6F7;
        border-radius: 2px;
    }
    input[type='file'] {
        display: none
    }

      /* Aparência que terá o seletor de arquivo */
      .arquivo {
        width: 100%;
        border: solid 2px;
        border-radius: 30px;
        color: #4EEF61;
        cursor: pointer;
        margin: 10px;
        padding: 10px 20px
      }
      .vertical-center {
        min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
        min-height: 100vh; /* These two lines are counted as one :-)       */

        display: flex;
        align-items: center;
      }
</style>

<body class="backgroundImg">
<div class="container">
    <div class="row justify-content-center" style="margin-top:10%;">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembre-me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu a senha?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
