<?php 
session_start();
require_once '../function/pages.php';
require_once '../function/verificarLogin.php';
  // instanciar a sessão
  if(validarLogin()){
    $nome = $_SESSION['nome'];
    $email = $_SESSION['email'];        
       
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Pitomba Desing</title>
    <link rel="shortcut icon" href="../../assets/img/iconePitomba.jpeg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../css/style.css">
  </head>
  <body class="bg-padrao vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-2 p-0">
          <!-- Organização do espaço para exibir a foto do usuário -->
          <div class="container bg-caixa-definido">
            <!-- Cabeçalho -->
            <?php require_once '../require/cabecalho.php';?>
            <!-- Painel de opções -->
            <div class="row">
              <div class="col p-0">
                <!-- Menu -->
                <?php require_once '../require/menu.php';?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-9">
          <!-- Conteúdos -->
          <?php 
          try {
            require pages();
          } catch (Exception $e) {
            echo $e->getMessage();
          }
          ?>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}else{
  sairLogin();
  exit();
}
?>