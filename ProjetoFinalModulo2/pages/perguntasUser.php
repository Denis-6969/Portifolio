<?php
 try {

            $aluno = $dado['questionador'];
            $sql = "SELECT * FROM tbperguntas  WHERE questionador LIKE '$aluno'";

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
        ?>