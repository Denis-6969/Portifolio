          <p class="display-6 text-center alert alert-primary mt-2">Atualizar um Post</p>
          <form action="" method="post" class="form-control p-5 backgroundescuro text-warning">
            <p class="lead">Informe parte ou o item que deseja procurar para atualizar!</p>
            <div class="form-control mb-2 backgroundform text-warning border-primary">
              <input type="hidden" name="idForm" value="searchPosts">
              <input type="hidden" name="professor" value="<?php echo $nome ?>">
              <label for="nome" class="form-label">O que deseja atualizar?</label>
              <input type="hidden" name="search">
              <input type="search" name="search" disabled value="Posts do Professor <?php echo $nome ?>" class="form-control bg-primary-subtle text-primary">
            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-outline-primary text-warning fw-bold">Procurar</button>
            </div>
          </form>
          
          <!-- Tabela para mostrar os resultados -->
           <?php require './tab_most_result_update_post.php';?>