<?php
#PHP 7
require_once('../../../admin/senha.php');
$senha = md5($valor);
$senhadigitada = md5($_POST['senha']);
if($senha == $senhadigitada) {
  set_time_limit(0);
  ignore_user_abort( true );
  require_once('../../../admin/conexao.php');
  date_default_timezone_set('America/Sao_Paulo');
  $script_tz = date_default_timezone_get();
  $sql="SELECT * FROM listaEmail";
  $select = mysqli_query($connect, $sql);
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  $from = "iaranagle@iaranagle49.com.br";
  $subject = $_POST['title'];
  $message = $_POST['mensagem'];
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= "From:". $from;
  $conclusao = "Emails enviados para:";
  while ($lista = mysqli_fetch_array($select)){
    $today = getdate();
    $to = $lista['email'];
    $sendEmail = mail($to, $subject, $message, $headers);
    $conclusao .= $to;
    $conclusao .= ', ';
    if($today['weekday'] == 'Saturday' || $today['weekday'] == 'Sunday' || ($today['hours'] <= 1 && $today['hours'] > 8)){
      sleep(4);
    } else{
    sleep(8);
    }
  }

  if($sendEmail){
      echo $conclusao;
  }else{
      echo"<script language='javascript' type='text/javascript'>
      alert('Não foi possível enviar este Email! Tente Novamente.');window.location
      .href='../../enviarEmail.php'</script>";
  };
}else{
  echo"<script language='javascript' type='text/javascript'>
  alert('Você não tem autorização para enviar este Email!');
  window.location
  .href='../../enviarEmail.php'</script>";
};
?>