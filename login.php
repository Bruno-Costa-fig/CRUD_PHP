<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Acesso</title>
</head>

<body style="background: #f2f2f2;">
  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <div class="card">
          <div class="card-body">
            <form action="login-action.php" method="POST">
              <div class="mb-3">
                <label for="nome">Usuário:</label>
                <input type="email" name="usuario" class="form-control" />
              </div>
              <div class="mb-3">
                <label for="nome">Senha:</label>
                <input type="password" name="senha" class="form-control" />
              </div>
              <div class="mb-3">
                <button class="btn btn-success">Entrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>