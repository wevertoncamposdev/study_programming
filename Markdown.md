# Título <h1>
## Título <h2>
### Título <h3>
#### Título <h4>
##### Título <h5>
###### Título <h6>

**negrito**, e outro em _itálico_.

Texto-âncora: utilize os caracteres [](), adicionando entre chaves o texto que você quer que apareça, e entre os parênteses, o endereço de destino, no formato 
[Google](www.google.com).

Link direto: envolva o endereço da web em chaves <>. O endereço ficará visível e será clicável pelo usuário. O endereço em forma de link direto tem o formato 
<www.google.com/>

* Item 1
* Item 2
* Item 3

1. Item 1
2. Item 2
3. Item 3

Imagens
O código para inserir uma imagem no conteúdo é semelhante ao código de inserir links-âncora, adicionando um ponto de exclamação ! no início do código, como no exemplo abaixo:

![PHP]("https://img.icons8.com/ios-filled/50/000000/php.png")

Citação (Quote)
Para transformar um texto em uma citação ou comentário, semelhante ao código HTML <blockquote>, utilize o sinal > no início da linha que será formatada:

>Este é um *blockquote*. O sinal usado abre e fecha este código no HTML.
Para adicionar mais uma linha à citação, basta teclar Enter para um novo código sinal. Isso
gerará um novo parágrafo dentro do *blockquote*. Códigos de **negrito**, _itálico_ e <https://links.com> funcionam aqui.




Código (Code Highlight)

~~~javascript
var v = "variable"
~~~

~~~php
<?php
    $var = "variable";
?>
~~~

~~~python

var = "variable"

~~~

~~~html
<h3>variable</h3>
~~~


Tabela
Escolha os títulos das colunas e use | para delimitar as colunas. Depois, utilize hífen - na segunda linha para indicar que acima estão os títulos das colunas, usando novamente o | para delimitar colunas. Veja um exemplo abaixo:

Exemplo   | Valor do exemplo
--------- | ------
Exemplo 1 | R$ 10
Exemplo 2 | R$ 8
Exemplo 3 | R$ 7
Exemplo 4 | R$ 8s

Para especificar o tipo de alinhamento que deseja ter nas tabelas, utilize : ao lado do campo horizontal de hífens ---, na segunda linha da sua tabela. Veja abaixo:

Alinhado a esquerda: usar : no lado esquerdo (alinhamento padrão);
Alinhado a direita: usar : no lado direito;
Centralizado: usar : dos dois lados.
Veja no exemplo:

Alinhado a esquerda | Centralizado | Alinhado a direita
:--------- | :------: | -------:
Valor | Valor | Valor