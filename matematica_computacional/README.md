
# **Matemática Computacional**
**Resumo,** por Weverton Campos
## **Teoria dos Conjuntos**
O que é um Conjunto?

Pode ser definido como uma coleção não ordenada de entidades relacionadas porque obedecem a uma determinada regra.

**Conjuntos:** Geralmente são representados usando letras maiúsculas: A,B,C…

**Elementos:** Geralmente são representados usando letras minúsculas: a,b,c…

Para listar os elementos de um conjunto, os colocamos entre chaves, separados por vírgulas:

**S = {-2, -1, 0, 1, 2}**

Os elementos de um conjunto também podem ser descritos explicitamente por meio de uma regra, como:

**S = {inteiros entre -3 e 3}**

### Diagrama de Venn
Outra maneira de se apresentar os elementos de um conjunto é por meio do Diagrama de Venn. Segundo Brochi (2016), trata-se de uma forma gráfica de representação de conjuntos, facilitando a resolução de problemas e representações de operações entre conjuntos.

Desta forma, o conjunto S apresentado anteriormente pode ser representado da seguinte forma:

![](Aspose.Words.376e3ece-f484-4d08-bdfb-bd507699d6c9.001.png)

-----
###
### Operações de Conjuntos
**União** de dois conjuntos: A∪B 

**Intersecção** de dois conjuntos: A∩B - pertence ao mesmo tempos a A e a B;

**Complementar** de A: Ac - todo elementos do universo que não pertencem ao A;

**Diferença** de A: A-B - todo elementos do A e não pertence a B;


**Ex1-** Numa feira de artigos hospitalares, participam 98 empresas varejistas desse ramo. Metade delas possuem lojas virtuais. As que possuem lojas físicas são 75. Quantas são as empresas que possuem, ao mesmo tempo, lojas físicas e virtuais? n(**V∪**F)=98

![](Aspose.Words.376e3ece-f484-4d08-bdfb-bd507699d6c9.002.png)

Metade delas possuem lojas virtuais, então: n(V)= 98/2 =49;

![](Aspose.Words.376e3ece-f484-4d08-bdfb-bd507699d6c9.003.png)

As que possuem lojas físicas são 75, então: n(F)=75;

![](Aspose.Words.376e3ece-f484-4d08-bdfb-bd507699d6c9.004.png)

Quantas são as empresas que possuem, ao mesmo tempo, lojas físicas e virtuais?

**fórmula:** n(V∪F)= n(V) + n(F) - n(V∩F);

**resultado: 98 = 49+75-x; x=49+75-98;x=124-98;x=26.**

**confirmação: n(V)=23+26=49; n(F)=16+49=75.**

![](Aspose.Words.376e3ece-f484-4d08-bdfb-bd507699d6c9.005.png)


-----
## Como descrever tais relações?
Relação entre um elemento e um conjunto, relação de pertinência.

A relação entre um elemento e um conjunto é a dita **relação de pertinência.**

Deste modo, diz-se que um determinado elemento pertence Î ou não pertence Ï a determinado conjunto.

Aproveitando o elemento do caso anterior, vemos que “sexta” Î D, mas “sexta” Ï Q.

**Princípio da Inclusão e Exclusão**

Estas operações são relevantes, mas, ainda assim, há situações que demandam operações um pouco mais complexas.

Vamos vê-las no exemplo a seguir:

Um conjunto A tem 25 elementos e um conjunto B tem 15 elementos. Sabendo-se que a interseção de ambos tem 10 elementos, qual é a quantidade de elementos da união de A com B?

Situações como esta são resolvidas com apoio do **Princípio da Inclusão e Exclusão**.

Trata-se de um princípio bastante simples, indicando que:

n(A∪B) =n(A) + n(B) – n(A ∩ B)

Desta forma, neste exemplo, temos que n(A ∪ B) = 25 + 15 – 10 = 30 elementos.

-----

**A’, B’** - A linha, B linha., A complementar e B complementar



