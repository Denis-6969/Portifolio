<?php
require_once '../function/myConnect.php';
function listarImage(){
    try {
        $sql = "SELECT * FROM tbimg ORDER BY nameImg ASC";
        if($qr = query($sql)){
            while($data = data($qr)){
                echo "<option value='".$data['idImg']."'>".$data['nomeImg']."</option>";
            }
        }
    } catch (Exception $e) {
        return '<div class="alert alert-success d-flex align-items-center h-10" role="alert">
        <p class="fw-bold"><i class="bi bi-patch-check-fill"></i>'. $e->getMessage();'</p>
    </div>';
    }
}
?>