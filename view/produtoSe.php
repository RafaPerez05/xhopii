<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/produtoSe.css">
    <title>Produto Selecionado</title>
</head>
<body>
<header>

<nav class=top >
            <div class=logo1>
            <img src="../img/logo.png">
            <h1>Xhopii</h1>
            </div>
            <section id="cabecalho-logout">
            <a href="../view/login.php">Sair</a>
        </section>
</nav>

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

</header>
<main>


        <section class="left">
           <?php
           $imagem_selecionada = $_GET['imagem'];
           $nome_selecionado = $_GET['nome'];
           $valor_selecionado = $_GET['valor'];
           $qtd_selecionado = $_GET['quantidade'];



           
            echo "<div class=\"menores\">";
            echo "<div id=\"preto\">";
                echo" <img id=\"camisa-preta\" src= '$imagem_selecionada.'>";
            echo "</div>";

            echo "<div id=\"azul\">";
                echo" <img id=\"camisa-azul\" src= '$imagem_selecionada.'>";
            echo "</div>";

            echo "<div id=\"verde\">";
                echo" <img id=\"camisa-verde\" src= '$imagem_selecionada.'>";
            echo "</div>";

            echo "<div id=\"cinza\">";
                echo" <img id=\"camisa-cinza\" src= '$imagem_selecionada.'>";
            echo "</div>";

            echo "<div id=\"rosa\">";
                echo" <img id=\"camisa-rosa\" src= '$imagem_selecionada.'>";
            echo "</div>";
            echo "</div>";

            echo "<div class=\"maior\">";
                echo" <img id=\"principal\" src= '$imagem_selecionada.'>";
            echo "</div>";

        echo    "</section>";

        echo "<section class=\"right\">";
            echo "<h1> $nome_selecionado </h1>";
           
            echo"<h2>R$ $valor_selecionado</h2>";

            echo"<p>$qtd_selecionado pecas disponíveis</p>";
            echo "<p>Tamanhos:</p>";
            echo "<div class=\"modelos\">";
                echo "<button name=\"f\">F";  echo "</button>";
                echo "<button name=\"m\">M";  echo "</button>";
                echo "<button name=\"g\">G";  echo "</button>";
                echo "<button name=\"gg\">GG";  echo "</button>";
            echo "</div>";
            echo "<p name=\"tamanho\">Tamanho Selecionado:</p>";
            echo "<button id=\"comprar\">Comprar Agora"; echo" </button>";
        echo "</section>";
        ?>
        
    </main>






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
          <section style="display:grid; row-gap: 1rem; margin: 0 auto; top: 92%; right: 30.4%; position: absolute;">
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