<?php
function verificarFormulario()
{
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if ($_POST['form'] == 'cadUsuario') {
         require_once '../function/cad_usuarios.php';
         cadastroUsuarios();
      }
      if ($_POST['form'] == 'atSenha') {
         require_once '../function/at_senha.php';
         atualizarSenha();
      }
      if ($_POST['form'] == 'cadPost') {
         require_once '../function/inserir_posts.php';
         inserirPost();
      }
   }
}
