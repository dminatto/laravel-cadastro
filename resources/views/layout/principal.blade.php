<html>
    <head> 
        <script type="text/javascript" src="/js/app.js"></script>
        <script type="text/javascript" src="/js/custom.js"></script>
        <link href="/css/app.css" rel="stylesheet"> 
        <link href="/css/custom.css" rel="stylesheet"> 
        <title>Controle de estoque</title> 
    </head> 
    <body> 
    <div class="conteiner-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Novo
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/novo">Cadastro</a>
                <a class="dropdown-item" href="/detalhes">Detalhamento</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
          @yield("conteudo")
      </div> 
    </div>



</div>

    <footer class="container-fluid footer">
      <p>Developer by Daniele Minatto</p>
    </footer>
  </body>
</html>
