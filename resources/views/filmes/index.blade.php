<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MovieBoss - Filmes</title>
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
          <li class="active"><a href="#">Filmes</a></li>
          <li><a href="/generos/create">Gêneros</a></li>
          <li><a href="/playlists/">Playlists</a></li>
         </ul>
      </div>
    </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3 class="center">
                    Lista de Filmes 
                <a href="/filmes/create" class="btn waves-effect cyan lighten-2">Cadastrar</a>    
                </h3>
                <div class="container">
                    <div class="center">

                        <table class="bordered highlight centered responsive-table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Titulo</th>
                                    <th>Ano</th>
                                    <th>Diretor</th>
                                    <th></th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach($filmes as $filme)
                                <tr>
                                    <td>{{$filme->id}}</td>
                                    <td>{{$filme->titulo}}</td>
                                    <td>{{$filme->ano}}</td>
                                    <td>{{$filme->diretor}}</td>
                                    <td>
                                        <a class="btn waves-effect green" href="/filmes/{{$filme->id}}/edit"><i class="material-icons small">mode_edit</i>
                                        </a>

                                        <form style="display: inline;" action="{{route('filmes.destroy', $filme->id)}}" method="post">
                                        
                                             {{csrf_field()}}

                                            <input type="hidden" name="_method" value="delete">

                                            <button class="btn waves-effect red"><i class="material-icons small">delete</i>
                                        </button>

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
</body>

</html>
