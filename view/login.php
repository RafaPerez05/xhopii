<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="icon" href="../img/logo.png" type="image/png">
    <title>Xhopii - Login</title>
</head>
<body>
  
  <header>
    <img src="../img/logo.png">
    <h1>Xhopii</h1>
    <h2>Entre</h2>
    <ul>
      <ul>
        <li><a href="#">Precisa de Ajuda?</a></li>
    </ul>
</header>

<!--INICIO FORMULARIO/CLASSES -->

  <main class="login">

    <!--FUNDO FORMS -->
    <div class="login__container">

      <!--TITULO FORMS-->
      <h1 class="login__title">Login</h1>
          
      <!--CAIXA DE TEXTO -->
      <form class="login__form" method="POST" action="../processamento/login.php">

        <!--INPUTS -->

        
        <input class="login__submit" type="email" placeholder="Email" name="login_email">
        <input class="login__submit" type="password" placeholder="senha" name="login_senha">
        <input class="login__submit" type="submit" value="logar" name="logar">


        <!--BOTAO -->

        <!--LINKS -->
        <a class="login__reset" href="#">Esqueceu a senha?</a>
        <a class="login__reset2" href="#">Fazer login com SMS</a>
        
        

        <hr> OU </hr>
        
        <br>
        <br>

        
        <div class="facebook">
          <button><img src="../img/Google__2_-removebg-preview.png">  </button>
        </div>
        <div class="google">
        <button><img src="../img/Google__1_-removebg-preview.png">  </button>
        </div>
        <div class="apple">
          <button><img src="../img/Google__3_-removebg-preview.png">  </button>
          </div>
  
        
          <h5>Novo na Xhopei?<a class="cadastro"  href="cadastroCliente.php"> Cadastrar</a></h5>
         

        
       
      </form>
      
    </div>
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
    