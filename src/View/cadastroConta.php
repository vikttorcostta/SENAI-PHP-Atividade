<?php

  

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Conta</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container">
        <h2>Criar Conta</h2>
            <form action="./model/interface.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Agência</label>
                    <input class="form-control" type="number" name="agencia">
                </div>
                <div>
                    <label for="" class="form-label">Código</label>
                    <input class="form-control" type="number" name="cod">
                </div>
                <div>
                    <label for="" class="form-label">Data criação</label>
                    <input class="form-control" type="date" name="dataDeCriacao">
                </div>
                <div>
                    <label for="" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="senha">
                </div>
                <div>
                    <label for="" class="form-label">Saldo</label>
                    <input type="number" class="form-control" name="saldo">
                </div>
                <div>
                    <label for="" class="form-label">Cancelada</label>
                    <input class="form-control" type="checkbox" name="cancelada">
                </div>

                <button type="submit"></button>

            </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>