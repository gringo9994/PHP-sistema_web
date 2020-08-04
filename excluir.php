<?php
require 'conexoes.php';

// pegando por id do usuario ,usando GET
if (isset($_GET['id'])&&empty($_GET['id'])==false) {
    
    $id= addslashes($_GET['id']);
    //pegando o ID do usuario
    
    //CHAMANDO SQL
    
    $sql="delete from usuarios where id='$id'";
    $sql= $pdo->query($sql);
      header("Location: index.php");
    
    
} else {
    echo 'Erro Ao excluir Dados';
    //voltando para pagina principal
    header("Location :index.php");
}




?>
