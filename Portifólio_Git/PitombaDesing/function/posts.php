<?php 
/**Função para listar os produtos */
require_once '../function/myConnect.php';
function posts(){
    try {
        $sql = "SELECT * FROM tbpostagem ORDER BY RAND() LIMIT 20";
        $qr = query($sql); 

        /**Estilizando dentro da função e executando o html */
            echo '
            <section class="container my-4">
                <div class="row justify-content-center">
            ';     
            while ($data = data($qr)) {
                echo '
                    <div class="col-12 col-sm-6 col-md-4 col-lg-5 mb-4 d-flex justify-content-center">
                        <div class="card bg-danger-subtle w-100">
                        <h5 class="card-title text-padrao-titulo">'.$data['nomePost'].'</h5>
                        <img src="../arquivos/'.$data['imgPost'].'" class="card-img-top rounded" alt="Imagem do post">
                        <div class="card-body">
                                <p class="card-text text-padrao">'.$data['descPost'].'</p>
                                <p class="card-text mt-2 text-padrao">'.$data['dataPost']. '  -Feito por: '.$data['criadorPost'].'</p>
                            </div>
                        </div>
                    </div>
                ';
            }        
            echo '
                </div>
            </section>
            ';
    } catch (Exception $erro) {
        return "<p class='alert alert-danger text-center mt-4'>Erro de SQL:" .$erro->getMessage(). "</p>";
      }
}
?>