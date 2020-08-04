<?php


require 'conexoes.php';
$id=0;
// pegando por id do usuario ,usando GET
if (isset($_GET['id'])&&empty($_GET['id'])==false) {
    
    $id= addslashes($_GET['id']);
}


// ATUALIZANDO OS DADOS  
if (isset($_POST['nome'])&&empty($_POST['nome'])==false) {
    $nome= addslashes($_POST['nome']);
    $email= addslashes($_POST['email']);
    $sql="update usuarios set nome='$nome', email='$email' where id='$id'";
    $sql=$pdo->query($sql);
    
      header("Location: index.php");
    
}  
      
    $sql="select *from usuarios where id='$id'";
    $sql=$pdo->query($sql);
    //pegando um dado do banco pelo id para editar
    if ($sql->rowCount()>0) {
        // pegando informação apenas de um id fetch(busca apenas de uma linha)
        $dado=$sql->fetch();
        
    } else {
              header("Location: index.php");
        
    }
    
    
    
   // pegando os dados do banco para poder editar as informações
    //pegando o ID do usuario
    
    //CHAMANDO SQL



    


?>

<html>
    
    <head>
        <meta charset="utf-8"/>
        
        <link rel="stylesheet" type="text/css" href="./CSS/arquivo_editar.css">
</head>
<body>

<form method="POST">
    
    Nome:</br>
  
    
    <input type="text" name="nome" value=" <?php echo $dado['nome']; ?>"/></br></br>
    
    Email: </br>
    <input type="text" name="email" value="<?php echo $dado['email']; ?>"/></br></br>
     
     
     
     
     
     <input type="submit" value="Atualizar"/>
     
    
</form>
    
    
    
    
    </body>
    </html>