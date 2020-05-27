<?php
#PHP 7
        require_once('../../../admin/conexao.php');
        $sql='SELECT * FROM listaEmail';
        $select = mysqli_query($connect, $sql);
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        $from = "iaranagle@iaranagle49.com.br";
        $subject = $_POST['title'];
        $message = $_POST['mensagem'];
        $headers = "De:". $from;
        while ($lista = mysqli_fetch_array($select)){
            $to = $lista['email'];
            $sendEmail = mail($to, $subject, $message, $headers);
            }

if($sendEmail){
    echo"<script language='javascript' type='text/javascript'>
    alert('Email(s) enviado(s) com Sucesso');window.location.
    href='../../enviarEmail.php'</script>";
}else{
    echo"<script language='javascript' type='text/javascript'>
    alert('Não foi possível enviar este Email! Tente Novamente.');window.location
    .href='../../enviarEmail.php'</script>";
  };
?>