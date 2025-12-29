<?php 
require_once "../function/manipulateData.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['idForm'] == 'upPergunta') {

        /**Receber o id para verificar o item a ser */
        $id = $_POST['id'];
        /**Receber campos para atualizar */
        $status = $_POST['status'];
        $resposta = $_POST['resposta'];
        
        /**Referenciar os campos necessários */
        $tabela = 'tbperguntas';
        $valor = "situacao = '$status', resposta = '$resposta' ";
        $campoId = 'idPergunta';
        $valorId = "'$id'";
        if (empty($resposta)) {
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
                    alert ('Pergunta respondida!');
                    window.location.href='../pages/?page=res_pergunta';
                </script>";
            exit;
        }
        }
}

