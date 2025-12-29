<?php
require_once '../function/manipulateData.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['idForm'] == 'apUsuario') {
        /**Recebedo o id para verificar o item a ser apagado */
        $id = $_POST['id'];
        /**Referenciar os campos necessários */
        $tabela = 'tbusuarios';
        $campoId = 'idUsuario';
        $valorId = "'$id'";
        apagar($tabela, $campoId, $valorId);
        echo "
            <script>
                alert ('Apagado com sucesso!');
                window.location.href='../../controls/index.php';
            </script>";
        exit;
    }
}
