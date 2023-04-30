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
    <style>
        
    .container { 
    margin-top: 100px;
    margin-bottom: 1000px;
    margin: 100px;
    justify-content: center;
    align-items: center;
    display: grid;
    grid-template-columns: 33vh 33vh 33vh 33vh 33vh;
    grid-template-rows: 700px 300px;
    gap: 0px 0px;
    background-color: red;
    border: 5px solid gainsboro;
    grid-auto-flow: row;
    grid-template-areas:
      "produto1";
  }
  
  .produto1 { grid-area: produto1; }

  
  .container img {
    width: 15vw;
    height: 15vw;
  
  }
  
  .container p {
    margin: 0;
    padding: 10px;
    background-color: white;
    box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.4);
  }
  
  .produto {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: white;
    border: 2px solid gray;
    padding: 10px;
    margin: 10px;
    box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.4);
  }
  
  .produto img {
    margin-bottom: 10px;
    align-items: center;
    justify-content: center;
  }
  .produto .descricao {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(255, 255, 255, 0.9);
    padding: 5px;
    text-align: center;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    font-weight: bold;
    font-size: 1.2rem;
  }

  .pre{
    display: flex;
  }

  .preço{
    color:rgb(251,86,48);
  }

  .quant{
    color:gray;
  }
    </style>
</head>
<body>

    <header>
        <section id="cabecalho-logo">
            <img src="../img/logo.png">
            <h1>Xhopii</h1>
        </section>
        <section id="cabecalho-logout">
            <a href="../view/login.php">Sair</a>
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
                echo "<div class=\"container\">";
                echo "<div class=\"produto\">";

                $listaProduto = retornarProduto();
                while($produto = mysqli_fetch_assoc($listaProduto)){
                    echo "<img src=".$produto['pro_img'] ." >";
                    echo "<div class=\"product-info\">Descrição: " . $produto["pro_des"] . "</p>";
                    echo "<div class=\"pre\"";
                    echo "<a class=\"preço\"> " . $produto["pro_val"] . "</a>";
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
                    echo "<a class=\"quant\">" . $produto["pro_qtd"] . "</a>";
                    echo "</div>";

                }
                echo "</div>";
                echo "</div>";

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