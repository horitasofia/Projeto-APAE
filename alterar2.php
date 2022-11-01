 
<?php
 
 $codigo =  $_REQUEST["txtCodigo"] ;
 $nome   =  $_REQUEST["txtNome"] ;
 $telefone  =  $_REQUEST["txtTelefone"] ;
 $nascimento  =  $_REQUEST["txtNasci"] ;
 $senha  =  $_REQUEST["txtsenha"] ;
 $email  =  $_REQUEST["txtEmail"] ;
 $CPF  =  $_REQUEST["txtCPF"] ;
 $endereco  =  $_REQUEST["txtEndereco"] ;


 $endereco = "localhost" ;
 $banco    = "apae" ;
 $usuario  = "root" ;
 $senha    = "Sofia2007" ;

 $conexao = new PDO( "mysql:host=$endereco;dbname=$banco" , $usuario  , $senha  ) ;

 $sql = "UPDATE usuario SET nome = :nome, telefone = :telefone, data_de_nascimento = :nascimento, email = :email, CPF = :CPF, endereço = :endereco, senha = :senha  WHERE id=:id" ;

 $stm = $conexao->prepare($sql) ;
 $stm->bindValue(':nome'  , $nome  ) ;
 $stm->bindValue(':telefone' , $telefone ) ;
 $stm->bindValue(':nascimento' , $nascimento ) ;
 $stm->bindValue(':codigo', $codigo  ) ;
 $stm->bindValue(':email', $email  ) ;
 $stm->bindValue(':CPF', $CPF  ) ;
 $stm->bindValue(':endereco', $endereco  ) ;

 if( $stm->execute() ) {
     echo "Dados alterados com sucesso!!!" ;
 } else {
     echo "Erro ao alterar!" ;
 }
 echo "<br><br>" ;
 echo "<a href='consultar2.php'>Voltar</a>";


 ?>
