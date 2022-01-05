<?php
class Calculadora
{
    public $num1;
    public $num2;
    public $op;
    public $resultado;

    function Set()
    {

        if (isset($_POST['num1'], $_POST['num2'], $_POST['operacao'])) {

            $this->num1 = $_POST['num1'];
            $this->num2 = $_POST['num2'];
            $this->op = $_POST['operacao'];
        }
    }

    function Calcula(){
        switch ($this->op) {

            case 'somar':
                $this->resultado = $this->num1 + $this->num2;
                echo '<br>Resultado = '.$this->resultado;
                break;

            case 'subtrair':
                $this->resultado = $this->num1 - $this->num2;
                echo '<br>Resultado = ' . $this->resultado;
                break;

            case 'multiplicar':
                $this->resultado = $this->num1 * $this->num2;
                echo '<br>Resultado = ' . $this->resultado;
                break;

            case 'dividir':
                $this->resultado = $this->num1 / $this->num2;
                if ($this->num1 == 0) {
                    echo '<br>Preencha o campo "Primeiro número" diferente de 0';
                } else {
                    echo '<br>Resultado = ' . $this->resultado;
                };
                break;

            case 'resto':
                $this->resultado = $this->num1 % $this->num2;
                if ($this->num1 == 0) {
                    echo '<br>Preencha o campo "Primeiro número" diferente de 0';
                } else {
                    echo '<br>Resultado = ' . $this->resultado;
                };
                break;
        }

        if ($this->num1 == 0 && $this->num2 == 0) {
            echo '<br><br>Os dados não foram preenchidos';
        } else {
            echo '<br><br>Dados recebidos';
        };
    }
}
