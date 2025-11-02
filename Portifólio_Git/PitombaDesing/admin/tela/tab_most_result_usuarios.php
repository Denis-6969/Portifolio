        <p class="display-6 text-center alert alert-warning mt-2">Resultados Encontrados</p>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Usuário</th>
                  <th>E-mail</th>
                  <th>Senha</th>
                  <th>Tipo Usuário</th>
                  <th width='30px'></th>
                </tr>
              </thead>
              <tbody>
                <!-- Código da função listar_result_search.php -->
                 <?php require '../function/listar_result_search_usuario.php'; ?>
              </tbody>
            </table>
          </div>