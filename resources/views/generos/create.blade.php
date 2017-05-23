<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MovieBoss - Criar gêneros</title>
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
          <li><a href="/filmes/create">Filmes</a></li>
          <li class="active"><a href="#">Gêneros</a></li>
          <li><a href="/playlists/">Playlists</a></li>
         
        </ul>
      </div>
    </nav>
  </div>
    <div class="container">
        <div class="row">
            <div class="col s12">
            <br /><br />
                <h3 class="center">
                    Cadastrar novo gênero
                </h3>

<br /><br />
                <form method="post" action="{{ route('generos.store') }}">
                    {{csrf_field()}}
                    <div class="row">
        <div class="input-field col s12">
          <input id="nome" type="text" class="form-control" name="nome" class="validate">
          <label for="nome">Nome</label>
        </div></div>
        <br /><br />
        <div class="center">
                    <button class="btn waves-effect cyan lighten-2" type="submit">Cadastrar</button></div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>