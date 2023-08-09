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
        <form method="GET" action="crudaprof.php">
            <div class="form-header">
                <div class="title">
                    <h1>cadastre-se</h1>
                </div>
                <div class="continue-button">
                    <button class="button"><input type="submit" name="cadastrar" value="cadastrar"> </button>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <label for="">Nome professor:</label>
                    <input id="firstname" type="text" name="nomeprof" placeholder="Digite seu nome" requerid>
                </div>

                <div class="input-box">
                    <label for="">cpf</label>
                    <input id="cpf" type="number" name="cpf" placeholder="Digite seu cpf" requerid>
                </div>

                <div class="input-box">
                    <label for="">siape</label>
                    <input type="text" name=" siape" placeholder="Digite seu siape" requerid>
                </div>

                <div class="input-box">
                    <label for="">idade</label>
                    <input id="ida" type="number" name="idade" placeholder="Digite sua idade" requerid>
                </div>

                
            </div>
           
        </form>
        
            <div class="continue-button">
                <button class="button"><a href="proindex.php">voltar</a></button>
            </div>
    </div>
 
</body>
</html>