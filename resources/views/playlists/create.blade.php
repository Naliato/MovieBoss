<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MovieBoss - Criar playlists</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script>
function CadastraAi()
{
alert("Você precisa se cadastrar antes de tentar fazer uma playlist!!!");
}
</script>
    </head>   
<body>
<div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper light-blue lighten-1">
        <a href="/" class="brand-logo center"><i class="large material-icons">videocam</i>MovieBoss</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="/">Home</a></li>
          <li><a href="/filmes">Filmes</a></li>
          <li><a href="/generos">Gêneros</a></li>
          <li class="active"><a href="#">Playlists</a></li></ul>
         <ul class="left hide-on-med-and-down">
          @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Registre-se</a></li>
                            <button class="btn waves-effect red" onclick="CadastraAi()">Clica aqui</button>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-button"  data-activates="login" role="button">
                                    {{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i>
                                </a>
                                <ul class="dropdown-content" role="menu" id="login">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
        </ul>
        </ul>
      </div>
    </nav>
  </div>
        <div class="container">
        <div class="row">
<br /><br />
            <h3 class="center">Criação de Playlists</h3>

            <div class="col s12">
                <form action="{{ route('playlists.store')}}" method="post" class="col s12">

                    {{csrf_field()}}
  </div></div>
<div class="row">
<div class="input-field col s12">
          <input id="nome" type="text" class="form-control" name="nome" class="validate">
          <label for="nome">Nome da lista</label>
        </div></div>
        </div>
<div class="center">
                      <button class="btn waves-effect cyan lighten-2" type="submit" name="action">Cadastrar</button>
</div>
                </form>
            </div>
        </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
                            @endif
    </body>
    </html> 