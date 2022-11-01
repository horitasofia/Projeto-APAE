<?php
 
$codigo = $_REQUEST["codigo"];    
 
$endereco = "localhost" ;
$banco    = "apae" ;
$usuario  = "root" ;
$senha    = "Sofia2007" ;
 
$conexao = new PDO( "mysql:host=$endereco;dbname=$banco" , $usuario  , $senha  ) ;
 
$sql = "SELECT * FROM usuario WHERE id= :id" ;
 
$stm = $conexao->prepare($sql) ;
$stm->bindValue(':codigo', $codigo  ) ; //Aqui definimos o nossos valor Codigos como parametro para alterar as demais informações
 
 
$stm->execute();
//Associamos a variavel $stm a varavel $linha, pois a partir dai de acordo com o codigo da linha conseguiremos fazer a alteração
if ($linha = $stm->fetch(PDO::FETCH_ASSOC)) {
    $vcodigo = $linha["id"];
    $vnome   = $linha["nome"];
    $vidade  = $linha["telefone"];
    $vnascimento  = $linha["data_de_nascimento"];
    $vsenha = $linha["senha"];
    $vendereço = $linha["endereço"];
    $vCPF = $linha ["CPF"];
    $vemail = $linha ["email"];
}
else{
    echo "ERRO" ;
}
?>
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
          <a href="lista_usuário.html">USUÁRIOS</a>
        </div>
    </header>
    <div class="fundo" style="margin-left:500px;background-color: #CEC8C6;width:300px;">
<form name="form1" method="post" action="alterar2.php">
    <fieldset>
       
        Código: <br> <!--Readonly permite que o valor do codigo não seja alterado e apareça somente para leitura,
                         pois como o Codigo é nossa chave-primaria ele não deve ser alterado-->
        <input type="text" name="txtCodigo" readonly value="<?php echo $vcodigo; ?>"> <br>
 
        Nome: <br>
        <input type="text" name="txtNome"  value="<?php echo $vnome; ?>"> <br>
 
        Tel: <br>
        <input type="text" name="txtTelefone"  value="<?php echo $vidade; ?>"> <br>
       
        Nascimento: <br>
        <input type="date"name="txtNasci"  value="<?php echo $vnascimento; ?>"> <br><br>
        
        E-mail<br>
        <input type="text" name="txtEmail"  value="<?php echo $vemail; ?>"> <br>
         
        Endereço<br>
        <input type="text" name="txtEndereco"  value="<?php echo $vendereço; ?>"> <br>
         
         CPF<br>
        <input type="text" name="txtCPF"  value="<?php echo $vCPF; ?>"> <br>
         
        Senha<br>
        <input type="password" name="txtsenha"  value="<?php echo $vsenha; ?>"> <br>
       
        <input type="submit" value="Alterar Dados"> <br>
    </fieldset>
</form>
</div>
