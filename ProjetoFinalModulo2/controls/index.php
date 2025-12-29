<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reforço Já - Login</title>
    <!-- Link para gerar o Bootstrap -->
    <link rel="shortcut icon" href="../assets/img/iconePitomba.jpeg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <!-- Link do CSS -->
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <!-- Principal -->
    <main>
        <div class="container-fluid background">
            <div class="row text-warning">
                <div class="col-12 col-md-8 col-lg-4 min-vh-100 align-content-center mx-auto">
                    <form action="./index.php" method="post" class="p-3 rounded-4 backgroundform">
                        <h1 class="text-center mb-4"><img src="../img/logoReforcoJa.png" width="100px" alt=""></h1>
                        <p class="lead display-6 text-center mb-4">Faça o seu login.</p>
                        <div>
                            <label for="email" class="form-label lead">E-mail</label>
                            <input type="email" class="form-control bg-primary-subtle text-primary" name="email" placeholder="Digite o seu e-mail">
                        </div>
                        <div class="mt-2">
                            <label for="senha" class="form-label lead">Senha</label>
                            <input type="password" class="form-control bg-primary-subtle text-primary" name="senha" placeholder="Digite a sua senha">
                        </div>
                        <div class="text-end mt-3">
                            <a href="./cad_usuario.php" class="link-warning link-underline link-underline-opacity-0 link-opacity-50-hover">Cadastre-se</a>
                        </div>
                        <div class="text-end mt-2 mb-4">
                            <a href="./update_senha.php" class="link-warning link-underline link-underline-opacity-0 link-opacity-50-hover">Esqueci minha senha</a>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary text-warning form-control fw-bold w-100">Entrar</button>
                        </div>
                        <div class="mt-4">
                            <p class="text-danger text-center">
                                <?php
                                require_once '../function/verificarLogin.php';
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