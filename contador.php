<?php
$today = getdate();
$contador = "./contador/".$today[year]."-".$today[mon]."-".$today[mday].".txt";
define("adi", 1);
$id = fopen($contador, "a+");
$conteudo = fread($id,filesize($contador));
fclose($id);
clearstatcache();
$conteudo += adi;
$id = fopen($contador, "r+");
fwrite($id, $conteudo, strlen($conteudo) + 5);
fclose($id);
clearstatcache();
?>