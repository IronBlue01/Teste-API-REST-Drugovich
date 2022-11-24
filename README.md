# Teste API-Rest DrugoVich

### Laradock
Versionado neste projeto está a pasta `laradock`, que é uma cópia do projeto https://laradock.io, para utilizarmos os serviços necessários no desenvolvimento da aplicação como Nginx, Mysql, Phpmyadmin etc. Para utilizar siga os passos abaixo.

É necessário ter o `docker` e o `docker-compose` instalados. Lembre-se de parar seu servidor web caso exista.

#### Clonando e Instalando Projeto
1. Faça um clone deste projeto
2. Dentro da raiz do projeto crie uma copia de .env.example para .env.
3. Acesse a pasta ./laradock que se encontra na raiz do projeto e crie uma copia de .env.example para .env, o arquivo já está devidamente configurado, porém no inicio do arquivo você pode mudar as portas que serão utilizadas pelos containers caso acorra algum conflito em sua maquina
4. Ainda dentro da pasta ./laradock abra o terminal e suba os containers nginx, mysql, phpmyadmin
5. Acesse o container workspace
6. instale as dependencias do projeto através do composer
7. Execute as migrations
8. Gere a documentação

```bash
git clone https://gitlab.com/truckpag/##########.git
cd nome_projeto
cp .env.example .env
cd ./laradock
cp .env.example .env
docker-compose up -d nginx mysql phpmyadmin
docker-compose exec --user=laradock workspace zsh
composer install
php artisan scribe:generate
```

# Gerando as collections para utilizar no postman
Dentro da documentação do projeto é possivel importar as collections com os endpoints para uso em ferramentas como postman clicando no link que se encontra no menu lateral esquerdo na parte inferior [View Postman Collection]

### Cabeçalho para executar requisições
Este cabeçalho garante que a resposta seja devolvida em JSON. Não informá-lo na requisição pode causar comportamentes
inesperados na API.
```
Content-type: application/json
Accept: application/json
```

#### Gerar documentação
```php
php artisan scribe:generate
```

#### Acessar documentação
`<host>/docs`
