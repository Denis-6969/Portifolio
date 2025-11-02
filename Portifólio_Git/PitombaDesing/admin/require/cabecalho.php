         <?php require_once '../function/verificarLogin.php'; ?>

         <div class="row">
              <div class="col text-center text-light py-3"><i class="bi bi-gear fs-1"></i></div>
            </div>
            <div class="row py-2">
              <div class="col text-light">Bem vindo <?php echo $_SESSION['nome']?></div>
              <div class="col text-end">
                <a href="../function/sair.php" class="link-danger link-underline link-underline-opacity-0 link-opacity-50-hover ">
                <i class="bi bi-box-arrow-left"></i> Sair
                </a>
              </div>
            </div>