-----
###
### **Permutação**
Definição:

A permutação de n elementos é dada por:  

**Pn =1×2×3×...xn = n!.**

A permutação de n elementos com n1, n2, …, nk repetições de elementos é dada por: 

**Pnn1,n2,...nk= n! n1!n2!...nk!** 
### **Arranjos**
Definição:

Um arranjo de n elementos tomados p a p, indicada por An,p, é dada por:

An,p= n!(n-p)!
### **Combinação**
Definição:

Cn,k=n!k!(n-k)!

**Problema 1:** 

De quantas maneiras diferentes podemos eleger uma comissão (sem distinção de cargos) de 4 pessoas de um grupo formado por 10 pessoas? 

C10,4=10!4!(10-4)!=210 

**Problema 2:** 

Quantos jogos diferentes podem ser feitos em uma loteria em que se devem ser escolhidos 6 números de um total de 60?

C60,6=60!6!(60-6)! = 50.063.860

**Problema 3 :**

Calcular possibilidades 

1C60,6= 150.063.860≈0,00000001997≈ 0,000002%

C15,6C60,6=5.00550.063.860≈ 0,00009997 = 0,009997%

C60,6C15,6=50.063.8605.005 ~ 10.002 
## **Relações**
Exemplo:  
Considere a relação R ={(x,y),x>y} em A = {1,2,3,4}. Verifique quais propriedades (reflexiva, simétrica, antissimétrica e transitiva) são verificadas para R.
**Determinando os elementos: R ={(x,y),x>y}**
**R = {(2,1),(3,1),(3,2),(4,1),(4,2),(4,3)}**

- **Propriedade Reflexiva**
  - R é reflexiva se ∀x ∈ A, (x,x) ∈ R
  - se (∀x) todo x; (∈ A) pertencente a A; (x,x) ∈ R x,x pertence a R
  - R não é reflexiva, pois não existe nenhum elemento(x,x) ∈ R

-  **Propriedade Simétrica**
  -  R é simétrica se ∀x,y ∈ A,((x,y) ∈ R)→(y,x)∈ R
  -  ` `∀x,y ∈ A todo x,y pertencente ao conjunto A
  -  ((x,x) ∈ R)→(y,x)∈ R, quando inverte os elementos também pertence a R
  -  R não é simétrica, pois para cada (x,x) ∈ R, não encontramos nenhum (y,x)∈ R. tem o (2,1), mas não tem o (1,2) 

-  **Propriedade antissimétrica**
  -  R é antissimétrica se ∀x,y ∈ A,
  -  ((x,y) ∈ R e (y,x)∈ R)→x=y
  -  R é antissimétrica, pois não contradiz a propriedade acima não há 

-  **Propriedade Transitiva**
  -  R é transitiva se ∀x,y,z ∈ A,
  -  ((x,y) ∈ R e (y,z) ∈ R)→(x,z)∈ R
  -  R é transitiva, pois existem elementos que se relacionam na fórmula acima. 
  -  ((4,3) ∈ R e (3,2) ∈ R)→(4,2)∈ R
  -  ((4,3) ∈ R e (3,1) ∈ R)→(4,1)∈ R
  -  ((4,2) ∈ R e (2,1) ∈ R)→(4,1)∈ R
  -  ((3,2) ∈ R e (2,1) ∈ R)→(3,1)∈ R

 **Domínio, Contradomínio e Imagem**
 Em uma relação R de A em B, o conjunto dos valores x  A que estão associados a valores y ∈ B é denominado domínio da relação e denotamos por **D (R)**. 
 E os valores y que estão associados a valores x compõem o conjunto que denominamos imagem da relação e denotamos por **Im (R).** 
 O conjunto B, que contém a imagem da relação, é denominado contradomínio da relação e é denotado por **CD (R).**

- **Exemplo 3**

Considere os conjuntos A = {-1, 0, 2}  e B = {1, 2, 3, 4}. 

Apresente a relação x R y: x = y

