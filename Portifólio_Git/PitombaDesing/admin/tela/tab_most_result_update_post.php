        <p class="display-6 text-center alert alert-warning mt-2">Resultados Encontrados</p>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nome</th>
                  <th>Imagem</th>
                  <th>Descrição</th>
                  <th width='30px'></th>
                </tr>
              </thead>
              <tbody>
                <!-- Código da função listar_result_search.php -->
                 <?php 
                 require '../function/listar_result_search_update.php'; 
                 ?>
              </tbody>
            </table>
          </div>