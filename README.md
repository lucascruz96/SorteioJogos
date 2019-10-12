# SorteioJogos

Sorteio de jogos com PHP.


## Especificações

### Requisitos

- [PHP >= 7.0](https://www.php.net/releases/7_0_0.php) ou superior.
- [Composer](https://getcomposer.org/).

### Dependências

 - [PHPUnit 6](https://phpunit.de/getting-started/phpunit-6.html) (para execução dos testes automáticos).

### Execução

1. Faça o clone do projeto com `git clone https://github.com/lucascruz96/SorteioJogos.git`.
2. Acesse a pasta do projeto e execute o comando `composer install` para instalar as dependências.

### Demonstração

Para visualizar uma execução de demonstração, execute o arquivo `public/index.php` através de um servidor web.

### Testes

Para execução dos testes, acesse a raiz do projeto e execute um dos comandos:

- Modo simplificado: `./vendor/bin/phpunit tests `
- Modo detalhado: `./vendor/bin/phpunit tests --color --stop-on-failure --debug -v`

## Jogos

### MegaSena

Classe responsável pela geração dos jogos e sorteio da Mega Sena.
A quantidade de dezenas para os jogos deve ser um valor entre 6 e 10.


