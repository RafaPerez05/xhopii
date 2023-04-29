<?php
session_start();
require "funcoesBD.php";

//DECLARAÇÃO DE VARIÁVEIS
$email = $_POST['login_email'];
$senha = $_POST['login_senha'];
$logar = $_POST['logar'];

$conn = conectarBD();

// Consulta a tabela de funcionários
$sql = "SELECT * FROM funcionario WHERE fun_email='$email' AND fun_senha='$senha'";
$result = $conn->query($sql);

// Verifica se encontrou algum funcionário
if ($result->num_rows > 0) {
    // Armazena os dados do funcionário na sessão
    $_SESSION['usuario'] = $result->fetch_assoc();
    // Redireciona para a página de home
    header("Location: ../view/home.php");
    exit;
}

// Consulta a tabela de clientes
$sql = "SELECT * FROM cliente WHERE email='$email' AND senha='$senha'";
$result = $conn->query($sql);

// Verifica se encontrou algum cliente
if ($result->num_rows > 0) {
    // Armazena os dados do cliente na sessão
    $_SESSION['usuario'] = $result->fetch_assoc();
    // Redireciona para a página de home
    header("Location: ../view/home.php");
    exit;
}

// Se não encontrou nenhum funcionário nem cliente, exibe mensagem de erro
echo "Usuário ou senha inválidos";

?>