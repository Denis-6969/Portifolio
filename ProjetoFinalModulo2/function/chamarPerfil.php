<?php 
/**Função que lista os resultados encontrados para apagar*/
require_once '../function/manipulateData.php';
        
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        $usuario = $_POST['usuario'];
        try {
            $sql = "SELECT * FROM tbusuarios WHERE emailUsuario LIKE '$usuario'";

            $qr = query($sql);
            $total = mysqli_num_rows($qr);
            $dado = data($qr);
            $descricao = $dado['descricao'];
            $localizacao = $dado['estado'];
            $telefone = $dado['telefone'];
            
        } catch (Exception $e) {
            echo "Erro de SQL: " . $e->getMessage();
        }
}

?>
