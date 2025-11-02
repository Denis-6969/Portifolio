<?php 
 require_once '../function/posts.php';
 require_once '../function/buscarPosts.php';
?>

<div class="container py-5">
    <h1 class="text-center text-padrao">Postagens do Pitomba Desings</h1>

    <form action="" method="post" class="mt-5">
      <h4 class="mb-3 text-padrao"><i class="bi bi-search"></i>  Procurar por Posts Expecificos:</h4>
      <input type="text" name="search" class="form-control" placeholder="Insira o nome do post desejado" >
      <button type="submit" class="btn btn-color mt-2">Buscar</button>
      <?php buscarPosts(); ?>
    </form>
   <div>
    <h1 class="text-center text-padrao mt-5 mb-5">Algumas de nossas artes</h1>
    <?php posts(); ?>
   </div>


  </div>
