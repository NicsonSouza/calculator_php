<?php
require 'objeto.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Calculadora</title>
</head>

<body>

    <div class="container text-center">
        <form action="" method="POST">
            <h1>Calculadora V1.0</h1>
            <label class="form-label" for="">Primeiro número:</label>
            <input class="form-control" type="number" name="num1" value=<?= $calc->num1 ?> require> <br>
            <select class="form-select" name="operacao" id="" require>
                <option value="somar" <?= ($calc->op == 'somar') ? 'Selected' : ''; ?>>Somar</option>
                <option value="subtrair" <?= ($calc->op == 'subtrair') ? 'Selected' : ''; ?>>Subtrair</option>
                <option value="multiplicar" <?= ($calc->op == 'multiplicar') ? 'Selected' : ''; ?>>Multiplicar</option>
                <option value="dividir" <?= ($calc->op == 'dividir') ? 'Selected' : ''; ?>>Dividir</option>
                <option value="resto" <?= ($calc->op == 'resto') ? 'Selected' : ''; ?>>Resto</option>
            </select><br>
            <label class="form-label" for="">Segundo número:</label>
            <input class="form-control" type="number" name="num2" value=<?= $calc->num2 ?> require> <br>
            <button class="btn btn-primary" type="submit">Calcular</button>
        </form>
    </div>

    <div class="text-center">
        <?php
        $calc->Calcula();
        ?>
    </div>

</body>

</html>