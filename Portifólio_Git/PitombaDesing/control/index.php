<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Pitomba Desings</title>
    <!-- Link para gerar o Bootstrap -->
    <link rel="shortcut icon" href="../assets/img/iconePitomba.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <!-- Link do CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-padrao">
    <!-- Principal -->
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 min-vh-100 align-content-center mx-auto">
                    <p class="text-center text-forms fs-1 fw-bold">Pitomba Desing</p>
                    <form action="" method="post" class="p-3 mt-5">
                        <div>
                            <label for="email" class="form-label text-padrao text-black">E-mail</label>
                            <input type="email" class="form-control" name="email" placeholder="Digite o seu e-mail">
                        </div>
                        <div class="mt-2">
                            <label for="senha" class="form-label text-padrao text-black">Senha</label>
                            <input type="password" class="form-control" name="senha" placeholder="Digite a sua senha">
                        </div>
                        <div class="text-end mb-2 mt-4">
                            <span class="text-black">Não tem uma conta?</span><a href="../pages/cad_usuario.php" class="link-destaque link-underline link-underline-opacity-0 link-opacity-50-hover"> Cadastre-se!</a>

                            <!-- função para trocas de pagina -->

                        </div>
                        <div class="text-center mb-3">
                            <a href="../pages/at_senha_usuario.php" class="link-destaque link-underline link-underline-opacity-0 link-opacity-50-hover">Esqueci minha senha</a>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-color form-control">Entrar</button>
                        </div>
                        <div class="mt-4">
                            <p class="text-danger text-center">
                                <?php
                                require_once('../function/verificarLogin.php');
                                echo verificarLogin();
                                ?>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>