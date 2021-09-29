
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Versionamento e segurança</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Formulário de Cadastro</h2>
  <form action="cadastro.php" method="POST" id="fcadastro">
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type=text class="form-control"  name="nome">
  </div>
  <div class="form-group">
  <label for="email">E-mail:</label>
  <input type=text class="form-control" name="email">
  </div>
  <div class="form-group">
     <label for="pwd">Senha:</label>
     <input type="password"class="form-control" name="senha">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>

</body>
</html>