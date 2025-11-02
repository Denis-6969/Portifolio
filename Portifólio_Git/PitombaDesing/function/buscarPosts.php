<?php 
/**Função que lista os resultados encontrados para apagar*/
require_once '../function/manipulateData.php';

function buscarPosts(){
if($_SERVER['REQUEST_METHOD'] == 'POST'){

        /**Receber o dado a ser procurado */
        $search = $_POST['search'];
        try {
            $sql = "SELECT * FROM tbpostagem  WHERE nomePost OR descPost LIKE '%$search%'";

            $qr = query($sql);
            $total = mysqli_num_rows($qr);
            echo "<p class='text-padrao'>Foram encontrados {$total} resultados.</p>";
            $contador = 0;

        /**Estilizando dentro da função e executando o html */
            echo '
            <section class="container my-4">
                <div class="row justify-content-center">
            ';

        for($i = 0; $i <= $total; $i++){
                $contador++;
                if($dado = data($qr)){
                echo '
                    <div class="col-md-4 mb-4 d-flex justify-content-center">
                        <div class="card text-bg-dark w-100">
                        <h5 class="card-title text-padrao-titulo">'.$dado['nomePost'].'</h5>
                        <img src="'.$dado['imgPost'].'" class="card-img-top rounded" alt="imgPost">
                        <div class="card-body">
                                <p class="card-text text-padrao">'.$dado['descPost'].'</p>
                                <p class="card-text mt-2 text-padrao">'.$dado['dataPost'].'</p>
                            </div>
                        </div>
                    </div>
                ';
            }
        }
             echo '
            </div>
                </section>
            ';
        } catch (Exception $e) {
            echo "Erro de SQL: " . $e->getMessage();
        }
    }
}
?>