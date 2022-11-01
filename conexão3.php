<?php
                    $nome   =  $_REQUEST["nome"] ;
                    $telefone  =  $_REQUEST["telefone"];
                    $nascimento =  $_REQUEST['datadenascimento'];
                    $email=$_REQUEST['email'];
                    $senha1=$_REQUEST ['senha'];
                    $endereço=$_REQUEST ['endereço'];
                    $CPF=$_REQUEST ['CPF'];
                    


                    $endereco = "localhost";
                    $banco    = "apae";
                    $usuario  = "root";
                    $senha    = "Sofia2007";
                    /*Aqui ja iniciamos então a nossa conexào com o banco de dados utilizando PDO e nosso segundo conjunto de variaveis */
                    $conexao = new PDO( "mysql:host=$endereco;dbname=$banco" , $usuario  , $senha  );
                    /*Aqui utilizamos uma variavel que o valor dela sera o comendo INSERT bem conhecido na linguagem SQL*/
                    $sql = "INSERT INTO nova (nome,email,senha,CPF,data_de_nascimento,endereço,telefone) values (:nome ,:email, :senha, :CPF, :data_de_nascimento, :endereço, :telefone )" ;
                    /*Aqui preparamos a conexão para receber os valores vindos do formulario*/
                    $stm = $conexao->prepare($sql) ;
 
                    $stm->bindValue(':nome'  , $nome  ) ;  /*Aqui associamos o valor do nosso primeiro conjunto*/
                    $stm->bindValue(':telefone' , $telefone ) ;  /*de variaveis ao valores que irão entrar nos VALUES*/
                    $stm->bindValue(':data_de_nascimento' , $nascimento ) ;
                    $stm->bindValue(':email' , $email) ;
                    $stm->bindValue(':senha' , $senha1) ;
                    $stm->bindValue(':endereço' , $endereço) ;
                    $stm->bindValue(':CPF' , $CPF) ;

 
                    $resultado = $stm->execute() ;
                    /*Dentro do If - Else temos apenas uma função que irá retornar caso a gravação dos valores no banco seja bem sucedidade ou não*/
                    if( $resultado ) {
                        echo "Dados cadastados com sucesso!!!" ;
                    } else {
                        echo "Erro ao gravar!" ;}
                   
                    echo "<br><br>" ;
                    echo "<a href='index.php'>Voltar</a>"
                ?>

