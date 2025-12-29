<?php
require_once '../function/manipulateData.php';
require_once '../function/image.php';

function inserirAula()
{
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    /**Receber os dados */
    $nome = $_POST['nomePost'];
    $imgPost = $_FILES;
    $imgPost = image();
    $descricao = $_POST['descPost'];
    $dataDePostagem = $_POST['dataPost'];
    $criadorPost = $_POST['criadorPost'];

    $tabela = 'tbaula';
    $campos = "nomePost, descPost, imgPost, dataPost, criadorPost";
    $valores = "'$nome', '$descricao','$imgPost', '$dataDePostagem', '$criadorPost'";
    $campoId = "imgPost";
    $valorId = "'$imgPost'";

    if (empty($nome) || empty($imgPost) || empty($descricao) || empty($dataDePostagem)) {
      echo "
              <div class='alert alert-danger mt-3'>
                <p class='lead text-center text-bg-black'>Preencha os campos!</p>
              </div>
                                        <div class='text-center'>
                <a href='?page=form_cad_posts' class='btn btn-primary text-warning fw-bold'>Voltar</a>
            </div>'";
    } else if (ifExist($tabela, $campoId, $valorId) == 1) {
      echo "
              <div class='alert alert-danger mt-3'>
                <p class='lead text-center text-bg-black'>Um post com esse mesmo nome ja foi feito!</p>
              </div>
                          <div class='text-center'>
                <a href='?page=form_cad_posts' class='btn btn-primary text-warning fw-bold'>Voltar</a>
            </div>'";
    } else if ($imgPost == 2) {
      echo "<div class='alert alert-danger mt-3'>
                         <p class='lead text-center text-bg-black'>Erro ao enviar imagem!</p>
                       </div>
                                                 <div class='text-center'>
                        <a href='?page=form_cad_posts' class='btn btn-primary text-warning fw-bold'>Voltar</a>
                    </div>'";
    } else if ($imgPost == 3) {
      echo "<div class='alert alert-danger mt-3'>
                               <p class='lead text-center text-bg-black'>Insira uma imagem do tamanho suportado, sendo 3MB!</p>
                             </div>
                                                       <div class='text-center'>
                              <a href='?page=form_cad_posts' class='btn btn-primary text-warning fw-bold'>Voltar</a>
                          </div>'";
    }
   else if ($imgPost == 4) {
    echo "<div class='alert alert-danger mt-3'>
                 <p class='lead text-center text-bg-black'>Insira uma imagem no formato suportado, sendo eles .jpg e .png!</p>
               </div>
                                         <div class='text-center'>
                <a href='?pafe=form_cad_posts' class='btn btn-primary text-warning fw-bold'>Voltar</a>
            </div>'";
  } else {
    require_once '../function/tipoTabela.php';
  }
}
}