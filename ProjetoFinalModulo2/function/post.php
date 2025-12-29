<?php 
/**Função para listar os produtos */
require_once '../function/myConnect.php';
function post(){
    try {
        $sql = "SELECT * FROM tbaula ORDER BY RAND() LIMIT 20";
        $qr = query($sql); 

        /**Estilizando dentro da função e executando o html */
            echo '
            <section class="container my-4">
                <div class="row justify-content-center">
            ';     
            while ($data = data($qr)) {
                echo '
                    <div class="col-md-4 mb-4 d-flex justify-content-center">
                        <div class="card backgroundform w-100">
                        <h5 class="card-title text-warning">'.$data['nomePost'].'</h5>
                        <img src="../arquivos/'.$data['imgPost'].'" class="card-img-top rounded" alt="imgPost">
                        <div class="card-body">
                                <p class="card-text text-warning">'.$data['descPost'].'</p>
                                <p class="card-text mt-2 text-warning">'.$data['dataPost'].'</p>
                                <p class="card-text mt-2 text-warning">Porfessor(a) '.$data['criadorPost'].'</p>
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