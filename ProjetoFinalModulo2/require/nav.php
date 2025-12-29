<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="?page=home">
            <img src="../img/logoReforcoJa.png" alt="logo" width="60px">
        </a>

        <!-- Botão hamburguer -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link link-warning active" aria-current="page" href="?page=home">Ínicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-warning active" aria-current="page" href="?page=aulas">Aulas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-warning" href="?page=perguntas">Perguntas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-warning" href="?page=assinaturas">Assinaturas</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link link-warning dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Mais
                    </a>
                    <ul class="dropdown-menu bg-primary">
                        <li><a class="dropdown-item text-warning" href="?page=perfil">Meu Perfil</a></li>
                        <li><a class="dropdown-item text-warning" href="?page=contato">Contato</a></li>
                        <li><a class="dropdown-item text-warning" href="../controls/cad_professor.php">Torne-se um Professor</a></li>
                        <li><label for="sessao" class="text-warning ms-2 mt-2">Sessão:</label></li>
                        <a href="../function/sair.php" class="btn btn-sm btn-outline-danger d-flex mt-2">Sair</a>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>