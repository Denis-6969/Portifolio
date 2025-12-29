<?php require_once '../function/at_senha.php'; ?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reforço Já - Atualizar Senha</title>
    <!-- Link para gerar o Bootstrap -->
    <link rel="shortcut icon" href="../assets/img/iconePitomba.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <!-- Link do CSS -->
    <link rel="stylesheet" href="../css/login.css">
</head>

<body class="background">
    <!-- Principal -->
    <main>
        <div class="container-fluid">
            <div class="row text-warning lead">
                <div class="col-12 col-md-8 col-lg-4 min-vh-100 align-content-center mx-auto">
                    <form action="" method="post" class="p-3 backgroundform rounded-4">
                        <a href="./index.php" class="btn btn-outline-warning btn-sm"><i class="bi bi-box-arrow-left"></i></a>
                        <h1 class="text-center mb-4"><img src="../img/logoReforcoJa.png" width="100px" alt=""></h1>
                        <p class="display-6 text-center mb-4">Atualizar senha</p>
                        <div class="mt-2">
                        <input type="hidden" name="form" value="atSenha">
                            <label for="email" class="form-label text-padrao">E-mail</label>
                            <input type="email" class="form-control bg-primary-subtle text-primary" name="email" placeholder="Digite o seu e-mail">
                        </div>
                        <div class="mt-2 mb-2">
                            <label for="senha" class="form-label text-padrao">Senha</label>
                            <input type="password" class="form-control bg-primary-subtle text-primary" name="senha" placeholder="Digite a sua senha">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary text-warning form-control mt-3 fw-bold w-100">Atualizar</button>
                        </div>
                        <div class="mt-4">
                            <p class="text-danger text-center">
                                <?php
                                return atualizarSenha();
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