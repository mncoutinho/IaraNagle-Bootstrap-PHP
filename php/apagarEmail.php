<?php require_once("../../admin/conexao.php");
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $table = $_POST['table'];
    $location = $_POST['location'];
    $query = 'DELETE FROM '.$table.' WHERE `id` = '.$id;
    $delete = mysqli_query($connect, $query);
}
header("Location: https://iaranagle49.com.br/enviarEmail.php");
    exit();

?>