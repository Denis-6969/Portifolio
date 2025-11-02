<?php 
require_once '../function/manipulateData.php';
 function cadastroUsuarios(){
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
            /**Receber os dados */
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            //comando para criptografia da senha
            $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
    
            $tabela = 'tbusuarios';
            $campos = "nomeUsuario, emailUsuario, senhaUsuario";
            $valores = "'$nome', '$email', '$senhaCriptografada'";
            $campoId = "emailUsuario";
            $valorId = "'$email'";
            if(empty($nome) || empty($email) || empty($senha)){
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