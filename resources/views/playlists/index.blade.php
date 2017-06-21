<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MovieBoss - Playlists</title>
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
          <li><a href="/filmes">Filmes</a></li>
          <li><a href="/generos">Gêneros</a></li>
          <li class="active"><a href="#">Playlists</a></li></ul>
          <ul class="left hide-on-med-and-down">
          @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Registre-se</a></li>
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
                        @endif
        </ul>
</ul>
      </div>
    </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3 class="center">
                    Playlists 
                <a href="/playlists/create" class="btn waves-effect cyan lighten-2">Cadastrar</a>    
                </h3>
                <div class="container">
                    <div class="center">
                        <table class="bordered highlight centered responsive-table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($playlists as $playlist)
                                <tr>
                                    <td>{{$playlist->id}}</td>
                                    <td>{{$playlist->nome}}</td>
                                    <td>
                                        <a class="btn waves-effect green" href="/playlists/{{$playlist->id}}/edit"><i class="material-icons small">mode_edit</i>
                                        </a>

                                        <form style="display: inline;" action="{{route('playlists.destroy', $playlist->id)}}" method="post">
                                        
                                             {{csrf_field()}}

                                            <input type="hidden" name="_method" value="delete">

                                            <button class="btn waves-effect red"><i class="material-icons small">delete</i>
                                        </button>
                                   <a class="btn waves-effect blue" href="/add/create"><i class="material-icons small">playlist_add</i></a>
                                        <a class="btn waves-effect orange" href="/add/show"><i class="material-icons small">pageview</i></a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script> 
   $(".dropdown-button").dropdown(); 
   </script> 
</body>
</html>
