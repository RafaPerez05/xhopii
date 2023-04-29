<?php
    require "../processamento/funcoesBD.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" href="../img/logo.png" type="image/png">
    <title>Xhopii - Ver Produtos</title>
</head>
<body>

    <header>
        <section id="cabecalho-logo">
            <img src="../img/logo.png">
            <h1>Xhopii</h1>
        </section>
        <section id="cabecalho-logout">
            <a href="login.php">Sair</a>
        </section>
    </header>

    <nav class="menu-horizontal">
        <ul>
        <li><a href="home.php">Home</a></li>
            <li><a href="cadastroCliente.php">Cadastro Cliente</a></li>
            <li><a href="cadastroFuncionario.php">Cadastro Funcionário</a></li>
            <li><a href="cadastroProduto.php">Cadastro Produto</a></li>
            <li><a href="verCliente.php">Ver Clientes</a></li>
            <li><a href="verFuncionario.php">Ver Funcionários</a></li>
            <li><a href="verProduto.php">Ver Produtos</a></li>
        </ul>
    </nav>

    <section class="conteudo-visualizar">
        <section class="conteudo-visualizar-box">
            <h1>Produtos</h1>
            <?php
                $listaProduto = retornarProduto();
                while($produto = mysqli_fetch_assoc($listaProduto)){
                    echo "<section class=\"conteudo-bloco\">";
                    echo "<h2>Nome: " . $produto["pro_nome"]. "</h2>";
                    echo "<p>Codigo: " . $produto["pro_cod"] . "</p>";
                    echo "<p>Fabricante: " . $produto["pro_fab"] . "</p>";
                    echo "<p>Descrição: " . $produto["pro_des"] . "</p>";
                    echo "<p>Valor: " . $produto["pro_val"] . "</p>";
                    echo "<p>Quantidade: " . $produto["pro_qtd"] . "</p>";
                    echo "<img src=".$produto['pro_img'] ." width='80px' height='80px' >";
                    echo "</section>";


                }
            ?>
        </section>
    </section>

    <footer class="rodape-container">
        <div class="sobretudo">
          <h5>ATENDIMENTO AO CLIENTE</h5>
          <p>Central de Ajuda</p>
          <p>Como Comprar</p>
          <p>Métodos de Pagamento</p>
          <p>Garantia Xhopii</p>
          <p>Devolução e Reembolso</p>
          <p>Fale Conosco</p>
          <p>Ouvidoria</p>
        </div>

        <div class="sobremenos">
          <h5>SOBRE A XHOPII</h5>
          <p>Sobre nós</p>
          <p>Políticas Xhopii</p>
          <p>Política de privacidade</p>
          <p>Programa de Afiliado da Xhopii</p>
          <p>Seja um Entregador Xhopii</p>
          <p>Ofertas Relampago</p>
          <p>Xhopii Blog</p>
          <p>Empresa</p>
        </div>
  
        <div class="pagamento">
          <h5>PAGAMENTO</h5>
          <seaction  style="display: grid;   grid-template-columns: 30px 30px 30px; margin: 0 auto;     right: 45.9%;
          position: absolute;">
          <img src="../img/pix.png" width="30" height="30">
          <img src="../img/boleto.png" width="30" height="30">
          <img src="../img/American-Expres.png" width="30" height="30">
          <img src="../img/Visa-logo.png" width="30" height="30">
          <img src="../img/mastercard.png" width="30" height="30">
          <img src="../img/hipercard-logo-3.png" width="30" height="30">
          <img src="../img/elo.png" width="30" height="30">
          </seaction>
    </div>
    
        <div class="Siga">
          <h5>SIGA-NOS</h5>
          <section style="display:grid; row-gap: 1rem; margin: 0 auto; top: 92%; right: 30.4%;">
            <img src="../img/insta.png" width="20" height="20">
            <img src="../img/tw.png" width="20" height="20">
            <img src="../img/face.png" width="20" height="20">
            <img src="../img/lk.png" width="20" height="20">
        </section>
        </div>
    
        <div class="atendimento">
          <h5>ATENDIMENTO AO CLIENTE</h5>
          <section style="display: grid; row-gap: 1rem; position: absolute; right: 13.9%;">
          <img src="../img/qr.png" width="70" height="70">
          <img src="../img/play.png"> 
          <img src="../img/ap.png">
        </section>
        </div>
      
          
        </div>
    
      
        </div>
        
        
        
    </footer>
    <hr>
    <p class="text"> ₢ 2022 Xhopii. Todos os direitos reservados</p>
   
   
      
</body>
</html>