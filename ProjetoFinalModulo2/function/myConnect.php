<?php 
/** Função para conectar ao banco de dados */
function connect(){
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $dataBase = 'dbreforcoja';

    try {
        if (!$connect = mysqli_connect($server, $user, $pass, $dataBase)) {
            return null;
        }else {
            return $connect;
        }
    } catch (Exception $erro) {
       return "<p class='alert alert-danger text-center mt-4'>Exceprion:" .$erro->getMessage(). "</p>";
    }
}

/**Função para requisitar a query e executar o sql */
function query($sql){
   return $qr = mysqli_query(connect(), $sql);
}

/**Função para verificar a quantidade de linhas encontradas */
function lines($sql){
   return $lines = mysqli_num_rows($sql);
}

/**Função para indicar e listar os dados da dataBase */
function data($qr){
    return $data = mysqli_fetch_assoc($qr);
}
?>