# Backend PHP <img src="https://www.moovin.com.br/assets/images/svg/logo2.svg" width="50">

### Desafio

Desenvolver uma solução para o desafio proposto com a utilização de orientação a objetos na linguagem PHP.

### Como realizar

Faça o fork do repositório, realize os seus commits e ao final envie o link do seu repositório para o e-mail rh@moovin.com.br. Este repositório já possui uma base para iniciar o desenvolvimento, utilize-a como achar necessário. 

Para iniciar você deve instalar as dependências:
```zsh
  foo@bar:~$ composer install
```
Em seguida você poderá executar exemplos de utilização do sistema criado através do comando:
```zsh
  foo@bar:~$ php main.php
```
Também é possível optar por implementar testes de unidade, utilizando o comando abaixo para execução:
```zsh
  foo@bar:~$ ./vendor/bin/phpunit --bootstrap vendor/autoload.php --configuration phpunit.xml
```

### Instruções

Em um pequeno país do planeta Cyber, a moeda vigente é o biteris cuja sigla é B$.

Você precisa desenvolver um algoritmo para um caixa eletrônico, seguindo os requisitos descritos abaixo:

- O banco possui dois tipos de conta: Conta Corrente e Conta Poupança;
- Cada tipo de conta possui um limite de Saque por acesso:
	- Conta Corrente: B$ 600,00;
	- Conta Poupança: B$ 1.000,00;
- Cada tipo de conta possui uma taxa de operação que deve ser descontado do saldo sempre que uma operação de Saque for realizada:
	- Conta Corrente: B$ 2,50;
	- Conta Poupança: B$ 0,80;
- As operações que o Caixa Eletrônico disponibiliza são: Depósito, Saque, Transferência;
- A operação de Depósito deve receber o valor a ser depositado;
- A operação de Saque deve receber o valor a ser retirado além de validar se a conta possui saldo e se o valor não excede o limite do acesso;
- A operação de Transferência remove saldo da conta e adiciona o mesmo valor em uma outra conta;
- A operação de Transferência deve receber uma conta de destino e o valor a ser transferido, validando se a conta possui saldo para transferência;
- O Caixa Eletrônico deve receber uma Conta de qualquer tipo para iniciar qualquer tipo de transação;

> **ATENÇÃO**: Não é necessário realizar interação com banco de dados ou qualquer tipo interface de entrada de informações (input).

### Dúvidas

Em caso de dúvida entre em contato pelo skype **matheusmoovin**

