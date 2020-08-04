
<pre> 
<?php

//print_r($_FILES);


if (isset($_FILES['arquivo']) &&empty($_FILES['arquivo'])==false) {
    //contando arquivos existentes
    //vai tranformar em array de arquivos
    if (count($_FILES['arquivo']['tmp_name'])>0) {
        for ($q = 0; $q < count($_FILES['arquivo']['tmp_name']); $q++) {
            
            //criando valor aleatorio para arquivo salvo
            
            $nome_arquivo= md5($_FILES['arquivo']['tmp_name'][$q].time().rand(0, 999)).'jpg';
            
            
            //salva no ARRAY de arquivos  [$q]
            move_uploaded_file($_FILES['arquivo']['tmp_name'][$q],'C:\xampp\htdocs\SistemaBd\multi-_arquivos'.$nome_arquivo);
        }
        
    }
    
    
}






?>
</pre>