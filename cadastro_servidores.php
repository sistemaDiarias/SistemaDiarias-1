<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro de servidores</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container text-center">
    <h1>Cadastro de servidores</h1>
    
    <div class="row">
        <div class="col-sm-2">
            
        </div>
        
        <div class="col-sm-8">
            
            <form action="index.php" method="get">
                <div class="form-group">
                    <input class="form-control" id="nome" type="text" name="nome" placeholder="Digite seu nome completo">
                    <input class="form-control" id="email" type="email" name="email" placeholder="Seu email: exemplo@gmail.com">
                    <div class="col-sm-6">
                        <input class="form-control" id="data" type="date" name="data">
                    </div>
                    <div class="col-sm-6">
                        <select class="form-control ">
                            <option>Escolha o sexo</option>
                            <option>Masculino</option>
                            <option>Feminino</option>
                        </select>
                    </div>
                </div>
        
                <button type="submit" class="btn btn-primary">Ola</button>
            </form>
            
        </div>
        
        <div class="col-sm-2">
            
        </div>
    </div>
    
</div>

</body>
</html>