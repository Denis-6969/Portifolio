<!-- ATENÇÃO ESSE CÓDIGO É DE ALTORIA DE DENIS_PH, QUAISQUER UM QUE TIVER ACESSO E FOR REUTILIZAR TAL CÓDIGO, FAVOR DEIXAR OS CREDITOS AO PITOMBA DESINGS OU AO CRIADOR DO CÓDIGO -->

<?php 
session_start();
require_once '../function/verificarLogin.php';
  // instanciar a sessão
  if(validarLogin()){
    $nome = $_SESSION['nome'];
    $email = $_SESSION['email'];        
        
?>

<?php 
require_once '../function/page.php';
require_once '../function/posts.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<?php require_once "../require/head.php"; ?>
</head>

<body>

<!-- nav -->
<?php require_once "../require/nav.php"; ?>

<!-- função para trocas de pagina -->
<?php 

        try {
         require page();
        } catch (Exception $erro) {
         echo $erro->getMessage();
        }?>



<!-- footer -->
<?php require_once "../require/footer.php"; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php 
}else{
  sairLogin();
  exit();
}
?>
