<?php 
require_once '../function/manipulateData.php';
 function cadastroContato(){
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
            /**Receber os dados */
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $mensagem = $_POST['mensagem'];

            $tabela = 'tbcontato';
            $campos = "nomeUsuario, emailUsuario, mensagem";
            $valores = "'$nome', '$email', '$mensagem'";
            $campoId = "nomeUsuario";
            $valorId = "'$nome'";
            if(empty($mensagem)){
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