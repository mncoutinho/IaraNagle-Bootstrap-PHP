<?php require_once("../../admin/conexao.php");
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $query = 'DELETE FROM `apoiadores` WHERE `id` = '.$id;
    $delete = mysqli_query($connect, $query);
    header("Location: https://iaranagle49.com.br/php/apoiadores.php");
    exit();
}

?>