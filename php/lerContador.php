<?php
#PHP 7
$path = "../contador";
$files = array_slice(scandir($path), 2);
$total = 0;
foreach($files as $file){
    $arquivo = $path."/".$file;
    $acessos = file_get_contents($arquivo);
    $total += $acessos;
    echo "<p>".$file." - Acessos:".$acessos."</p>";
}
echo "<p> Total de Acessos:".$total;
?>