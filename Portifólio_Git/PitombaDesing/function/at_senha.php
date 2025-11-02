<?php
require_once '../function/manipulateData.php';

function atualizarSenha()
{
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    /**Receber os dados */
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

    $tabela = 'tbusuarios';
    $valor = " senhaUsuario = '$senhaCriptografada'";
    $campoId = "emailUsuario";
    $valorId = "'$email'";
    if (empty($email) || empty($senha)) {
      echo "
              <div class='alert alert-danger mt-3'>
                <p class='lead text-center text-bg-black'>Preencha os campos!</p>
              </div>";
    } else if (!ifExist($tabela, $campoId, $valorId)) {
      echo "
              <div class='alert alert-danger mt-3'>
                <p class='lead text-center text-bg-black'>E-mail inválido!</p>
              </div>";
    } else {
      require_once '../function/tipoTabela.php';
    }
  }
}
