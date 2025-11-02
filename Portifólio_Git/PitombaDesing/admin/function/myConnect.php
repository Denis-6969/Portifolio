<?php
/**Função para conectar ao banco de dados */
function connect(){
    $server = 'sql102.infinityfree.com';
    $user = 'if0_40040765';
    $pass = '5NKuqEZjVmZ45D';
    $db = 'if0_40040765_pitomba_desings_database';

    try {
       if (!$connect = mysqli_connect($server, $user, $pass, $db)) {
        return null;
       }else {
        return $connect;
       }       
    } catch (Exception $erro) {
        return "<p class='alert alert-danger text-center mt-4'>Exception:" .$erro->getMessage(). "</p>";
    }
}

/**Função que executar a instrução sql */
function query($sql){
   return $qr = mysqli_query(connect(), $sql);
}

/**Função para verificar a quantidade de linhas encontradas */
function Lines($sql){
    return $lines = mysqli_num_rows($sql);
}

/**Função para listar os dados encontrados */
function data($qr){
     return $data = mysqli_fetch_assoc($qr);
}
?>