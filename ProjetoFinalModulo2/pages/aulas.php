<?php 
 require_once '../function/post.php';
 require_once '../function/buscarPost.php';
?>

<div class="container py-5">
    <h1 class="text-center text-primary">Postagens do Reforço Já</h1>

    <form action="" method="post" class="mt-5">
      <h4 class="mb-3 text-padrao text-primary"><i class="bi bi-search"></i>  Procurar por Posts Expecificos:</h4>
      <input type="text" name="search" class="form-control bg-primary-subtle text-primary" placeholder="Insira o nome do post desejado" >
      <button type="submit" class="btn btn-outline-primary text-warning fw-bold mt-2">Buscar</button>
      <?php buscarPost(); ?>
    </form>
   <div>
    <h1 class="text-center text-primary mt-5 mb-5">Algumas de nossas aulas</h1>
    <?php post(); ?>
   </div>


  </div>