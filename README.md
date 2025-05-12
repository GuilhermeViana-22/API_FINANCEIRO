# Sistema de Gerenciamento Financeiro

Este projeto é uma **API de gerenciamento financeiro** desenvolvida com Laravel. Ele inclui funcionalidades para o controle de gastos, financiamentos e bancos, além de permitir a integração com a gestão de usuários, oferecendo autenticação com JWT (usando Laravel Passport) e gerenciamento de permissões de acesso.

## Funcionalidades

* *   Registro de usuários
*     
* *   Login e logout com JWT
*     
* *   Gerenciamento de perfis de usuário
*     
* *   Atribuição de funções e permissões aos usuários
*     
* *   Controle de acesso baseado em funções e permissões
*     
* *   **Controle de Gastos**: Registro de despesas financeiras com valor, descrição, data e categoria
*     
* *   **Gerenciamento de Financiamentos**: Registro de financiamentos (carro, casa, etc.)
*     
* *   **Cadastro de Bancos**: Cadastro de bancos e contas associadas aos usuários
*     

## Tecnologias Utilizadas

* *   [Laravel](https://laravel.com/) - Framework PHP
*     
* *   [Laravel Passport](https://laravel.com/docs/8.x/passport) - Autenticação com JWT
*     
* *   [MySQL](https://www.mysql.com/) - Banco de dados relacional
*     
* *   Carbon - Manipulação de datas no formato desejado
*     

## Requisitos

* *   PHP >= 7.3
*     
* *   Composer
*     
* *   MySQL
*     

## Instalação

1. 1.  Clone o repositório:
1.     
1.     sh
1.     
1.     CopiarEditar
1.     
1.     `git clone https://github.com/seu-usuario/seu-repositorio.git`
1.     
1. 2.  Navegue até o diretório do projeto:
1.     
1.     sh
1.     
1.     CopiarEditar
1.     
1.     `cd seu-repositorio`
1.     
1. 3.  Instale as dependências do Composer:
1.     
1.     sh
1.     
1.     CopiarEditar
1.     
1.     `composer install`
1.     
1. 4.  Crie um arquivo `.env` a partir do exemplo e configure suas credenciais de banco de dados:
1.     
1.     sh
1.     
1.     CopiarEditar
1.     
1.     `cp .env.example .env`
1.     
1. 5.  Certifique-se de que as permissões estão corretas para os diretórios storage e bootstrap/cache. Eles devem ser graváveis pelo servidor web:
1.     
1.     sh
1.     
1.     CopiarEditar
1.     
1.     `chmod -R 775 storage chmod -R 775 bootstrap/cache`
1.     
1. 6.  Gere a chave da aplicação:
1.     
1.     sh
1.     
1.     CopiarEditar
1.     
1.     `php artisan key:generate`
1.     
1. 7.  Configure o banco de dados no arquivo `.env`:
1.     
1.     plaintext
1.     
1.     CopiarEditar
1.     
1.     `DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=nome_do_banco DB_USERNAME=seu_usuario DB_PASSWORD=sua_senha`
1.     
1. 8.  Execute as migrações e seeders:
1.     
1.     sh
1.     
1.     CopiarEditar
1.     
1.     `php artisan migrate --seed`
1.     
1. 9.  Instale o Laravel Passport:
1.     
1.     sh
1.     
1.     CopiarEditar
1.     
1.     `php artisan passport:install`
1.     

## Uso

### Registro de Usuário

Endpoint: `POST /api/register`

Corpo da Requisição:

json

CopiarEditar

`{     "name": "Seu Nome",     "email": "seuemail@example.com",     "password": "suaSenha",     "password_confirmation": "suaSenha" }`

### Registro de Gasto

Endpoint: `POST /api/gastos`

Corpo da Requisição:

json

CopiarEditar

`{     "user_id": 1,     "descricao": "Compra de supermercado",     "valor": 150.00,     "data": "2025-05-12",     "situacao_id": 1,     "ano": "2025",     "total": 150.00 }`

### Registro de Financiamento

Endpoint: `POST /api/financiamentos`

Corpo da Requisição:

json

CopiarEditar

`{     "tipo": "Carro",     "valor": 25000.00,     "instituicao_bancaria_id": 1,      "parcelas": 24,     "user_id": 1,     "status": "Ativo",     "data_inicio": "2025-01-01",     "data_fim": "2027-01-01" }`

### Cadastro de Banco

Endpoint: `POST /api/bancos`

Corpo da Requisição:

json

CopiarEditar

`{     "nome": "Nubank",     "tipo": "Conta Corrente",     "agencia": "1234",     "numero_conta": "9876543210",     "user_id": 1 }`

* * *

### Documentação de Configuração do Laravel Passport

Antes de seu aplicativo poder emitir tokens de acesso pessoal, você precisará criar um cliente de acesso pessoal.

#### Passo 1: Instalar o Passport

Se você ainda não executou o comando `passport:install`, você deve executá-lo primeiro. Este comando criará as chaves de criptografia e os clientes necessários para o Laravel Passport.

bash

CopiarEditar

`php artisan passport:install`

#### Passo 2: Criar um Cliente de Acesso Pessoal

Depois de executar passport:install, você pode criar um cliente de acesso pessoal. Se você já executou o comando passport:install, não é necessário executar este comando novamente.

Para criar um cliente de acesso pessoal, use o comando:

bash

CopiarEditar

`php artisan passport:client --personal`

* * *

Agora, o seu README está atualizado para refletir o gerenciamento financeiro com funcionalidades de **gastos**, **financiamentos** e **bancos**.

Paste your rich text content here. You can paste directly from Word or other rich text sources.
