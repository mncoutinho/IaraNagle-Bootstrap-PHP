<?php
    require_once('../../../admin/conexao.php');
    $nome     = trim($_POST['nome']);
    $email    = trim($_POST['email']);
    $telefone   = $_POST['telefone'];
    $query = "INSERT INTO `listaEmail` (`id`, `nome`, `email`, `telefone`) 
    VALUES (NULL, '$nome', '$email', '$telefone')";
    $insert = mysqli_query($connect,$query);
    if($insert){
        echo"<script language='javascript' type='text/javascript'>
        alert('Email Salvo com Sucesso');
        window.location.href='../../enviarEmail.php'</script>";
    }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível guardar este Email! Tente Novamente.');
        window.location.href='../../enviarEmail.php'</script>";
        };
	
?>