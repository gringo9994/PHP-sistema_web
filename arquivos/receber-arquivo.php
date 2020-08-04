<?php
// recebendo arquivos 

$arquivo=$_FILES['arquivo'];


// SALVAR ESSE ARQUIVO DA PASTA TEMPORARIA



//print_r($arquivo);
//testando se arquivo está setado 
if (isset($arquivo['tmp_name']) && empty($arquivo['tmp_name'])==false) {
    // SALVAR ESSE ARQUIVO EM UMA PASTA ESPECIFICA
    move_uploaded_file($arquivo['tmp_name'],'C:\xampp\htdocs\SistemaBd\arquivos'.$arquivo['name']);
    echo 'Arquivo Enviado com Sucesso';
    
}




?>