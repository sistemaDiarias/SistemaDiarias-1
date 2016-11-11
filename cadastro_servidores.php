<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Cadastro de servidores</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container text-center">
    <h1>Cadastro de servidores</h1>
    
    <div class="row">
        <div class="col-sm-1">
            
        </div>
        
        <div class="col-sm-10">
            
            <form class="form-horizontal" action="index.php" method="get">
                <div class="form-group">
                    <label class="control-label col-sm-2">Nome</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="nome" type="text" name="nome" placeholder="Digite seu nome completo">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2">CPF</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="cpf" type="number" name="cpf" placeholder="Digite seu CPF" >
                    </div>

                    <label class="control-label col-sm-2">RG</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="rg" type="number" name="rg" placeholder="Digite seu RG" >
                    </div> 
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2">Nascimento</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="nascimento" type="date" name="nascimento">
                    </div>      
                    
                    <label class="control-label col-sm-2">Sexo</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="sexo">
                            <option>Masculino</option>
                            <option>Feminino</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group ">
                    <label class="col-sm-2">Email</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="email" type="email" name="email" placeholder="exemplo@gmail.com">
                    </div>
                    
                    <label class="col-sm-2">Senha</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="senha" type="password" name="senha" placeholder="Escolha sua senha">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
            
        </div>
        
        <div class="col-sm-1">
            
        </div>
    </div>
    
</div>

</body>
</html>