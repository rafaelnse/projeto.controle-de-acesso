# Sistema de controle de acesso.
***
Este repositório contém meu projeto de estágio, que visa atualizar o sistema de controle de acesso de visitantes no prédio da empresa para a versão mais atual do framework Laravel.

O sistema anterior era baseado na versão 5.8 do Laravel, que já está desatualizada. A atualização para a versão 10.x do 
Laravel incluiu uma série de melhorias e novos recursos, como:
* Suporte para PHP 8.x
* Novas bibliotecas e componentes
* Melhorias na performance e segurança

**Atualizações realizadas**

As principais atualizações realizadas no sistema foram:
* Atualização da versão do Laravel para 10.x
* Migração do código para a nova estrutura do Laravel
* Atualização das bibliotecas e componentes utilizados
* Correção de bugs e vulnerabilidades

**Como testar o projeto**

Para testar o projeto, é necessário ter o PHP 8.x instalado. Em seguida, basta clonar o repositório e executar os seguintes comandos:

```
composer install
php artisan serve
```
O sistema estará disponível em http://localhost:8000.


Para possibilitar o salvamento e visualização de imagens:
1 - Utilizar o comando: php artisan storage:link
2 - Em '.env' deve ser alterado
de: FILESYSTEM_DISK=local
para: FILESYSTEM_DISK=public



**Documentação**

A documentação do projeto está disponível no arquivo README.md.


Outras informações

O projeto foi desenvolvido no período de [Julho/2023] a [término], sob a orientação de [-].


