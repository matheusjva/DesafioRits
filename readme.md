# Desafio Rits
Aplicação de captura de curriculos para uma determinada vaga de emprego. 
Foi desenvolvido em ambiente Linux com Laravel, PostgreSQL e Bootstrap.

O sistema contém as seguintes páginas:
- Index
- Login 
- Admin

## Como executar o projeto
#### 1. Instalando as dependências
- Verifique as dependências do [Laravel](https://laravel.com/docs/)
- Instalar o [Composer](https://getcomposer.org/)
- Instalar o [PostgreSQL](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-postgresql-on-ubuntu-18-04)

#### 2. Configuração Geral
```shell
$ git clone https://https://github.com/matheusjva/DesafioRits
$ cd DesafioRits
$ composer install
$ cp .env.example .env
```
Altere o arquivo `.env` com suas configurações locais, como por exemplo, as informações do banco de dados e suas credenciais de email.(DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD, MAIL_USERNAME, MAIL_PASSWORD e etc.). Em seguida faça:
```shell
$ php artisan key:generate
$ php artisan migrate
```
Ao rodar o ultimo comando `php artisan migrate`, será gerado todas as tabelas necessarias e um usuário Admin default para poder fazer login no sistema. As credenciais do usuário Admin são: 
- email: admin@example.org
- senha: secret

#### 3. Configurando email
Está etapa é necessária para receber os emails do sistema com a quantidade de candidatos inscritos na vaga.

Foi utilizado o protocolo `smtp` e servidor de email `Gmail`.

Altere as seguintes variáveis do arquivo `.env` com as suas credenciais:
- Servidor


Se for gmail, deixar como está. Outros exemplos: smtp.live.com, smtp.mail.yahoo.com
```shell
MAIL_HOST=smtp.gmail.com 
```
- Porta do Servidor

Atualiza para a porta do seu servidor. Se for `Gmail` deixar como está.
```shell
MAIL_PORT=587
```
- Seu email
```shell
MAIL_USERNAME=exemplo@gmail.com
```
- Sua senha
```shell
MAIL_PASSWORD=suasenha
```
- Seu nome ou nome do seu email
```shell
MAIL_FROM_NAME='Desafio Rits'
```

#### 4. Configurando Cron Job
O cron job é necessário para disparar os processos agendados do laravel. Aqui utilizaremos para enviar os emails com a quantidade de candidatos inscritos. Os emails serão disparados às 12h e às 18h todos os dias.

Abra o seu arquivo crontab
```shell
 $ crontab -e
```
Adicione a seguinte linha de código a  ele: 
```shell
* * * * * cd /caminho/para/seu_projeto && php artisan schedule:run 1>> /dev/null 2>&1
```
Lembre-se de alterar `/caminho/para/seu_projeto` para o caminho do seu projeto na sua maquina. 

#### 5. Rodar projeto
Por fim, rode o seguinte comando na pasta do projeto:
```shell
php artisan serve
``` 
Acesse no seu navegador o endereço para acessar o sistema:
```shell
http://127.0.0.1:8000
```


