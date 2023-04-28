## Laravel CRUD API
Basic Laravel API application

----

### Language & Framework Used:
1. PHP
1. Laravel

### Architecture Used:
1. Laravel 8.x
1. Interface-Repository Pattern
1. Model Based Eloquent Query
1. postman collection file - project root -> farmarcas.postman_collection.json
1. PHP Unit Testing - Some basic unit testing added.

### Create Asaas:
1. [x] Criar conta no https://sandbox.asaas.com/
2. [x] Gerar Chave Key
3. [x] No .env do projeto colocar a chave -> CHAVE_API = "sua chave"
4. [x] No .env do projeto colocar a dominio -> URL_ASAAS = "https://sandbox.asaas.com" 

Documentação: https://asaasv3.docs.apiary.io/#

Credenciais de Sandbox:
Crie uma conta no Asaas Sandbox( https://sandbox.asaas.com/ ), na parte de Configuração de Conta->Integrações você irá conseguir a API Key de Sandbox para iniciar a integração.

### API List:

##### Cliente Module
1. [x] Cliente List
1. [x] Create Cliente

##### Pay Module
1. [x] gerar PIX
1. [x] show PIX
1. [x] gerar Pagamento Boleto
1. [x] gerar Pagamento Cartão
1. [x] list Processo de Pagamento por cliente


### How to Run:
1. Clone Project - 

```bash
git clone https://github.com/heliocesar/perfectPay.git
```
1. Go to the project drectory by `cd pay` & Run the
2. Create `.env` file & Copy `.env.example` file to `.env` file
3. Install composer packages - `composer install`.

7. Run the server -
``` bash
php artisan serve
```
8. Open Browser - http://127.0.0.1:8000

