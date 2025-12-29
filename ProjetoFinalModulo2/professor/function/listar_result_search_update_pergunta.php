<?php 
/**Função que lista os resultados encontrados para apagar*/
require_once '../function/manipulateData.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    /**Função que lista os usuários */
    if($_POST['idForm'] == 'searchPergunta'){
        /**Receber o dado a ser procurado */
        $materia = $_POST['materia'];
        if (empty($materia)) {
            echo "
            <script>
                alert ('Selecione uma Matéria!');
                window.location.href='../pages/?page=res_pergunta';
            </script>";
        exit;
        }else {
        try {
            $sql = "SELECT * FROM tbperguntas  WHERE situacao LIKE 'não respondido' AND materia LIKE '%$materia%'";

            $qr = query($sql);
            $total = mysqli_num_rows($qr);
            echo "<h3 class='text-primary'>Foram encontrados {$total} resultados</h3>";
            $contador = 0;
            for($i = 0; $i <= $total; $i++){
                $contador++;
                if($dado = data($qr)){
                echo "
                <tr>
                  <td>".$dado['idPergunta']."</td>
                  <td>".$dado['questionador']."</td>
                  <td>".$dado['materia']."</td>
                  <td><span class='text-truncate d-inline-block' style='max-width: 200px;'>".$dado['pergunta']."</span></td>
                  <td>
                    <!-- Modal para confirmar a exclusão -->
                    <!-- Button trigger modal -->";
                    require './modal_confirmar_update_pergunta.php';
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
}
?>