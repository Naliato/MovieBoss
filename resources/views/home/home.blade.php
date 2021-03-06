<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MovieBoss - Home</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>   
<body>
<div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper light-blue lighten-1">
        <a href="#" class="brand-logo center"><i class="large material-icons">videocam</i>MovieBoss</a>
        <ul class="right hide-on-med-and-down">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="filmes">Filmes</a></li>
          <li><a href="generos">Gêneros</a></li>
          <li><a href="playlists">Playlists</a></li></ul>
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
      </div>
    </nav>
  </div>
  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
  <div class="container">
  <div class="row">
  <div class="col s12">
    <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">code</i>Sobre o projeto</div>
      <div class="collapsible-body"><span>Sistema de controle de filmes e listas com o objetivo de melhorar nossas habilidades no framework laravel.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">done</i>Atividades Realizadas</div>
      <div class="collapsible-body"><span>Cadastrar filmes, gêneros, usúarios e listas.<br />Editar filmes, gêneros. <br />O sistema de notas ficou incompleto e a visualização das listas está com problema, mas o relacionamento é feito na tabela pivot normalmente.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">perm_identity</i>Alunos</div>
      <div class="collapsible-body"><span>Ana Laura dos Santos<br /> Fabricio Moraes <br />Lucas Naliato</span></div>
    </li>
  </ul>
  </div>
  </div></div></div>
<script>
  $(".button-collapse").sideNav();
</script>
   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
   <script> 
   $(".dropdown-button").dropdown(); 
   </script>
   <script>
   $(document).ready(function(){
    $('.collapsible').collapsible();
  });
  </script> 
    </body>
</html>
