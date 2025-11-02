<?php

/**Função que verifica os dados de acesso para realizar login no sistema */
require_once '../function/myConnect.php';

function verificarLogin()
{
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $senha = $_POST['senha']; // Não precisa sanitizar senha com FILTER_SANITIZE_URL

        if (empty($email) || empty($senha)) {
            return 'Preencha os dados!<br>';
        }
//inicializando sequencia logica para descriptografia da senha para realizar o login
        try {
            $sql = "SELECT * FROM tbusuarios WHERE emailUsuario = '$email'";
            $qr = query($sql);
            $totalLinhas = Lines($qr);

            if ($totalLinhas == 1) {
                $dados = data($qr);
                $senhaDoBanco = $dados['senhaUsuario'];

                if (password_verify($senha, $senhaDoBanco)) {
                    $_SESSION['nome'] = $dados['nomeUsuario'];
                    $_SESSION['email'] = $dados['emailUsuario'];
                    $_SESSION['tipo'] = $dados['tipoUsuario'];

                    if ($dados['tipoUsuario'] == 'Admin') {
                        header('Location: ../admin/tela/index.php ');
                    } else {
                        header('Location: ../pages/index.php');
                    }
                    exit;
                } else {
                    return "Senha incorreta!";
                }
            } else if ($totalLinhas == 0) {
                return "Usuário não encontrado!";
            } else {
                return "Usuário duplicado, contate o administrador!";
            }
        } catch (Exception $e) {
            return "Erro de SQL: " . $e->getMessage();
        }
    }
}


function validarLogin()
{
    return isset($_SESSION['nome']) && isset($_SESSION['email']);
}

function sairLogin()
{
    $_SESSION = array();
    session_destroy();
    header('Location: ../control/index.php');
}
