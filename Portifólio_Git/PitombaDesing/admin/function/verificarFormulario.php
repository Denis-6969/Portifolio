<?php 
 function verificarFormulario(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         
      if ($_POST['form'] == 'cadPost') {
         require_once '../function/inserir_posts.php';
         inserirPost();
      }
      if ($_POST['form'] == 'cadUsuario') {
         require_once '../function/cad_usuario.php';
         cadastroUsuarios();
      }
    }
 }
?>