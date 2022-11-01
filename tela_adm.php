<!DOCTYPE html>
<html>
  <head>
    <title>APAE Guarulhos</title>
    <link href="home.css" rel="stylesheet"/>
    <meta nome="viewport" content="width=devide-width, initial-scale= 1.0,maximum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
  </head>
  <body>
    <header>
      <div class="center">
        <div class="logo"><img src="logo.jpeg"></div>
        <a href="login.html"><input class="favorite styled"
       type="button"
       value="Login"></a>
        <div class="social-media">
          <a href="https://www.facebook.com/apae.guarulhos"><img src="http://simpleicon.com/wp-content/uploads/facebook.png"></a>
          <a href="https://www.instagram.com/apae_guarulhos/"><img src="https://assets.stickpng.com/images/5ecec78673e4440004f09e77.png" style="margin-left:10px ;"></a>
          <a href="https://www.youtube.com/channel/UC85eg0V9n5BaG_oLtFIt4pw/featured"><img src="https://www.iconpacks.net/icons/1/free-youtube-icon-123-thumb.png" style="margin-left:10px;"></a>
        </div>
        </div>
      </div>
      </header>
     <header>
      <div class="center2">
        <div class="menu">
          <a href="home.html">HOME</a>
          <a href="cadastro.notícia.html">CADASTRO DE NOTÍCAS</a>
            <a href="cadastro_emp.html">CADASTRO DE EMPRESAS</a>
          <a href="tela_adm.php">USUÁRIOS</a>
         
        </div>
    </header>
    <br>
    <br>
    <h3>Bem vindo Administrador!</h3>
    <div class="tabela" style="display:center;">
    <?php
 
   
 $endereco = "localhost" ;
 $banco    = "apae" ;
 $usuario  = "root" ;
 $senha    = "Sofia2007" ;

 $conexao = new PDO( "mysql:host=$endereco;dbname=$banco" , $usuario  , $senha  ) ;

 $sql = "SELECT * FROM usuario" ;

 $stm = $conexao->prepare($sql) ;

 $resultado = $conexao->query("SELECT * FROM usuario");

 echo "<table border=2>";
 

 echo "<tr>";
       echo "<td>" ;
       echo "Nome ";
   echo "</td>" ;
   echo "<td>" ;
       echo "E-mail";
   echo "</td>" ;
   echo "<td>" ;
   echo "Telefone ";
echo "</td>" ;
echo "<td>" ;
echo "Endereço ";
echo "</td>" ;
echo "<td>" ;
echo "CPF ";
echo "</td>" ;
echo "<td>" ;
echo "Senha";
echo "</td>" ;
   echo "<td>" ;
       echo "DataNascimento";
   echo "</td>" ;
   echo "<td>" ;
   echo "Codigo";
   echo "</td>" ;
   echo "</tr>";
     //while( $linha=mysqli_fetch_assoc($res)){ //Associamos os valores da tabela sql com a variavel $linha
     while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
      
         echo "<tr>" ;
    
             echo "<td>" ;
                 echo $linha["nome"];//Aqui associamos que a varivel $linha com a coluna da tabela sql
             echo "</td>" ;
             echo "<td>" ;
                 echo $linha["telefone"];
             echo "</td>" ;
             echo "<td>" ;
                 echo $linha["data_de_nascimento"];
             echo "</td>" ;
             echo "<td>" ;
                 echo $linha["email"];
             echo "</td>" ;
             echo "<td>" ;
                 echo $linha["CPF"];
             echo "</td>" ;
             echo "<td>" ;
                 echo $linha["endereço"];
             echo "</td>" ;
             echo "<td>" ;
                 echo $linha["senha"];
             echo "</td>" ;
             echo "<td>" ;
             echo $linha["id"];
             echo "</td>" ;
    
             echo "<td>" ; //associamos o codigo com as funções Alterar e Excluir e apartir disso as de acordo com o codigo
                           //as demais informções serão alteradas ou excluidas --> veremos a seguir
                 echo "<a href='digita_alteracao2.php?codigo=".$linha["id"]."'>Alterar</a>";
             echo "</td>" ;
             echo "<td>" ;
                 echo "<a href='deletar2.php?codigo= ".$linha["id"]."'>Excluir</a>";
             echo "</td>" ;
         echo "</tr>" ;    
     }
 echo "</table>" ;
?>
</div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer>
      <div class="parte1" style="background-color:#2485d2;height: 75px;margin-bottom: 1px;">
        <div class="ggs" style="display: inline-block;">
        <img src="ico_fone.png" style="margin-top:25px;padding-left:30px;margin-left: 30px;"><p style="padding-left:50px;margin-top: -23px;font-size: 20px;color: white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight: bold;margin-left: 35px;">(11) 2442-6439 - parceria@apaeguarulhos.org.br</p></div>
        <div class="svhg">
          <p style="padding-left:50px;margin-top: -35px;font-size: 20px;color: white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight: bold;margin-left: 700px;">Nas redes sociais</p>
          <div class="social-media2">
            <a href="https://www.facebook.com/apae.guarulhos"><img src="https://www.freeiconspng.com/uploads/facebook-logo-png-white-facebook-logo-png-white-facebook-icon-png--32.png"></a>
            <a href="https://www.instagram.com/apae_guarulhos/"><img src="fotos\fb701f7e475d00d5038f9b904875ca40-removebg-preview.png"></a>
            <a href="https://www.youtube.com/channel/UC85eg0V9n5BaG_oLtFIt4pw"><img src="fotos\9f2635379ce6a7d457ea8bc545d336c8-removebg-preview.png"></a>
          </div>
        </div>
        </div>
      </div>
      </footer>
    </div>
     <footer>
      <div class="parte2" style="background-color:#2485d2;height: 75px;margin-bottom:0px;">
        <div class="lsh" style="display:inline-block;">
    <img src="logo_apae_rodape.png" style="margin-top:10px; margin-left:30px;padding-left: 50px;">
    <p style="padding-left:50px;margin-top: -35px;font-size: 13px;color: white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;;margin-left: 500px;">Copyright 2022. Todos os direitos reservados a Apae Guarulhos.</p>
      </div>
    </div>
     </footer>
    </body>
    </html>    