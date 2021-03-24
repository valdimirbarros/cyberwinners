Acesse sua pasta preferida para projetos web e execute os seguintes passos:

1 - Faça o download do projeto:

git clone https://github.com/valdimirbarros/cyberwinners.git

2 - Acesse a pasta criada:

cd cyberwinners

3 - Com o composer instalado, realize o download das dependências:

composer install

4 - Crie uma base de dados "ex: cyberwinners" em seu SGBD (utilizei MySql com codificação utf8mb4_general_ci) e configure a conexão à base de dados no .env da aplicação.

5 - Execute as migrations e seeders disponíveis no projeto:

php artisan migrate --seed (or php artisan migrate:fresh --seed)

6 - Acesse a aplicação a partir do navegador: 

http://127.0.0.1/cyberwinners/public/
