<?php
require_once '../function/manipulateData.php';
function image()
{
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /**sequencia de passos logicos para inserir uma imagem no banco e na pasta arquivos */
    if (isset($_FILES['imgPost'])) {
      $arquivo = $_FILES['imgPost'];

      if ($arquivo['error']) {
        return 2;
      }

      if ($arquivo['size'] > 3097152) {
        return 3;
      }
      $pasta = "../arquivos/";
      $nomeDoArquivo = $arquivo['name'];
      $novoNomeDoArquivo = uniqid();
      $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

      if ($extensao != "jpg" && $extensao != "png") {
        return 4;
      }

      $deuCerto = move_uploaded_file($arquivo["tmp_name"], $pasta . $novoNomeDoArquivo . "." . $extensao);

      if ($deuCerto) {
        return $novoNomeDoArquivo.".".$extensao;
      }
    }
  }
}
