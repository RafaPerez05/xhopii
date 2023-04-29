<?php

session_start();
require "funcoesBD.php";


//Cadastro de Cliente
if(isset($_POST['inputNome']) && isset($_POST['inputSobrenome']) && 
   isset($_POST['inputCPF']) && isset($_POST['inputDataNasc']) && 
   isset($_POST['inputTelefone']) && isset($_POST['inputEmail']) &&
   isset($_POST['inputSenha'])){

    $nome = $_POST['inputNome'];
    $sobrenome = $_POST['inputSobrenome'];
    $cpf = $_POST['inputCPF'];
    $dataNasc = $_POST['inputDataNasc'];
    $telefone = $_POST['inputTelefone'];
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];
    
    inserirCliente($cpf, $nome, $sobrenome, $dataNasc, 
                   $telefone, $email, $senha);

    header('Location:../view/cadastroCliente.php');
    die();
    }


    //cadastra funcionarios
    if(isset($_POST['inputNome1']) && 
    isset($_POST['inputSobrenome1']) && 
    isset($_POST['inputCPF1']) && 
    isset($_POST['inputDataNasc1']) && 
    isset($_POST['inputTelefone1']) && 
    isset($_POST['inputcargo1']) && 
    isset($_POST['inputSalario1']) && 
    isset($_POST['inputEmail1']) &&
    isset($_POST['inputSenha1'])){

    $fun_nome = $_POST['inputNome1'];
    $fun_sobrenome = $_POST['inputSobrenome1'];
    $fun_cpf = $_POST['inputCPF1'];
    $fun_dataNasc = $_POST['inputDataNasc1'];
    $fun_telefone = $_POST['inputTelefone1'];
    $fun_cargo = $_POST['inputcargo1'];
    $fun_salario = $_POST['inputSalario1'];
    $fun_email = $_POST['inputEmail1'];
    $fun_senha = $_POST['inputSenha1'];
    
    inserirFuncionario($fun_cpf, $fun_nome, $fun_sobrenome, $fun_dataNasc, 
                   $fun_telefone,$fun_cargo, $fun_salario, $fun_email, $fun_senha);

    // header('Location:../view/cadastroFuncionario.php');
    die();
} 

//cadastra produtos

if(isset($_POST['inputcodP']) && 
isset($_POST['inputnomeP']) && 
isset($_POST['inputfabP']) && 
isset($_POST['inputdesP']) && 
isset($_POST['inputvalP']) && 
isset($_POST['inputqtdP']) &&
isset($_FILES['imagemP'])){

    $extensao = strtolower( substr($_FILES['imagemP']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "../img/produtos/".$novo_nome;
    move_uploaded_file($_FILES['imagemP']['tmp_name'], $diretorio);

    $pro_cod = $_POST['inputcodP'];
    $pro_nome = $_POST['inputnomeP'];
    $pro_fab = $_POST['inputfabP'];
    $pro_des = $_POST['inputdesP'];
    $pro_val = $_POST['inputvalP'];
    $pro_qtd = $_POST['inputqtdP'];
    $imagemP = $_FILES['imagemP'];


 inserirProduto($pro_cod, $pro_nome,$pro_fab,$pro_des,$pro_val,$pro_qtd, $diretorio);

 // header('Location:../view/cadastroFuncionario.php');
 die();
 }
 
?>