Neste exemplo, temos que:

D(R) = {-1, 0, 2};

CD (R) = {1, 2, 3, 4};

Im (R) = {2} → isto se dá pois é o único elemento y ∈ B que está associado a um elemento x ∈ A;

Logo, teremos que x R y = {(2, 2)}



**Funções**
### Definição
Considere dois conjuntos A e B. Dizemos que f é uma função de A em B (escrevemos f : A → B) se, para todo elemento x ∈ A, há um único elemento y ∈ B.

Aqui em funções, os conceitos de domínio, contradomínio e imagem são idênticos ao que vimos na aula de relações. Logo, existem os termos domínio da função (D(f)), contradomínio da função (CD(f)) e imagem da função (Im(f)).

**Exemplo:** 

Considere os conjuntos A = {0, 1, 2, 3, 4} e B = {—1, 2, 5, 8, 11, 14, 17}, 

e a funçãoy = f(x) tal que y = 3x — 1, com x ∈ A e y ∈ B. Neste caso, temos:

**D(f) = A = {0,1,2,3,4}**

**CD(f) = B = {-1,2,5,8,11,14,17}**

**Im(f) = {-1,2,5,8,11}**

**Verificando:**

A{0} ⇒y = 3.0 — 1 = -1

A{1} ⇒y = 3.1 — 1 = 2

A{2} ⇒y = 3.2 — 1 = 5

A{3} ⇒y = 3.3 — 1 = 8

A{4} ⇒y = 3.4 — 1 = 11


Você pode perceber que há grande semelhança com a definição de relação que vimos na aula anterior. No entanto, há algumas características peculiares ao conceito de função.

- Todos os elementos do conjunto A devem se relacionar com elementos do conjunto B; e
- Cada elemento de A está associado a um único elemento de B.

**Logo, nem toda relação é uma função.**

A relação y = x2 + 3definida nos conjuntos A = {—1, 0, 2} e B = {1, 2, 3, 4}  

com x ∈ A e y ∈ B ⇒Não é uma função, já que o elemento 2 do conjunto A não se relaciona com nenhum elemento do conjunto B, pois (2)2 + 3 = 7, que não pertence ao conjunto B.
###
### **Classificação de Funções**

**Sobrejetora:** 

Uma função f de A em B é denominada **sobrejetora (ou sobrejetiva)** quando todo elemento do conjunto B é imagem de, pelo menos, um elemento do conjunto A, ou seja, quando CD(f) = Im(f).

Dados os conjuntos A = {—3, —2, —1, 0, 1, 2, 3} e B = {—3, —2, 1, 6}, considere a função f: A → B tal que **f(x) = x2— 3** 

**Temos que:**

**f(x) = (-3)2-3=9-3=6**

f(—2) = (—2)2 — 3 = 4 — 3 = 1

f(—1) = (—1)2 — 3 = 1 — 3 = —2

f(0) = (0)2 — 3 = 0 — 3 = —3

f(1) = (1)2 — 3 = 1 — 3 = —2

f(2) = (2)2 — 3 = 4 — 3 = 1

f(3) = (3)2 — 3 = 9 — 3 = 6

Vemos que todos os elementos de B estão associados a, pelo menos, um elemento de A. Assim, temos que esta função é **sobrejetora.**

**Injetora**

Uma função f de A em B é denominada **injetora (ou injetiva)** quando cada elemento da sua imagem tem uma única associação com elemento do domínio, ou seja, se para quaisquer dois elementos distintos de seu domínio correspondem dois elementos distintos de sua imagem.

A = {0, 1, 2, 3}

B = {—3, —2, 1, 6, 13}

f(x) = x2— 3.

f(0) = (0)2 — 3 = 0 — 3 = —3

f(1) = (1)2 — 3 = 1 — 3 = —2

f(2) = (2)2 — 3 = 4 — 3 = 1

f(3) = (3)2 — 3 = 9 — 3 = 6

