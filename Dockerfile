FROM php:apache 
#Esta instrução indica que esta imagem Docker será baseada na imagem oficial do PHP com o servidor Apache embutido

RUN docker-php-ext-install mysqli
#está instalando a extensão mysqli, que é usada para permitir que o PHP se conecte a bancos de dados MySQL.