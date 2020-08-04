
<?php










require 'conexoes.php';

if (isset($_POST['nome'])&& empty($_POST['nome'])==false) {
    //pegando informações que usuario digitou no campo
    $nome= addslashes($_POST['nome']);
     $email= addslashes($_POST['email']);
      $senha= md5(addslashes($_POST['senha']));
    
      //CHAMAR O BANCO DE DADOS PARA INSERIR ESSAS INFORMAÇÕES
          //executar a inserção no banco
     $sql="insert into usuarios set nome='$nome', email='$email', senha='$senha'" ;
     $sql=$pdo->query($sql);
     
     
     //VOLTANDO PARA PAGINA PRINCIPAL
     
     header("Location: index.php");
 
} else {
    
    
    
      
    echo 'Erro ';
   
}
     
    



?>




    
     <head>
      
        
        <link rel="stylesheet" type="text/css" href="./CSS/arquivo_adicionar.css">
</head>

<form method="POST">
    
    Nome:</br>
    <input type="text" name="nome"/></br></br>
    
    Email: </br>
     <input type="text" name="email"/></br></br>
     
     Senha: </br>
     <input type="password" name="senha"/></br></br>
     
     
     
     <input type="submit" value="Cadastrar"/>
     
    
</form>
    
