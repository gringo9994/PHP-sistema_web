
<a href="adicionar.php"> Adicionar Novo Usuario</a>
 

<html>
    
    <head>
        <meta charset="utf-8"/>
        
        <link rel="stylesheet" type="text/css" href="./CSS/arquivo_index.css">
</head>
    
<body >
    
<table >
    <div class="container">
    <tr>
        <th> Nome</th>       
        <th> Email</th>
        <th> Ações</th>       
        
        
        
        
    </tr>
    </div>
    </body>
    
</html>
    <?php
    
    //INICIANDO A SESSÃO DA PÁGINA
    session_start();

if (isset($_SESSION['id']) &&empty($_SESSION['id'])==false) {
    
    echo ' Area restrita';
    
} else {
    header("Location:login.php");    
}
    
    //FINALIZANDO A AREA DE SESSAO
    
    
    
    
    
    
    
    //chamando A Conexão
    include 'conexoes.php';
     $sql="SELECT *FROM usuarios";
     $sql=$pdo->query($sql);
     
     //buscando usuarios da tabela do banco
     
     if ($sql->rowCount()>0) {
         //conta se há linhas no banco
        // echo 'Tem linhas no Banco';
         //EXIBINDO DADOS DO BANCO USANDO O FORECH E A FUNÇÃO FETCHALL
         
         foreach ($sql->fetchAll()as $usuarios) {
             
             echo '<tr>';
             
             
             echo '<td>'.$usuarios['nome'].'</td>';
             echo '<td>'.$usuarios['email'].'</td>';
            echo '<td><a href="editar.php?id='.$usuarios['id'].'">Editar</a> -<a href="excluir.php?id='.$usuarios['id'].'">Excluir</a>  </td>';
          
             echo '</tr>';
             
             
         }
         
         
         
         
         
     }else{
         
         
     }
     
    
    
    
    
    ?>
    
    
 
</table>