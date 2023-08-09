<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
    <div class="form">
        <form method="GET" action="crudadisciplina.php">
            <div class="form-header">
                <div class="title">
                    <h1>Cadastre as disciplinas</h1>
                </div>
                <div class="continue-button">
                    <button class="button"><input type="submit" name="cadastrar" value="cadastrar"> </button>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <label for="">Disciplina:</label>
                    <input id="dis" type="text" name="disciplina" placeholder="Digite a disciplina" requerid>
                </div>

                <div class="input-box">
                    <label for="">Ch:</label>
                    <input id="ch" type="text" name="ch" placeholder="Digite seu ch" requerid>
                </div>

                <div class="input-box">
                    <label for="">Semestre:</label>
                    <input type="text" name=" semestre" placeholder="Digite o semestre" requerid>
                </div>

                <div class="input-box">
                    <label for="">Id professor:</label>
                    <input id="ida" type="number" name="idprofessor" placeholder="Digite seu id" requerid>
                </div>

                
            </div>
           
        </form>
        
            <div class="continue-button">
                <button class="button"><a href="discindex.php">voltar</a></button>
            </div>
    </div>
 
</body>
</html>