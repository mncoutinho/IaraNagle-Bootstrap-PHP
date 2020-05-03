<?php
# PHP 7
$usuario = "iaranagle";
require_once("../../admin/senha.php");
$senha = md5($valor);
$senhadigitada = md5($_POST['senha']);
$usuariodigitado = $_POST['usuario'];


if($usuario == $usuariodigitado) {
    if($senha == $senhadigitada) {
        echo "<a href='./apoiadores.php'>Apoios Recebidos</a>
        <br>
        <a href='./lerContador.php'>Contador de Acesso</a>";
    }
    else {
        echo "<a href='../admin.html'>Acesso Negado</a>";
    }
}
else {
    echo "<a href='../admin.html'>Acesso Negado</a>";
}
?>