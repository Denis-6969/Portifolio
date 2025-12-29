<?php 
        $usuario = $email;
        try {
            $sql = "SELECT * FROM tbusuarios WHERE emailUsuario LIKE '$usuario'";

            $qr = query($sql);
            $total = mysqli_num_rows($qr);
            $dado = data($qr);
            $descricao = $dado['descricao'];
            $localizacao = $dado['estado'];
            $telefone = $dado['telefone'];
            
        } catch (Exception $e) {
            echo "Erro de SQL: " . $e->getMessage();
        }
?>
<body>
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="card shadow-lg backgroundescuro text-warning">
          <div class="card-body text-center">
            <!-- Foto de Perfil -->
            <img src="../../img/iconeProfessor.png" alt="Foto de Perfil" class="rounded-circle mb-3" width="150" height="150">
            
            <!-- Nome -->
            <h3 class="card-title">Bem vindo <?php echo $nome?>!</h3>
            <p class="text-warning"><?php echo $dado['tipoUsuario'] ?></p>
            
            <!-- Informações -->
            <div class="text-start mt-4">
              <form action="" method="post">
                <input type="hidden" name="usuario" value="<?php echo $email?>">
              </form>
              <p><strong>Email:</strong> <?php echo $email ?></p>
              <p><strong>Telefone:</strong> <?php echo $telefone ?></p>
              <p><strong>Localização:</strong> <?php echo $localizacao ?></p>
              <p><strong>Sobre:</strong> <?php echo $descricao ?></p>
            </div>
            
            <!-- Botões -->
            <div class="mt-4">
              <a href="?page=configPerfil" class="btn btn-outline-primary text-warning me-2">Editar Perfil</a>
              <?php require_once "../pages/deletarConta.php"?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
