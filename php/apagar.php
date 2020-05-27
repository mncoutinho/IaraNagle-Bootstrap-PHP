<?php require_once("../../admin/conexao.php");
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $table = $_POST['table'];
    $location = $_POST['location'];
    $query = 'DELETE FROM '.$table.' WHERE `id` = '.$id;
    $delete = mysqli_query($connect, $query);
}
if($delete){
    echo"<script language='javascript' type='text/javascript'>
    alert('Dados Deletados com Sucesso')
    window.location.href = '";
    echo $location;
    echo"''</script>";
}else{
    echo"<script language='javascript' type='text/javascript'>
    alert('Não foi possível apagar este dado! Tente Novamente.')
    window.location.href = '";
    echo $location;
    echo "''</script>";
    };

?>