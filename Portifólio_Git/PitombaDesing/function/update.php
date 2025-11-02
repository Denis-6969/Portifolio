<?php
require_once '../function/manipulateData.php';
require_once '../function/image.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['idForm'] == 'upPosts') {

        /**Receber o id para verificar o item a ser apagado */
        $id = $_POST['id'];
        /**Receber campos para atualizar */
        $nome = $_POST['nomePost'];
        $imgAntiga = $_POST['imgAntiga'];
        $imgPost = $_FILES;
        $imgPost = image();
        $descricao = $_POST['descPost'];

        /**Referenciar os campos necessários */
        $tabela = 'tbpostagem';
        $valor = "nomePost = '$nome', imgPost = '$imgPost', descPost = '$descricao'";
        $campoId = 'id';
        $valorId = "'$id'";
        if (empty($nome) || empty($imgPost) || empty($descricao)) {
            echo "
            <script>
                alert ('Preencha os campos!');
                window.location.href='../tela/?tela=form_search_update_posts';
            </script>";
            exit;
        } else if ($imgPost == 2) {
            echo "<script>
                alert ('Erro ao enviar imagem!');
                window.location.href='../tela/?tela=form_search_update_posts';
            </script>";
            exit;
        } else if ($imgPost == 3) {
            echo "<script>
                alert ('Insira uma imagem do tamanho suportado, sendo 3MB!');
                window.location.href='../tela/?tela=form_search_update_posts';
            </script>";
            exit;
        } else if ($imgPost == 4) {
            echo "<script>
                alert ('Insira uma imagem no formato suportado, sendo eles .jpg e .png!');
                window.location.href='../tela/?tela=form_search_update_posts';
            </script>";
            exit;
        } else {
            // Deletar imagem antiga
            if ($imgAntiga && file_exists("../arquivos/" . $imgAntiga)) {
                unlink("../arquivos/" . $imgAntiga);
            }
            update($tabela, $valor, $campoId, $valorId);
            echo "
                <script>
                    alert ('Atualizado com sucesso!');
                    window.location.href='../pages/?page=gestao';
                </script>";
            exit;
        }
    }
}
