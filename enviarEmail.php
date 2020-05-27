<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Enviar Email</title>
</head>
<body>
    <div class="container">
        <div>
            <h1 class="text-center">Sistema de Envio Automático de email</h1>
        </div>
        <div class="text-center">
            <h2 class="my-5">Adicione sua lista de emails</h1>
            <form class="text-center" action="./php/email/adicionaEmailDB.php" method="post">
                <div class="row justify-content-center">
                    <div class="col-1">
                        <label>Nome:</label>
                    </div>
                    <div class="col-4">
                        <input name="nome" type="text">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-1">
                        <label>Telefone:</label>
                    </div>
                    <div class="col-4">
                        <input name="tel" type="text">
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-1">
                        <label>Email:</label>
                    </div>
                    <div class="col-4">
                        <input name="email" type="text">
                    </div>
                </div>
                <div class="row text-center justify-content-center">
                    <input class="btn btn-primary" type="submit" value="Adicionar">
                </div>
            </form>
        </div>
        <div class="row justify-content-center my-5">
            <a class="btn btn-primary " data-toggle="collapse" href="#ListaDeEmail" role="button" aria-expanded="false" aria-controls="ListaDeEmail">
                Lista de email
            </a>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#MensagemDeEmail" aria-expanded="false" aria-controls="MensagemDeEmail">Conteúdo do Email</button>
        </div>
        <div class="collapse multi-collapse container" id="ListaDeEmail">
            <ul class="list-group">
                <li class="list-group=item">
                    <div class="row">
                        <div class="col-3">
                            <h2>Nome</h2>
                        </div>
                        <div class="col-3">
                            <h2>Email</h2>
                        </div>
                        <div class="col-3">
                            <h2>Telefone</h2>  
                        </div>
                    </div>
                </li>
    <?php 
        require_once('../admin/conexao.php');
        $sql='SELECT * FROM listaEmail';
        $select = mysqli_query($connect, $sql);
        while ($lista = mysqli_fetch_array($select)){
            echo "<li>
                    <form action='./php/apagarEmail.php' method='post'>
                        <input style='display:none' name='table' type='text' value='listaEmail'>
                        <input style='display:none' name='location' type='text' value='../enviarEmail.php'>
                        <input style='display:none' name='id' type='text' value=",$lista['id'],">";
            echo '      <div class="row">
                            <div class="col-3">
                                <h6>';
            echo $lista['nome'];
            echo '              </h6>
                            </div>
                            <div class="col-3">
                                <h6>';
            echo $lista['email'];
            echo '              </h6>
                            </div>
                            <div class="col-3">
                                <h6>';
            echo $lista['telefone'];
            echo '              </h6>  
                            </div>
                            <div class="col-3">
                                <input type="submit" value="Apagar">
                            </div>
                        </div>
                    </form>
                </li>';
        }       
    mysqli_close($connect);
    ?>
            </ul>
        </div>      
        <div class="collapse multi-collapse container justify-content-center" id="MensagemDeEmail">
            <h1 class="text-center"></h1>
            <form action="./php/email/testEmail.php" method="post">
                <div class="row">
                    <div class="col-2">
                        <label>Título:</label>
                    </div>
                    <div class="col-10">
                        <input class="form-control w-100" type="text" name="title">
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <label>Mensagem:</label>
                    </div>
                    <div class="col-10">
                        <textarea class="form-control w-100" rows="10" name="mensagem"></textarea>
                    </div>
                </div>
                    <input class="btn btn-primary" type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>
</html>