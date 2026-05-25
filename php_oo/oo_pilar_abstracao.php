<?php
        //modelo
        class Funcionario {
            //atributos
            public $nome = 'José';
            public $telefone = '11999999999';
            public $numFilhos = 2;

            //métodos
            function resumirCadFunc() {
                return "$this->nome possui $this->numFilhos filhos e seu telefone é $this->telefone";
            }

            function modificarNumFilhos($numFilhos) {
                $this->numFilhos = $numFilhos;
                
            }

        }

        $y = new Funcionario();
        echo $y->resumirCadFunc();
        echo '<br>';

        $y->modificarNumFilhos(3);
        echo $y->resumirCadFunc();

?>
s