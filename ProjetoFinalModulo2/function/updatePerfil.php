<?php 
require_once "../function/manipulateData.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['idForm'] == 'upPerfil') {

        /**Receber o id para verificar o item a ser */
        $email = $_POST['email'];
        /**Receber campos para atualizar */
        $telefone = $_POST['telefone'];
        $localizacao = $_POST['localizacao'];
        $sobre = $_POST['sobre'];
        
        /**Referenciar os campos necessários */
        $tabela = 'tbusuarios';
        $valor = "telefone = '$telefone', estado = '$localizacao', descricao = '$sobre' ";
        $campoId = 'emailUsuario';
        $valorId = "'$email'";
        if (empty($telefone) || empty($localizacao) || empty($sobre)) {
            echo "
            <script>
                alert ('Preencha os campos!');
                window.location.href='../pages/?page=res_pergunta;
            </script>";
            exit;
        }else{
            update($tabela, $valor, $campoId, $valorId);
            echo "
                <script>
                    alert ('Perfil atualizado com sucesso!');
                    window.location.href='../pages/?page=perfil';
                </script>";
            exit;
        }
        }
}

