<?php
require_once '../function/manipulateData.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['idForm'] == 'delPost') {
        /**Recebedo o id para verificar o item a ser apagado */
        $id = $_POST['id'];
        $img = $_POST['imgNome'];
        /**Referenciar os campos necessários */
        $tabela = 'tbpostagem';
        $campoId = 'id';
        $valorId = "'$id'";
        if ($img && file_exists("../arquivos/" . $img)) {
            unlink("../arquivos/" . $img);
        }
        apagar($tabela, $campoId, $valorId);
        echo "
            <script>
                alert ('Apagado com sucesso!');
                window.location.href='../pages/?page=gestao';
            </script>";
        exit;
    }
}