Vemos aqui que o conjunto imagem Im(f) é dado por {—3, —2, 1, 6} e que cada um destes elementos está associado a apenas um elemento do conjunto domínio D(f) = 1 . **Logo, temos que esta função é injetora.**

**Bijetora:** 

A função f de A em B é denominada **bijetora (ou bijetiva)** quando todo elemento do conjunto B é imagem de um único elemento do conjunto A, ou seja, quando é injetora e sobrejetora ao mesmo tempo.

A = {0, 1, 2, 3}

B = {—3, —2, 1, 6}

f(x) = x2— 3

f(0) = (0)2 — 3 = 0 — 3 = —3

f(1) = (1)2 — 3 = 1 — 3 = —2

f(2) = (2)2 — 3 = 4 — 3 = 1

f(3) = (3)2 — 3 = 9 — 3 = 6

Todos os elementos do conjunto B são imagens de um único elemento do conjunto A, ou seja, a função é sobrejetiva e injetiva ao mesmo tempo. **Logo, essa função é um exemplo de função bijetiva.**
### **Função inversa** 
Uma aplicação clássica de função em mecânica é o cálculo da distância percorrida por um móvel em determinado intervalo de tempo a uma velocidade constante.

Chamando de s a distância percorrida, v a velocidade empregada e t o intervalo de tempo, temos que s = v ∙ t. No entanto, podemos fazer o cálculo inverso, ou seja, o tempo t gasto para percorrer determinada distância s. Basta isolar a variável t, de modo a obter t = s/v.

Assim, vemos que as funções s = v ∙ t e t = s/v são denominadas funções inversas.

Segundo Brochi (2016), qualquer par (x,y) que pertença à primeira é tal que o par (y, x) pertence à segunda. Logo, o que é domínio em uma função é imagem em sua inversa, e vice-versa. A notação que utilizamos para determinar a função inversa de f é f-1.

Outro exemplo de inversão

Oferta(preço) e demanda

A vezes é interessante saber a demanda em função do preço e em determinado momento é preciso identificar o preço em função da demanda 

Então temos D = p . x ou P = D/x…

**Exemplo:**

A quantidade demandada y de certo produto é dada em função de seu preço x pela expressão y = 40 - 2x

Como podemos expressar x em função de y?

isolando x:

1. y = 40 - 2x
1. 2x = 40 - y
1. x = 40-y2
1. x = 402-y2
1. x = 20 - 0,5y
### **Função Composta**
Considere uma empresa cujo faturamento f é dependente da receita r obtida, de acordo com a lei de formação f(r) = 0,9 ∙ r + 1 000.

No entanto, a receita obtida, por sua vez, é também dependente de outra variável, o preço p, de modo que podemos representar da forma r(p) = 0,8 ∙ p. Ou seja, a função receita é, na verdade, uma variável independente da função faturamento.

Desse modo, temos que o faturamento poderia ser expresso diretamente como uma função do preço, digamos, sob a expressão g(p), que relaciona o faturamento f ao preço p, pois f(r) = 0,9 ∙ r + 1 000, mas r pode ser substituída por 0,8 ∙ p.


### **Funções do 1° Grau**

Uma função f na variável x, tal que f: R → R, é denominada função do primeiro grau se pode ser escrita na forma f (x) = ax + b (ou y = ax + b), em que a e b são valores reais quaisquer, com a ≠ 0.

f (x) = ax + b

***Estudo de Caso:***

Uma empresa produz certo tipo de suprimento que tem custo fixo de $2500,00 mais um custo por unidade de R$20,00. Qual é o custo total y para produção de x desses componentes?


### **Funções do 2° Grau**

Denominamos função do segundo grau, na variável x, toda função f: R → R que pode ser escrita na forma f (x) = ax2 + bx + c (ou y = ax2 + bx + c) em que a, b e c são valores reais quaisquer, com a ≠ 0.


### Funções Compostas
### Funções Inversas
### Funções de 1° Grau
### Funções de 2° Grau


