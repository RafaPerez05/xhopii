<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/prduto.css">
    <title>Cadastro de Produto</title>
</head>
<body>
    <header>
        <img src="../img/logo.png">
        <h1>Xhopii</h1>
        <ul>
            <li><a href="../index.html">Sair</a></li>
        </ul>
    </header>

    
        <nav>

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

        <section class="conteudo-cadastro">
            <section class="conteudo-formulario-cadastro">
                <form method="POST" action="../processamento/processamento.php" enctype="multipart/form-data">
                    <label>Cadastrar Produto</label>
                    <input type="text" placeholder="Codigo" name="inputcodP">
                    <input type="text" placeholder="Nome" name="inputnomeP">
                    <input type="text" placeholder="Fabricante" name="inputfabP">
                    <input type="text" placeholder="Descrição" name="inputdesP">
                    <input type="text" placeholder="Valor" name="inputvalP">
                    <input type="text" placeholder="Quantidade" name="inputqtdP">
                    <p>Selecionar foto de perfil:</p>
                    <input type="file" placeholder="file" name="imagemP">
                    <input id="botao" type="submit" value="Cadastrar">
                </form>
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
          <img src="img/pix.png" width="30" height="30">
          <img src="img/boleto.png" width="30" height="30">
          <img src="img/American-Expres.png" width="30" height="30">
          <img src="img/Visa-logo.png" width="30" height="30">
          <img src="img/mastercard.png" width="30" height="30">
          <img src="img/hipercard-logo-3.png" width="30" height="30">
          <img src="img/elo.png" width="30" height="30">
          </seaction>
    </div>
    
        <div class="Siga">
          <h5>SIGA-NOS</h5>
          <section style="display:grid; row-gap: 1rem; margin: 0 auto; top: 165%; right: 28.4%; position: absolute;">
            <img src="img/insta.png" width="20" height="20">
            <img src="img/tw.png" width="20" height="20">
            <img src="img/face.png" width="20" height="20">
            <img src="img/lk.png" width="20" height="20">
        </section>
        </div>
    
        <div class="atendimento">
          <h5>ATENDIMENTO AO CLIENTE</h5>
          <section style="display: grid; row-gap: 1rem; position: absolute; right: 13.9%;">
          <img src="img/qr.png" width="70" height="70">
          <img src="img/play.png"> 
          <img src="img/ap.png">
        </section>
        </div>
      
          
        </div>
    
      
        </div>
        
        
        
    </footer>
    <hr>
    <p class="text"> ₢ 2022 Xhopii. Todos os direitos reservados</p>
   
   
      
</body>
</html>