<?php
class Calculadora
{
    public $num1;
    public $num2;
    public $op;
    public $resultado;

    function Calcular()
    {

        if (isset($_POST['num1'], $_POST['num2'], $_POST['operacao'])) {

            $this->num1 = $_POST['num1'];
            $this->num2 = $_POST['num2'];
            $this->op = $_POST['operacao'];
            
            switch ($this->op) {
    
                case 'somar':
                    $this->resultado = $this->num1 + $this->num2;
                    break;
        
                case 'subtrair':
                    $this->resultado = $this->num1 - $this->num2;
                    break;
        
                case 'multiplicar':
                    $this->resultado = $this->num1 * $this->num2;
                    break;
        
                case 'dividir':
                    $this->resultado = $this->num1 / $this->num2;
                    if ($this->num1 == 0) {
                        echo '<br>Preencha o campo "Primeiro número" diferente de 0';
                    }
                    break;
        
                case 'resto':
                    $this->resultado = $this->num1 % $this->num2;
                    if ($this->num1 == 0) {
                        echo '<br>Preencha o campo "Primeiro número" diferente de 0';
                    } 
                    break;
                    
                }

        }
    }

}
