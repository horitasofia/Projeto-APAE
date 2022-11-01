<?php
    $nome=$_REQUEST['nome'];
    $senha1=$_REQUEST['senha'];

    $endereço='localhost';
    $banco='apae';
    $usuario='root';
    $senha='Sofia2007';

    try {
        $conexao = new PDO( "mysql:host=$endereço;dbname=$banco" , $usuario  , $senha  );
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      } catch (PDOException $erroNaConexao) {
        echo $erroNaConexao->getMessage();
        echo "<br>"."Erro ao Conectar com o Banco de Dados";
      }
      
      function buscaUsuarioPorNome($nome){
              $select = $this->conexao->prepare("SELECT * FROM usuarios WHERE nome='$nome'");
              $select->setFetchMode(PDO::FETCH_ASSOC);
              $select->execute();
              $usuario = $select->fetch();
              return $usuario;
          }
        
          if($select){
            echo"usuario já cadastrado!";
          }
          else{
            echo "usuário não cadastrado";
          };


?>