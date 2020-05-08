<?php
# PHP 7
require_once("../../admin/conexao.php");
$nome     = trim($_POST['nome']);
$cargo     = trim($_POST['cargo']);
$email    = trim($_POST['email']);
$telefone   = $_POST['telefone'];
$mensagem = trim($_POST['mensagem']);

if($nome === '') {
	echo '<div class="error_message">Atenção, Você Precisa digitar o seu Nome!</div>';
}
if($email === '') {
	echo '<div class="error_message">Atenção, Você Precisa digitar o seu endereço de Email!</div>';
}
if($telefone === '') {
	echo '<div class="error_message">Atenção, Você Precisa digitar o seu telefone</div>';
}
if($mensagem === '') {
	echo '<div class="error_message">Atenção, Você Precisa digitar a sua mensagem!</div>';
}

$query = "INSERT INTO `apoiadores` (`id`, `nome`, `email`, `mensagem`, `cargo`, `telefone`) 
VALUES (NULL, '$nome', '$email', '$mensagem','$cargo', '$telefone')";
$insert = mysqli_query($connect,$query);
if($insert){
	  echo"<script language='javascript' type='text/javascript'>
	  alert('Apoio Salvo com Sucesso');window.location.
	  href='../index.php'</script>";
}else{
	  echo"<script language='javascript' type='text/javascript'>
	  alert('Não foi possível guardar este apoio! Tente Novamente.');window.location
	  .href='../index.php'</script>";
	};
	
?>