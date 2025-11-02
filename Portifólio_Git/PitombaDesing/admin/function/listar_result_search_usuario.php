<?php 
/**Função que lista os resultados encontrados para apagar*/
require_once '../function/manipulateData.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    /**Função que lista os usuários */
    if($_POST['idForm'] == 'searchUsuario'){
        /**Receber o dado a ser procurado */
        $search = $_POST['search'];
        try {
            $sql = "SELECT * FROM tbusuarios  WHERE nomeUsuario LIKE '%$search%' OR emailUsuario LIKE '%$search%'";

            $qr = query($sql);
            $total = mysqli_num_rows($qr);
            echo "<p>Foram encontrados {$total} resultados.</p>";
            $contador = 0;
            for($i = 0; $i <= $total; $i++){
                $contador++;
                if($dados = mysqli_fetch_assoc($qr)){
                echo "
                <tr>
                  <td>".$dados['idUsuario']."</td>
                  <td>".$dados['nomeUsuario']."</td>
                  <td>".$dados['emailUsuario']."</td>
                  <td>".$dados['senhaUsuario']."</td>
                  <td>".$dados['tipoUsuario']."</td>
                  <td>
                    <!-- Modal para confirmar a exclusão -->
                    <!-- Button trigger modal -->";
                    require './modal_confirmar_apagar_usuario.php';
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