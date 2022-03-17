##  Segurança


>### Lei da Profundidade 
>*  Ter mais de uma defesa, 
>*  Por exemplo autenticação de dois fatores

>### Lei do menor privilégio
>*  Se o usuário não dever fazer alguma coisa, o sitema não pode permitir ela fazer 
>*  Por exemplo um usuário que só precisa consultar o banco de dados não pode inserir, atualizar... 

>### Como Melhorar meu código
>*   (LWPRequest - Headers) pode expor dados como expose_php(informa a versão) ou php.init, serverToken
>*  

>### Gerenciamento de Erros
>*  display_erros - mostra os erros
>*  error_reporting - nivel de erro mostrado
>*  log_errors - lohar erros
>*  error_log - arquivo de log
>*  set_error_handler - indica uma função para manipular erros
>*  error_log - loga um erro personalizado


>### Filtragem de dados
>*  Bypass, mistake, origem
>*  validating && Sanitizing - bloqueie valores indesejados
>*  filter_var() - Validate(validar); Sanitizing(Limpar)
>*  https://www.php.net/filter.filters.validate 

>### Cuidados com formulários
>*  Spoofed form submissions
>*  validação do lado servidor
>*  
>*   

>### Cuidados com imagens
>*  Esconder mensagens por meio de imagens,  
>*  exif_imagetype()
>*  ressalvar imagens vai ressalvar somento o codigo da imagem 
>*   
