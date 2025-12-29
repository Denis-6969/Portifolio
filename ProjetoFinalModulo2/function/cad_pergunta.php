<?php 
require_once '../function/manipulateData.php';
 function cadastroPerguntas(){
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
            /**Receber os dados */
            $pergunta = $_POST['pergunta'];
            $materia = $_POST['materia'];
            $questionador = $_POST['questionador'];

            $tabela = 'tbperguntas';
            $campos = "pergunta, materia, questionador";
            $valores = "'$pergunta', '$materia', '$questionador'";
            $campoId = "pegunta";
            $valorId = "'$pergunta'";
            if(empty($pergunta) || empty($materia)){
              echo "
              <div class='alert alert-danger mt-3'>
                <p class='lead text-center text-bg-black'>Preencha os campos!</p>
              </div>";
            }else if(ifExist($tabela, $campoId, $valorId) == 1){
              echo "
              <div class='alert alert-danger mt-3'>
                <p class='lead text-center text-bg-black'>Um Usuário já esta cadastrado nesse e-mail, cadastre outro e-mail!</p>
              </div>";
            }
            else{
                require_once '../function/tipoTabela.php';
            }
   }  
        }
?>