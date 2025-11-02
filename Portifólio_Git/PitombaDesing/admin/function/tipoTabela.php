<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
                <a href="?tela=form_cad_posts" class="btn btn-color">Voltar</a>
            </div>';
    }
    /**CADASTRANDO USUARIO */

        if ($_POST['form'] == 'cadUsuario') {

        echo '
          <p class="text-center mt-2 bg-secondary-subtle text-dark fw-bolder fs-3">STATUS</p>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NOME DE USUÁRIO</th>
                        <th scope="col">E-MAIL</th>
                        <th scope="col">SENHA</th>
                        <th scope="col">TIPO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>'.$nome.'</td>
                        <td>'.$email.'</td>
                        <td>'.$senha.'</td>
                        <td>'.$tipoUsuario.'</td>
                    </tr>
                </tbody>
            </table>

            <div class="alert alert-success d-flex align-items-center h-10" role="alert">
                <p class="fw-bold"><i class="bi bi-patch-check-fill me-2"></i>'.insert($tabela, $campos, $valores).'</p>
            </div>

            <div class="text-center">
                <a href="?tela=form_cad_usuarios" class="btn btn-color">Voltar</a>
            </div>';
    }
}
?>