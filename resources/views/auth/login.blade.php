<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MovieBoss - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper light-blue lighten-1">
        <a href="/" class="brand-logo center"><i class="large material-icons">videocam</i>MovieBoss</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="/">Home</a></li>
          <li><a href="filmes">Filmes</a></li>
          <li><a href="generos">Gêneros</a></li>
          <li><a href="playlists">Playlists</a></li></ul>
          <ul class="left hide-on-med-and-down">
          <li class="active"><a href="#">Login</a></li>
          <li><a href="register">Registre-se</a></li></ul>
      </div>
    </nav>
  </div>
<div class="container">
    <div class="row">
    <br /><br />
    <h3 class="center">Login</h3></div>
        <div class="col s12">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}"></div>
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="input-field col s12">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            <label for="email" class="control-label">Email</label>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div></div></div><br />
                        <div class="row">
                        <div class="input-field col s12">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password" class="validate" required>
                                <label for="password" class="control-label">Senha</label>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div></div></div>
                            <br /><br />
                        <div class="form-group">
                            <div class="center">
                                <button type="submit" class="btn waves-effect cyan lighten-2">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div></div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>
