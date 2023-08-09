<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alterar</title>
    <link rel="stylesheet" href="altaluno.css">
</head>

<body>

    <?php
    require_once('conexao.php');

    $id = $_POST['id'];

    ##sql para selecionar apens um aluno
    $sql = "SELECT * FROM aluno where id= :id";

    # junta o sql a conexao do banco
    $retorno = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $retorno->bindParam(':id', $id, PDO::PARAM_INT);

    #executa a estrutura no banco
    $retorno->execute();

    #transforma o retorno em array
    $array_retorno = $retorno->fetch();

    ##armazena retorno em variaveis
    $nome = $array_retorno['nomealuno'];
    $idade = $array_retorno['idade'];
    $nascimento = $array_retorno['nascimento'];
    $ende = $array_retorno['ende'];
    $matri = $array_retorno['matri'];


    ?>
        <H1>Altere as informações de cadastro</H1>

    <form method="POST" action="crudaluno.php" >

             <div class="input-group">
                <div class="input-box">
                     <label for="">nome:</label>
                    <input type="text" name="nomealuno" id="" value=<?php echo $nome ?>>
                </div>

                <br>
                
                <div class="input-box">
                    <label for="">idade:</label>
                    <input type="number" name="idade" id="" value=<?php echo $idade ?>>
                </div>

                <br>
                
                <div class="input-box">
                    <label for="">id:</label>
                   <input type="number" name="id" id="" value=<?php echo $id ?>>
                </div>

                <br>
                <div class="input-box">
                     <label for="">data nascimento:</label>
                     <input type="date" name="nascimento" id="" value=<?php echo $nascimento ?>>
                </div>

                <br>
                 
                <div class="input-box">
                    <label for="">endereco:</label>
                     <input type="text" name="ende" id="" value=<?php echo $ende ?>>
                </div>
                
                <br>
                
                <div class="input-box">
                    <label for="">matricula:</label>
                    <input type="text" name="matri" id="" value=<?php echo $matri ?>>
                </div>
                    
                <br>
                
                <div class="ambos">
                    <input type="submit" name="update" value="Alterar">

                   
                    <button class="button"><a href="listaalunos.php">voltar</a></button>
                    
                </div>
                
            </div>
    
    </form>
</body>
</html>
