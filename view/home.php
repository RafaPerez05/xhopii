<?php
    require "../processamento/funcoesBD.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/home.css">
    <title>Home</title>
</head>
<body>
    <header>
        <img src="../img/logo.png">
        <h1>Xhopii</h1>
        <ul>
            <li><a href="../view/login.php">Sair</a></li>
        </ul>
    </header>

    
        <nav>

            <ul>
                <li><a href="../view/home.php">Home</a></li>
                <li><a href="../view/cadastroCliente.php">Cadastro Cliente</a></li>
                <li><a href="../view/cadastroFuncionario.php">Cadastro Funcionário</a></li>
                <li><a href="../view/cadastroProduto.php">Cadastro Produto</a></li>
                <li><a href="../view/VerCliente.php">Ver Clientes</a></li>
                <li><a href="../view/VerFuncionario.php">Ver Funcionarios</a></li>
                <li><a href="../view/VerProduto.php">Ver Produtos</a></li>
            </ul>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <div id="meuSlider" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#meuSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#meuSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#meuSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#meuSlider" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../img/carousel-1.jpg" class="d-block w-100" alt="imagem 1">
              </div>
              <div class="carousel-item">
                <img src="../img/carousel-2.jpg" class="d-block w-100" alt="imagem 2">
              </div>
              <div class="carousel-item">
                <img src="../img/carousel-3.jpg" class="d-block w-100" alt="imagem 3">
              </div>
              <div class="carousel-item">
                <img src="../img/carousel-4.jpg" class="d-block w-100" alt="imagem 4">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#meuSlider" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#meuSlider" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <br>
          <br>
          <br>
          <br>

          <div class="promo">
            <img src="../img/home-promocao.png">
          </div>

          <br>
        <a href="cadastroCliente.php"></a>

          <main>
          <h1>Destaques da semana</h1>
        <p>
        <?php
    
            

                $listaProduto = retornarProduto();
                echo "<div class=\"container\">";
                while($produto = mysqli_fetch_assoc($listaProduto)){
                  echo "<div class=\"produto\">";
                    echo "<a href='produtoSe.php?imagem=".$produto['pro_img']."'><img src=".$produto['pro_img'] ."></a>";
                    echo "<div class=\"product-info\">" . $produto["pro_nome"];
                    echo "<div class=\"pre\"";
                    echo "<a class=\"preço\">Preço:R$" . $produto["pro_val"] . "</a>";
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
                    echo "<a class=\"quant\">Quantidade: " . $produto["pro_qtd"] . "</a>";
                      echo "</div>";
                    echo "</div>";
                  echo "</div>";
                }
                echo "</div>";
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