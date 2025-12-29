        <p class="display-6 text-center alert alert-primary mt-2">Resultados Encontrados</p>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nome</th>
                  <th>Matéria</th>
                  <th>Pergunta</th>
                  <th width='30px'></th>
                </tr>
              </thead>
              <tbody>
                <!-- Código da função listar_result_search.php -->
                 <?php 
                 require '../function/listar_result_search_update_pergunta.php'; 
                 ?>
              </tbody>
            </table>
          </div>