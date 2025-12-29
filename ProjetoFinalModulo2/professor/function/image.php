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
      //variavel que ira direcionar a pasta criada para armazenar as imagens
      $pasta = "../../arquivos/";
      //variavel que armazena o nome original do arquivo
      $nomeDoArquivo = $arquivo['name'];
      //variavel que ira dar o novo nome para imagem, a fim de evitar sobreposição por nome no banco
      $novoNomeDoArquivo = uniqid();
      //variavel que irá limitar os formatos de imagem suportados assim evitando que qualquer formato de aequivo seja enviado
      $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

      if ($extensao != "jpg" && $extensao != "png") {
        return 4;
      }
      //variavel com comando que armazena a imagem enviada na pasta do site
      $deuCerto = move_uploaded_file($arquivo["tmp_name"], $pasta . $novoNomeDoArquivo . "." . $extensao);

      if ($deuCerto) {
        return $novoNomeDoArquivo.".".$extensao;
      }
    }
  }
}
