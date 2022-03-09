<?php

/* MATEMÁTICA COMPUTACIONAL */


/* Análise Combinatória */
class AnaliseCombinatoria{

    public function principio_multicativo($x, $y){
        
        /*  PRINCIPIO FUNDAMENTAL DA CONTAGEM OU MULTIPLICATIVO
        Se um acontecimento A pode ocorrer de x maneiras diferentes, para cada maneira de A ocorrer, e um acontecimento B pode ocorrer de y maneiras diferentes, para cada maneira de B ocorrer, então, o número de maneiras de ocorrer os acontecimentos A e B é x.y 
        */
        $result = 1;

        for($i = 1; $i <= $y; $i++){

            $result *= $x;
            $x--;
        
        }

        return $result;
    }

    public function fatorial($n){
        
        /*  FATORIAL
        O fatorial de um número natural n é calculado pela multiplicação desse número por todos os seus antecessores 
        até chegar ao número 1.

        n! = n.(n-1).(n-2). ...1 para n >= 2
        */
        $result = 1;
        while($n >= 2){

            $result *= $n; //multiplicar e atribui
            $n--;
        }
        
        return $result;
    }

    public function permult_simples($n){

        /* PERMUTAÇÃO 
        Trocar os elementos de posição entre si, obtendo uma nova ordem,
        sendo esses elementos diferentes (não há repetição).
        Pn = n!

        */

        $x = $this->fatorial($n);

        return $x;

    }

    public function anagrama($word){

        /* ANAGRAMAS
            Permutação das letras de uma palavra

            Criar lógia para mostrar as combinações diferêntes
            Ex. 
            dan; and; nda;
            dna; adn; nad;
        */

        $count = strlen($word);
        return $this->permult_simples($count);
    }

    public function permult_repeticao($n){

        /* PERMUTAÇÃO COM REPETIÇÃO
        Trocar os elementos de posição entre si, obtendo uma nova ordem,
        sendo esses elementos diferentes (não há repetição).

        n1, n2, ...nn
        P            = n!/ n1!n2!..nn!
        n

        */

        $x = $this->fatorial($n);

        return $x;

    }

    public function arranjo_simples($n, $p){

        /* ARRANJOS SIMPLES
        Quando a ordem dos elementos importa, é ultilizado Arranjos Simples
        Quando a ordem dos elementos importa, é ultilizado a Combinação Simples

        Arranjos simples de n elementos tomados p a p, com n e p e N>=1 e p=<n
        */

 
        $fatorN = $this->fatorial($n);
        $fatorPN = $this->fatorial($n - $p);
        $result = $fatorN/$fatorPN;

        return $result;

    }

    public function combinacao_simples($n, $p){

        /* COMBINAÇÕES SIMPLES
        Quando a ordem dos elementos importa, é ultilizado Arranjos Simples
        Quando a ordem dos elementos importa, é ultilizado a Combinação Simples

        Arranjos simples de n elementos tomados p a p, com n e p e N>=1 e p=<n
        */

 
        $fatorN = $this->fatorial($n);
        $fatorP = $this->fatorial($p);
        $fatorPN = $this->fatorial($n - $p);
        $result = $fatorN / ($fatorPN * $fatorP);

        return $result;

    }

}

$newAnalise = new AnaliseCombinatoria();

print_r($newAnalise->arranjo_simples(4,2));































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































?>