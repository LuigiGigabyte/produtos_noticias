<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="usuario_cad.php">
                        <div class="mb-3">
                            <input type="text" placeholder="Nome" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" placeholder="Email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" placeholder="Senha" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    Já tem uma conta? <a href="login.php">Faça login</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
