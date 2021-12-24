## Filas do Laravel

Projeto feito em Laravel/Framework com o intuito de aprender usar as Queues para disparo de e-mails.

### Bibliotecas usadas:
* [Laravel pt-BR Localization](https://github.com/lucascudo/laravel-pt-BR-localization)
* [Bootstrap 4 forms for Laravel 5/6/7/8](https://github.com/netojose/laravel-bootstrap-4-forms)

### Instalação: 

* Você precisará do PHP instalado em seu computador, [BAIXE AQUI](https://www.php.net/downloads). 
* Na raiz do projeto use o comando `composer install`. 
* No arquivo `.ENV` edite o campo `DB_CONNECTION` e coloque os dados do seu banco de dados.
* Também dentro do arquivo `.ENV` edite o campo `MAIL_MAILER`, coloque os dados do seu servidor de e-mail ([Recomendo o Mailtrap](https://mailtrap.io)) e altere o campo `QUEUE_CONNECTION` de `sync` para  `database`.
* Use o comando `php artisan queue:table` para criar a tabela de jobs (filas).
* Use o comando `php artisan migrate` para fazer as migrações.
* Use o comando `php artisan serve` para rodar em seu servidor.
* Navegue para `http://127.0.0.1:8000/`. O aplicativo será carregado automaticamente.

