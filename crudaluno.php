<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cruda</title>
    <link rel="stylesheet" href="crualuno.css">
</head>
<body>
    
</body>
</html>
<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('conexao.php');



##cadastrar
if (isset($_GET['cadastrar'])) {
    ##dados recebidos pelo metodo GET
    $nome = $_GET["nomealuno"];
    $idade = $_GET["idade"];
    $nascimento = $_GET["nascimento"];
    $ende = $_GET["ende"];
    $matri = $_GET["matri"];
    


    ##codigo SQL
    $sql = "INSERT INTO aluno(nomealuno,idade,nascimento,ende,matri) 
                VALUES('$nome','$idade','$nascimento','$ende','$matri')";

    ##junta o codigo sql a conexao do banco
    $sqlcombanco = $conexao->prepare($sql);

    ##executa o sql no banco de dados
    if ($sqlcombanco->execute()) {
        echo " <strong>OK!</strong> o aluno
                $nome foi Incluido com sucesso!!!";
        echo " <button class='button'><a href='index.php'>voltar</a></button>";
    }
}
#######alterar
if (isset($_POST['update'])) {

    ##dados recebidos pelo metodo POST
    $nome = $_GET["nomealuno"];
    $idade = $_GET["idade"];
    $nascimento = $_GET["nascimento"];
    $ende = $_GET["ende"];
    $matri = $_GET["matri"];
    $id = $_POST["id"];


    ##codigo sql
    $sql = "UPDATE  professor SET nomealuno= :nomealuno, idade= :idade, nascimento= :nascimento, ende= :ende, matri= :matri WHERE id= :id ";

    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':nomealuno', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade', $idade, PDO::PARAM_INT);
    $stmt->bindParam(':nascimento', $cpf, PDO::PARAM_STR);
    $stmt->bindParam(':ende', $ende, PDO::PARAM_STR);
    $stmt->bindParam(':matri', $matri, PDO::PARAM_STR);
   


    $stmt->execute();



    if ($stmt->execute()) {
        echo " <strong>OK!</strong> o aluno
             $id foi Alterado com sucesso!!!";

        echo " <button class='button'><a href='proindex.php'>voltar</a></button>";
    }
}


##Excluir
if (isset($_GET['excluir'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `professor` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if ($stmt->execute()) {
        echo " <strong>OK!</strong> o aluno
             $id foi excluido!!!";

        echo " <button class='button'><a href='listaalunos.php'>voltar</a></button>";
    }
}
