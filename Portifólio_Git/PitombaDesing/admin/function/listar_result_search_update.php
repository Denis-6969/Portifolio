<?php 
/**Função que lista os resultados encontrados para apagar*/
require_once '../function/manipulateData.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    /**Função que lista os usuários */
    if($_POST['idForm'] == 'searchPosts'){
        /**Receber o dado a ser procurado */
        $search = $_POST['search'];
        try {
            $sql = "SELECT * FROM tbpostagem  WHERE nomePost LIKE '%$search%'";

            $qr = query($sql);
            $total = mysqli_num_rows($qr);
            echo "<p>Foram encontrados {$total} resultados.</p>";
            $contador = 0;
            for($i = 0; $i <= $total; $i++){
                $contador++;
                if($dado = data($qr)){
                echo "
                <tr>
                  <td>".$dado['id']."</td>
                  <td>".$dado['nomePost']."</td>
                  <td><img src='../../arquivos/".$dado['imgPost']."' alt='' width='100px' ></td>
                  <td><span class='text-truncate d-inline-block' style='max-width: 200px;'>".$dado['descPost']."</span></td>
                  <td>
                    <!-- Modal para confirmar a exclusão -->
                    <!-- Button trigger modal -->";
                    require './modal_confirmar_update_posts.php';
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