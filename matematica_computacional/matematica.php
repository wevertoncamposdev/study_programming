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

    public function binomiais($n, $p){

        /* BINOMIAIS

        */
        $result = $this->combinacao_simples($n, $p);
        return $result;
    }

    public function binomiais_complementares($n, $p, $q){

        /* BINOMIAIS COMPLEMENTARES 
            se p + q é = a n... eles são complementares
        */


        $x = $p + $q;
        $result1 = $this->combinacao_simples($n, $p);
        $result2 = $this->combinacao_simples($n, $q);

        if($x == $n){
            return "é complementar: Cn,p = $result1; e Cn,q = $result2";
        }else{
            return "não é complementar: Cn,p = $result1; e Cn,q = $result2";
        }
       
    }

    public function triangulo_paschal($n, $p){

        /* TRIÂNGULO DE PASCAL 
            Triângulo de Pascal é um triângulo aritmético infinito 
            onde são dispostos os coeficientes das expansões binominais.
            (n,p=0) = 1
            (n,p=1) = n
            (n,p=n) = 1
        */

        /* 	0	1	2	3	4	5	6   
            0	1	1	1	1	1	1	1
            1	1	2	3	4	5	6	
            2	1	3	6	10	15		
            3	1	4	10	20			
            4	1	5	15				
            5	1	6					
            6	1					
         */

        $this->combinacao_simples($n, $p);

    }

    public function binomio_newton(){
        /* BINOMIO DE NEWTON */
    }

}

class Relacao{

    public function produto_cartesiano($x,$y){
        /* PRODUTO CARTESIANO
        apresentação grafica da relação em dois grupos A e B

        Ex.

        A={0,1,3,4} e B={-1,0,1,2,3}
        0 -> -1,0,1,2,3
        1 -> -1,0,1,2,3
        3 -> -1,0,1,2,3
        4 -> -1,0,1,2,3

        A={0,1,3,4} e B= [-1,2[
        0 -> -1 até 2
        1 -> -1 até 2
        3 -> -1 até 2
        4 -> -1 até 2

        A=[0,4] e B= [-1,2[
        0 até 4 -> -1 até 2
        0 até 4 -> -1 até 2
        0 até 4 -> -1 até 2
        0 até 4 -> -1 até 2
    

        */
    }

    public function relacao($x,$y){
        /* 
        RELAÇÃO 
        PROPRIEDADES: 
            REFLEXIVA
            SIMÉTRICA
            ANTSSIMÉTRICA
            TRANSITIVA
        */
    }

    public function funcao_primeiro_grau($x, $y){
        /* 
        y = 2x + 1
        */
        $y = (-2 * $x) + 1;

        return $y;

    }
}

/* $newAnalise = new AnaliseCombinatoria(); */
$i = -2;
while($i <= 2){
    $a = new Relacao();
    print_r("$i : {$a->funcao_primeiro_grau($i,0)} \n");
    $i++;
}

?>