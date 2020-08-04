<?php
     
//RECEBENDO DADOS QUE USUARIO DIGITOU

//abrindo uma sessão

session_start();

//verificando se usuario enviou algum dado(  ISSET(significa setou algum dado))

if (isset($_POST['email'])&&empty($_POST['email'])==false) {
    $email= addslashes($_POST['email']);
    $senha= md5(addslashes($_POST['senha']));
    
    
    
    //CRIANDO CONEXÃO COM BANCO 
$dsn="mysql:dbname=blog;host=localhost";
$user="root";
$password="";

    
   
    try {
        
        $db=new PDO($dsn, $user,$password);
   
        
          // verificando se esses dados estão no banco de dado
  
 $sql="SELECT *FROM user_sistema WHERE email='$email' AND senha='$senha' ";
     $sql=$db->query($sql);
   
   // vericando se os dados que usuario digitou está cadastrado no banco
   if ($sql->rowCount() >0) {
       

       //pegando primeiro resultado usando O FETCh
       $dado=$sql->fetch();
       
      
       
        //SALVAR ESSES DADOS NA MINHA SESSÃO 
       
     $_SESSION['id']=$dado['id'];
     
     // redirecionando para pagina principal
         header("Location: index.php");
       
   } else {
       'Usuaario não está cadastrado';
   }
        
        
        
    } catch (PDOException $error) {
        echo 'Usuario Não cadastrado'.$error->getMessage();
    }

    
    
    
    
    
    
} else {
    echo ' ERRO Usuario Não Cadastrado';    
}


    





?>





<H2>Pagina de Login</H2>

<body>

 <head>
        <meta charset="utf-8"/>
        
        <link rel="stylesheet" type="text/css" href="./CSS/arquivo_login.css">
</head>
    
<form method="POST">
    
    Email:</br>
  
    
    <input type="email" name="email"/></br></br>
    
    Senha: </br>
    <input type="password" name="senha" /></br></br>
     
     
     
     
     
     <input type="submit" value="Enviar"/>
     
    
</form>
</body>