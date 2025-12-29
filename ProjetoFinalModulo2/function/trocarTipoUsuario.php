<?php
require_once '../function/manipulateData.php';

function atualizarTipoUsuario(){
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['idForm'] == 'tipoUsuario') {

        /**Receber campos para atualizar */
        $email = $_POST['email'];
        $tipo = $_POST['tipo'];

        /**Referenciar os campos necessários */
        $tabela = 'tbusuarios';
        $valor = "tipoUsuario = '$tipo'";
        $campoId = 'emailUsuario';
        $valorId = "'$email'";
        if (empty($tipo)) {
            echo "
            <script>
                alert ('Erro nos campos!');
                window.location.href='../controls/cad_professor.php';
            </script>";
            exit;
        // } else if ($tipo === $_POST['tipoUsuario']) {
        //     echo "<script>
        //         alert ('Erro! Você já está cadastrado como esse tipo de usuario');
        //         window.location.href='../controls/cad_professor.php';
        //     </script>";
        //     exit;
        } else{
            update($tabela, $valor, $campoId, $valorId);
            echo "
                <script>
                    alert ('Atualizado com sucesso!');
                    window.location.href='../controls/index.php';
                </script>";
            exit;
        }
    }    
    }
}
