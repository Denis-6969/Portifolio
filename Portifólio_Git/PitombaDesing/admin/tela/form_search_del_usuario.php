          <p class="display-6 text-center alert alert-light mt-2">Apagar Usuário</p>
          <form action="" method="post" class="form-control p-5">
            <p class="lead">Informe parte ou o item que deseja procurar para apagar!</p>
            <div class="form-control mb-2">
              <input type="hidden" name="idForm" value="searchUsuario">
              <label for="nome" class="form-label">O que deseja apagar?</label>
              <input type="search" name="search" id="" class="form-control ">
            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-color">Procurar</button>
            </div>
          </form>
          
          <!-- Tabela para mostrar os resultados encontrados -->
           <?php require './tab_most_result_usuarios.php';?>