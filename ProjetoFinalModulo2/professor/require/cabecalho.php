         <?php require_once '../function/verificarLogin.php'; ?>

<div class="row">
  <div class="col-12 backgroundescuro text-center py-3">
    <img src="../../img/logoReforcoJa.png" alt="" class="img-fluid" style="max-width: 100px;">
  </div>
</div>
<div class="row py-2 backgroundescuro align-items-center">
  <div class="col-12 col-md-6 text-warning text-center text-md-start">Bem vindo <?php echo $_SESSION['nome']?></div>
  <div class="col-12 col-md-6 text-center text-md-end mt-2 mt-md-0">
    <a href="../function/sair.php" class="btn btn-outline-danger">
      <i class="bi bi-box-arrow-left"></i> Sair
    </a>
  </div>
</div>
