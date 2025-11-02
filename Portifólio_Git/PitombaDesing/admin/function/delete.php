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
        if ($img && file_exists("../../arquivos/" . $img)) {
            unlink("../../arquivos/" . $img);
        }
        apagar($tabela, $campoId, $valorId);
        echo "
            <script>
                alert ('Apagado com sucesso!');
                window.location.href='../tela/?tela=form_search_del_posts';
            </script>";
        exit;
    }

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
                window.location.href='../tela/?tela=form_search_del_usuario';
            </script>";
        exit;
    }
}
