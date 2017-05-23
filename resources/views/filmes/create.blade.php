<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MovieBoss - Criar filmes</title>
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
<br /><br />
            <h3 class="center">Criação de Filmes</h3>

            <div class="col s12">
                <form action="{{ route('filmes.store')}}" method="post" class="col s12">

                    {{csrf_field()}}
<div class="row">
<div class="input-field col s12">
          <input id="titulo" type="text" class="form-control" name="titulo" class="validate">
          <label for="titulo">Título</label>
        </div>
</div>
<div class="row">
<div class="input-field col s12">
  <label for="ano">Ano</label>
        <input id="ano" name="ano" type="date" class="datepicker">
</div></div>
<div class="row">
        <div class="input-field col s12">
          <input id="diretor" type="text" class="form-control" name="diretor" class="validate">
          <label for="diretor">Diretor</label>
        </div></div>
        <div class="row">
<div class="input-field col s12">
    <select name="genero" id="genero" class="form-control">
      <option value="" disabled selected>Escolha o gênero</option>
      @foreach($generos as $genero)
                              <option value="{{$genero->id}}">{{$genero->nome}}</option>
                            @endforeach
    </select>
  </div></div>
<br /> <br />
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
    <script>
      $(document).ready(function(){
      $('select').material_select();
      });
    </script>
    <script>
        $('.datepicker').pickadate({
    selectMonths: true,
    selectYears: 100
  });
    </script>
    </body>
    </html> 