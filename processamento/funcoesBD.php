<?php

function conectarBD(){
    $conexao = mysqli_connect("localhost","root","","xhopii");
    return($conexao);
}

function inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha){
    
    $conexao = conectarBD();
    $consulta = "INSERT INTO cliente (cpf, nome, sobrenome, dataNascimento, telefone, email, senha) 
                 VALUES ('$cpf','$nome','$sobrenome','$dataNasc','$telefone','$email','$senha')";
    mysqli_query($conexao,$consulta);
    echo "<script>alert('CADASTRO EFETUADO');
    window.location.href='../view/cadastroCliente.php'</script>";
}

function retornarClientes(){

    $conexao = conectarBD();
    $consulta = "SELECT * FROM cliente";
    $listaClientes = mysqli_query($conexao,$consulta);
    return $listaClientes;
}

function inserirFuncionario($fun_cpf, $fun_nome, $fun_sobrenome, $fun_dataNasc, $fun_telefone, $fun_cargo, $fun_salario, $fun_email, $fun_senha){
    
    $conexao = conectarBD();
    $consulta = "INSERT INTO funcionario (fun_cpf, fun_nome, fun_sobrenome, fun_dataNasc, fun_telefone, fun_cargo, fun_salario, fun_email, fun_senha) 
                 VALUES ('$fun_cpf', '$fun_nome','$fun_sobrenome','$fun_dataNasc','$fun_telefone','$fun_cargo','$fun_salario','$fun_email','$fun_senha')";
    mysqli_query($conexao,$consulta);
    echo "<script>alert('FUNCIONARIO CADASTRADO');
    window.location.href='../view/cadastroFuncionario.php'</script>";
}

function retornarFuncionario(){

    $conexao = conectarBD();
    $consulta = "SELECT * FROM funcionario";
    $listaFuncionario = mysqli_query($conexao,$consulta);
    return $listaFuncionario;
}

function inserirProduto($pro_cod,$pro_nome,$pro_fab,$pro_des,$pro_val,$pro_qtd,$novo_nome){
    
    $conexao = conectarBD();
    $consulta = "INSERT INTO produto (pro_cod, pro_nome, pro_fab, pro_des, pro_val, pro_qtd, pro_img) 
                 VALUES ('$pro_cod' , '$pro_nome' ,' $pro_fab' ,' $pro_des' ,' $pro_val' ,' $pro_qtd' , '$novo_nome')";

    mysqli_query($conexao,$consulta);
    echo "<script>alert('PRODUTO CADASTRO');
    window.location.href='../view/cadastroProduto.php'</script>";

}

function retornarProduto(){

    $conexao = conectarBD();
    $consulta = "SELECT * FROM Produto";
    $listaProduto = mysqli_query($conexao,$consulta);
    return $listaProduto;
}

?>