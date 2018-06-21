# Executar o Hello World

Programa feito para aprendizado de laravel

  - Crud simples com chave estrangeira.

### Installation

Passo a passo para executar o programa

Clone o repositorio

```
$ git clone https://github.com/JotaVexD/HelloWorldLaravel.git
```

Instale as dependencias

```sh
$ composer install
$ composer update
```

Crie um banco de dados

```sh
$ mysql -uroot -proot
$ CREATE DATABASE helloworld;
```

Abra seu ambiente de trabalho. No meu caso o VS code

```sh
$ code .
```

Arrume as credencias do seu MySQL.

 - No meu caso, minha credencias eram: 
    - User: root ;
    - Senha: root.

De o migrate para o banco de dados

```sh
$ php artisan migrate
```

Inicie o server

```sh
$ php artisan serve
```

Acesso so site pelo link

```sh
http://localhost:8000/
```

