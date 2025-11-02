<?php 
/**Função que lista os resultados encontrados para apagar*/
require_once '../function/manipulateData.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    /**Função que lista as academias */
    if($_POST['idForm'] == 'searchPostsDl'){
        /**Receber o dado a ser procurado */
        $usuario = $_POST['usuario'];
        try {
            $sql = "SELECT * FROM tbpostagem WHERE criadorPost = '$usuario'";

            $qr = query($sql);
            $total = mysqli_num_rows($qr);
            echo "<p>Foram encontrados {$total} resultados.</p>";
            $contador = 0;
            for($i = 0; $i <= $total; $i++){
                $contador++ ;
                while($dados = data($qr)){
                echo "
                <tr>
                  <td>".$dados['id']."</td>
                  <td>".$dados['nomePost']."</td>
                  <td><img src='../arquivos/".$dados['imgPost']."' alt='' width='100px'></td>
                  <td><span class='text-truncate d-inline-block' style='max-width: 200px;'>".$dados['descPost']."</span></td>
                  <td>
                    <!-- Modal para confirmar a exclusão -->
                    <!-- Button trigger modal -->";
                    require '../pages/modal_confirmar_apagar_posts.php';
                  "</td>
                </tr>
                ";
                }
            }
            
        } catch (Exception $e) {
            echo "Erro de SQL: " . $e->getMessage();
        }
    }
}
?>