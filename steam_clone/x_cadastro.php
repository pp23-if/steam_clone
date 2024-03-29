<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1"/>
    <script src="https://kit.fontawesome.com/f6a29e73b5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css"/>
    <title>cadastro</title>
  </head>

  <body>
    <header>
      <nav>
        <a class="logo"><img src="imgs/steam-logo.jpg" width="113" lang="100"></a>
        <a class="logo">steam-clone</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="index.html"/target = "_self">home-page</a></li>
          <li><a href="x_cadastro.php"/target = "_self">cadastro</a></li>
          <li><a href="sobre_nos.html"/target = "_self">sobre-nós</a></li>
        </ul>
      </nav>
    </header>
    <script src="mobile-navbar.js"></script>

   


    <!--conteúdo-->

    <x>

    <form method="POST">
    
      
      <input type="text" class="inp" name="nome" id="nome" placeholder="nome" required maxlength="30">
    
     
      <input type="number" class="inp" name="codigo" id="codigo" placeholder="informe 4 digitos quaisquer" required min="1111" max="9999">
    
       
      <input type="email"  class="inp" name="email" id="email" placeholder="email" required maxlength="30">
      
  
      <input type="number" class="inp" name="idade" id="idade" placeholder="idade" required min="18" max="100">
      
       <input type="text"   class="inp" name="jogo" id="jogo" placeholder="qual jogo devemos adicionar?" required maxlength="30">
      
       <input type="submit" value="Enviar Dados" class="inpsubmit">

    
       </form>
      </x>

      <br>
      <br>
      <br>
      <br>

      <!-- BACK END --->


      <?php
      /*header('location: lista_download.html');
      redirecionar pagina apos validação.*/
       
       $mensagem = "";


         $nome = "";
         $codigo = "";
         $email = "";
         $idade = "";
         $jogo = "";

         if(isset($_POST["nome"], $_POST["codigo"], $_POST["email"], $_POST["idade"], $_POST["jogo"]))
         {
           
           $conexao = new PDO("mysql:host=localhost;dbname=steam_clone", "root", "",
           array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
          
        

           $nome = filter_input(INPUT_POST, "nome", FILTER_UNSAFE_RAW);
           $codigo = filter_input(INPUT_POST, "codigo", FILTER_SANITIZE_NUMBER_INT);
           $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
           $idade = filter_input(INPUT_POST, "idade", FILTER_VALIDATE_INT);
           $jogo = filter_input(INPUT_POST, "jogo", FILTER_UNSAFE_RAW);
          


           if(!$nome || !$codigo || !$email || !$idade || !$jogo)
           {
             $mensagem = "dados invalidos";
           }
          else
          {
            $stm = $conexao->prepare('INSERT INTO usuario (nome,codigo,email,idade,jogo) VALUES (:nome,:codigo,:email,:idade,:jogo)');
            $stm->bindParam('nome',$nome);
            $stm->bindParam('codigo',$codigo);
            $stm->bindParam('email',$email);
            $stm->bindParam('idade',$idade);
            $stm->bindParam('jogo',$jogo);
            $stm->execute();

          
            $nome = "";
            $codigo = "";
            $email = "";
            $idade = "";
            $jogo= "";

             header('location: lista_download.html');

            
          }



         }
         



      ?>





    <!--RODAPÉ (footer)-->

         <footer>
             <div class="container-footer">
              <div class="row-footer">
                <!--footer col-->
                <div class="footer-col">
                  <h3>para mais informações</h3>
                  <ul>
                     <li><a>WHATSAPP: (34) 9-9999-9999</a></li>
                     <li><a>EMAIL: steam-clone-lorem-impsum@gmail.com</a></li>
                  </ul>
                  <br>
               
                <!--end footer col-->

                      
                <!--footer col-->
                <div class="midias-sociais">
                   <a><i class="fa fa-facebook"></i></a>
                   <a> <i class="fa fa-instagram"></i></a>
                   <a> <i class="fa fa-twitter"></i></a>
                </div>
                </div>
                <!--end footer col-->

              </div>
             </div>

         </footer>

  
  </body>
</html>