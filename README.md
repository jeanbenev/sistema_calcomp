
<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Sistema Calcomp</h1>
    <h2 align="center">Funcionalidade de Report Excell</h1>
    <br>
</p>

O sistema nomeado "Sistema de Gerenciamento de Projetos" para a empresa Lorem Ipsum foi feito usando 
o framework [Yii 2](http://www.yiiframework.com/).

FUNCIONALIDADES
------------

### Modulo DqcModel

O modulo `DqcModel` contem as seguintes funcionalidades:

~~~
1) Criação de DqcModel.
2) Visualização de um DqcModel.
3) Alteração de DqcModel.
4) Exclusão de um DqcModel.
5) Uma visualização de gerenciamento dos DqcModel criados.
~~~

### Modulo Dqc84

O modulo `Dqc84` contem as seguintes funcionalidades:

~~~
1) Criação de Dqc84.
2) Visualização de um Dqc84.
3) Alteração de Dqc84.
4) Exclusão de um Dqc84.
    • **ATENÇÃO** Dqc84 que estão associados a DqcModel não podem ser excluídos.
5) Uma visualização de gerenciamento dos Dqc84 criados.
~~~

### Modulo Dqc841

O modulo `Dqc841` é um módulo invisível usado somente para a associação de participantes a projetos.

~~~
1) Criação de Dqc841.
2) Visualização de um Dqc841.
3) Alteração de Dqc841.
4) Exclusão de um Dqc841.
    • **ATENÇÃO** Dqc841 que estão associados a Dqc84 não podem ser excluídos.
5) Uma visualização de gerenciamento dos Dqc841 criados.
~~~

INSTALAÇÃO
------------

### Instalação via Composer

Se você não tiver o [Composer](http://getcomposer.org/), você pode instalá-lo seguindo as instruções
em [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

Você pode então instalar o Yii2 no diretório raiz do seu servidor web localhost usando o seguinte comando:

~~~
composer create-project --prefer-dist yiisoft/yii2-app-basic calcomp
~~~

Agora você deve ser capaz de acessar o aplicativo através da seguinte URL, assumindo que `calcomp` é o diretório
diretamente na raiz do seu servidor web.

~~~
http://localhost/sistema_lorem-ipsum/web/
~~~

### Instalação a partir de um arquivo

A aplicação Yii2 está no diretório `basic` que está dentro do arquivo baixado [yiiframework.com](https://github.com/yiisoft/yii2/releases/download/2.0.41/yii-basic-app-2.0.41.tgz)

1) Pegue o diretório `basic` contido dentro do arquivo baixado e renomeie para `calcomp`

2) Coloque o diretório `calcomp` na raiz web do seu localhost.

### Instalação dos pacotes necessarios para rodar a aplicação

É necessário que você tenha o composer instalado e execute os seguintes comandos na pasta do sistema `calcomp`

1) Yii2 Dialog: 
~~~
composer require kartik-v/yii2-dialog "dev-master"
~~~

2) Yii2 Excel Export: 
~~~
composer require codemix/yii2-excelexport
~~~

Agora você deve ser capaz de acessar o aplicativo através da seguinte URL, assumindo que `calcomp` é o diretório
diretamente na raiz da Web.

~~~
http://localhost/calcomp/web/
~~~

### Baixando o projeto do Github

Você precisa entrar no diretório `calcomp` e executar os seguintes comandos:

1) Iniciar o git no repositório:
~~~
git init
~~~

2) Conectar com o repositório remoto:
~~~
git remote add origin https://github.com/jeanbenev/sistema_calcomp.git
~~~

3) Buscar os arquivos do repositório remoto:
~~~
git fetch --all
~~~

4) Resetar para o HEAD do repositório remoto:
~~~
git reset --hard origin/master
~~~

Agora você deve ser capaz de acessar o aplicativo com as implementações através da seguinte URL, assumindo que `calcomp` é o diretório diretamente na raiz da Web.

~~~
http://localhost/calcomp/
~~~

ou

~~~
http://localhost/calcomp/web/
~~~

### Banco de Dados: Criando a estrutura e inserindo os dados

Dentro da pasta `/dump/` há o arquivo `calcomp.sql` da criação das tabelas do banco de dados e da inserção dos dados.

1) Execute o script do arquivo a seguir para criação do banco e a estrutura das tabelas:

~~~
dump/calcomp.sql
~~~

ESTRUTURA DOS DIRETÓRIOS
-------------------

      dump/               Contem o arquivo de script para criação do banco de dados e inserção de dados.
      config/             Contem as configurações da aplicação do banco de dados.
      vendor/             Contem os pacotes de widgets utilizados da aplicação.
      controllers/        Contem as classes controllers da apluicação.
      models/             Contem as classes models da aplicação.
      views/              Contem os arquivos views da aplicação.
      web/                Contem o arquivo index.php que inicia a aplicação.

REQUESITOS
------------

O requisito mínimo para este modelo de projeto é que seu servidor da Web suporte PHP 5.6.0.