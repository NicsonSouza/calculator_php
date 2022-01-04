<?php
$num1 = 0;
$num2 = 0;
$op = 'somar';

if (isset($_GET['num1'], $_GET['num2'], $_GET['operacao'])) {

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $op = $_GET['operacao'];
    $resultado;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculadora</title>
</head>

<body>

    <div class="container">
        <form action="">
            <h1>Calculadora V1.0</h1>
            <label for="">Primeiro número:</label>
            <input type="number" name="num1" value=<?= $num1 ?> require> <br>
            <select name="operacao" id="" require>
                <option value="somar" <?= ($op == 'somar') ? 'Selected' : '' ?>>Somar</option>
                <option value="subtrair" <?= ($op == 'subtrair') ? 'Selected' : '' ?>>Subtrair</option>
                <option value="multiplicar" <?= ($op == 'multiplicar') ? 'Selected' : '' ?>>Multiplicar</option>
                <option value="dividir" <?= ($op == 'dividir') ? 'Selected' : '' ?>>Dividir</option>
                <option value="resto" <?= ($op == 'resto') ? 'Selected' : '' ?>>Resto</option>
            </select><br>
            <label for="">Segundo número:</label>
            <input type="number" name="num2" value=<?= $num2 ?> require> <br>
            <button type="submit">Calcular</button>
        </form>
    </div>

    <div class="result">
        <?php
        switch ($op) {

            case 'somar':
                $resultado = $num1 + $num2;
                echo "Resultado = {$resultado}";
                break;

            case 'subtrair':
                $resultado = $num1 - $num2;
                echo 'Resultado = ' . $resultado;
                break;

            case 'multiplicar':
                $resultado = $num1 * $num2;
                echo 'Resultado = ' . $resultado;
                break;

            case 'dividir':
                $resultado = $num1 / $num2;
                if ($num1 == 0) {
                    echo 'Preencha o campo "Primeiro número" diferente de 0';
                } else {
                    echo 'Resultado = ' . $resultado;
                };
                break;

            case 'resto':
                $resultado = $num1 % $num2;
                if ($num1 == 0) {
                    echo 'Preencha o campo "Primeiro número" diferente de 0';
                } else {
                    echo 'Resultado = ' . $resultado;
                };
                break;
        }

        if ($num1 == 0 && $num2 == 0) {
            echo '<br><br>Os dados não foram preenchidos';
        } else {
            echo '<br><br>Dados recebidos';
        };
        ?>
    </div>

</body>

</html>