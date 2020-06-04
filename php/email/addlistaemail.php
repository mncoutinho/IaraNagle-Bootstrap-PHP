<?php
#PHP7
require_once('../../../admin/conexao.php');
$lista = fopen("./listaEmail.txt", "r");
while(!feof($lista)){
    $linha = fgets($lista, 1024);
    $query = "INSERT INTO `listaEmail` (`id`, `email`) VALUES (NULL, '$linha')";
    $insert = mysqli_query($connect,$query);
    echo $linha."<br/>";
}
fclose($lista);
?>