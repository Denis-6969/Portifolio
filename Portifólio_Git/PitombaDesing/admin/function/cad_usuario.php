<?php 
require_once '../function/manipulateData.php';
 function cadastroUsuarios(){
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
            /**Receber os dados */
            $nome = $_POST['nomeUsuario'];
            $email = $_POST['emailUsuario'];
            $senha = $_POST['senhaUsuario'];
            //comando para criptografia da senha
            $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
            $tipoUsuario = $_POST['tipoUsuario'];
    
            $tabela = 'tbusuarios';
            $campos = "nomeUsuario, emailUsuario, senhaUsuario, tipoUsuario";
            $valores = "'$nome', '$email', '$senhaCriptografada', '$tipoUsuario'";
            $campoId = "emailUsuario";
            $valorId = "'$email'";
            if(empty($nome) || empty($email) || empty($senha) || empty($tipoUsuario)){
              echo "
              <div class='alert alert-danger mt-3'>
                <p class='lead text-center text-bg-black'>Preencha os campos!</p>
              </div>
              <div class='text-center'>
                <a href='?tela=form_cad_usuarios' class='btn btn-color'>Voltar</a>
             </div>'";
            }else if(ifExist($tabela, $campoId, $valorId) == 1){
              echo "
              <div class='alert alert-danger mt-3'>
                <p class='lead text-center text-bg-black'>Um Usuário já esta cadastrado nesse e-mail, cadastre outro e-mail!</p>
              </div>
              <div class='text-center'>
                <a href='?tela=form_cad_usuarios' class='btn btn-color'>Voltar</a>
              </div>'";
            }
            else{
                require_once '../function/tipoTabela.php';
            }
   }  
        }
?>