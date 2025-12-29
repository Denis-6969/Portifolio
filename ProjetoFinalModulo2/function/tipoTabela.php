<?php

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     /**Cadastrar um usuário */
    if ($_POST['form'] == 'cadUsuario') {

        echo '
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Senha</th>
                    </tr>
                </thead>
                <tbody class="table table-info">
                    <tr>
                        <td>'.$nome.'</td>
                        <td>'.$email.'</td>
                        <td>'.$senha.'</td>
                    </tr>
                </tbody>
            </table>

            <div class="alert d-flex align-items-center h-10" role="alert">
                <p class="fw-bold"><i class="bi bi-patch-check-fill me-2"></i>'.insert($tabela, $campos, $valores).' Tire um print para salvar seu login =) </p>
            </div>

            <div class="text-center">
                <a href="./index.php" class="btn btn-primary text-warning">Voltar</a>
            </div>';
    }
    /**Atualizar a senha de um usuário */
    if ($_POST['form'] == 'atSenha') {

        echo '

            <div class="alert d-flex align-items-center h-10" role="alert">
                <p class="fw-bold"><i class="bi bi-patch-check-fill me-2"></i>Senha '.update($tabela, $valor, $campoId, $valorId).'</p>
            </div>

            <div class="text-center">
                <a href="./index.php" class="btn btn-primary text-warning">Voltar</a>
            </div>';
    }

        if ($_POST['form'] == 'cadPost') {

        echo '
          <p class="text-center mt-2 bg-secondary-subtle text-dark fw-bolder fs-3">STATUS</p>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">TITULO DA POSTAGEM</th>
                        <th scope="col">IMG DA POSTAGEM</th>
                        <th scope="col">DESCRIÇÃO DA POSTAGEM</th>
                        <th scope="col">DATA DA POSTAGEM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>'.$nome.'</td>
                        <td>'.$imgPost.'</td>
                        <td><span class="text-truncate d-inline-block" style="max-width: 200px;">'.$descricao.'</span></td>
                        <td>'.$dataDePostagem.'</td>
                    </tr>
                </tbody>
            </table>

            <div class="alert alert-success d-flex align-items-center h-10" role="alert">
                <p class="fw-bold"><i class="bi bi-patch-check-fill me-2"></i>'.insert($tabela, $campos, $valores).'</p>
            </div>

            <div class="text-center">
                <a href="?page=criacao" class="btn btn-primary text-warning">Voltar</a>
            </div>';
    }

    if ($_POST['form'] == 'cadPergunta') {
        echo '
        <p class="text-center mt-2 bg-secondary-subtle text-dark fw-bolder fs-3">STATUS</p>

          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">PERGUNTA</th>
                      <th scope="col">MATÉRIA</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                  <td><span class="text-truncate d-inline-block" style="max-width: 200px;">'.$pergunta.'</span></td>
                      <td>'.$materia.'</td>
                  </tr>
              </tbody>
          </table>

          <div class="alert alert-success d-flex align-items-center h-10" role="alert">
              <p class="fw-bold"><i class="bi bi-patch-check-fill me-2"></i>'.insert($tabela, $campos, $valores).'</p>
          </div>

          <div class="text-center">
              <a href="?page=perguntas" class="btn btn-primary text-warning">Voltar</a>
          </div>';
    }

    if ($_POST['form'] == 'cadContato') {
        echo '
        <p class="text-center mt-2 bg-secondary-subtle text-dark fw-bolder fs-3">STATUS</p>

          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">NOME</th>
                      <th scope="col">MENSAGEM</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                  <td>'.$nome.'</td>
                  <td><span class="text-truncate d-inline-block" style="max-width: 200px;">'.$mensagem.'</span></td>
                  </tr>
              </tbody>
          </table>

          <div class="alert alert-success d-flex align-items-center h-10" role="alert">
              <p class="fw-bold"><i class="bi bi-patch-check-fill me-2"></i>'.insert($tabela, $campos, $valores).'</p>
          </div>

          <div class="text-center">
              <a href="?page=contato" class="btn btn-primary text-warning">Voltar</a>
          </div>';
    }
 }
?>