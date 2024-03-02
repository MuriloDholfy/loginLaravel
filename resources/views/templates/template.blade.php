  <!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-...coloque o hash da integridade aqui..." crossorigin="anonymous" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <!-- Styles -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet" />
  </head>

  <body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top p-3">
    <a class="navbar-brand" href="#">Ordem & Serviço</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cadastro</a>
        </li>
      </ul>
    </div>
  </nav>


    @yield('contente')
    <!-- Footer -->
    <footer class="rodape bg-dark">
      <div class="card text-center text-bg-dark bg-dark">
        <div class="card-header bg-dark">
          Sobre Nós
        </div>
        <div class="card-body row">
          <div class="col-md-4">
            <div class="box-text">
              <h3>Histórico</h3>
              <p>Saiba mais sobre nossa jornada e conquistas.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box-text">
              <h3>Contato</h3>
              <p>Tel: (11) 12342-2444</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box-text">
              <h3>Nossas Redes Sociais</h3>
              <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                <li><a class="github" href="#"><i class="fab fa-github"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card-footer text-bg-dark">
          &copy; 2024 Murilo Dholfy. Todos os direitos reservados.
        </div>
    </footer>



  </body>

  </html>