
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/biblioteca.css">
    <title></title>
</head>

<body>

    
<section class="container-fluid">
    
    <br>
	<div class="container">
	<br><br><br><br>
	<form action="gravarcliente.php" method="POST" id="fcadastro">
	<div class="container">
	<div class="form-group">
	<h1>Cadastro de Cliente</h1>
	<div class="form-group">
	<label for="nome">
	Nome:</label><br>
	<input type=text class="form-control"  name="nome"><br>
	</div>
	<div class="form-group">
	<label for="email">
	E-mail:
	</label><br>
	<input type=text class="form-control"name="email"><br>
	</div>
	<div class="form-group">
	<label for="pwd">Senha:</label><br>
	<input type="password"class="form-control" name="senha"><br>
	</div>
	<input class="btn-danger"type="reset" value="Limpar">
	<input class="btn-success"type="submit" value="Enviar">
	</div>
	</form>
</div>
</div>
