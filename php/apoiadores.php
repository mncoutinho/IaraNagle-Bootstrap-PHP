<?php
#PHP 7 
    $query = 'SELECT * FROM `apoiadores`';
        require_once("../../admin/conexao.php");
    $select = mysqli_query($connect, $query);
            echo "Relatório de Apoiadores";
            while ($lista = mysqli_fetch_array($select)){
                echo "<p>Nome:",$lista['nome'],"</p>";
                echo "<p>Telefone:",$lista['telefone'],"</p>";
                echo "<p>Email:",$lista['email'],"</p>";
                echo "<p>Cargo/Profissão:",$lista['cargo'],"</p>";
                echo "<p>Mensagem:",$lista['mensagem'],"</p><hr>";
            }       
        mysqli_close($connect);
?>