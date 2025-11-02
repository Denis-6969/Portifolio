  <!-- Navbar -->
   <?php require_once '../function/verificarLogin.php'; ?>
  <nav class="navbar navbar-expand-lg bg-nav">
    <div class="container">
      <a class="navbar-brand text-padrao text-start" href="?page=home"><img src="../assets/img/iconePitomba.jpeg" class="me-3 ms-0" width="40px" alt="">Pitomba Desings</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link nav-text" href="?page=home">Home</a></li>
          <li class="nav-item"><a class="nav-link nav-text" href="?page=posts">Posts</a></li>
          <li class="nav-item"><a class="nav-link nav-text" href="?page=sobre">Sobre</a></li>
          <li class="nav-item"><a class="nav-link nav-text" href="?page=criacao">Criar</a></li>
          <p class="ms-5 mt-2 text-padrao">Bem vindo <?php echo $_SESSION['nome']; ?></p>
          <li class="nav-item dropdown ms-3 me-5">
          <a class="nav-link nav-text" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-three-dots-vertical"></i>Mais
          </a>
          <ul class="dropdown-menu bg-nav">
            <li><label for="sessao" class="text-padrao ms-2">Sessão:</label></li>
            <a href="../function/sair.php" class="btn btn-sm btn-color d-flex mt-2">Sair</a>
        </ul>

      </div>
    </div>
  </nav>
