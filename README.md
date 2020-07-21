## Descrição
Para participar do processo seletivo eu escolhi resolver o exercício número 1. O objetivo do exercício é a criação de um CRUD para facilitar o manuseamento de dados de uma oficina e monitorar seus orçamentos que antes eram controlados por meio de papel e caneta, fazendo assim com que eles perdessem muitas vendas.

## Ferramentas
Para a realização do exercício eu utilizei as seguintes ferramentas:
- Visual Studio Code - Editor de código.
- Xampp - Para testar o site através de um servidor local com o apache e o banco de dados através do phpMyAdmin.
- 000webHost - Hospedagem do site.

as linguagens utilizadas foram:
- PHP - Realizar a busca dos dados, conectar com o banco de dados e ações de server-side;
- Javascript - Dinamizar o datatable e as mensagens do SweetAlert;
- SQL - Utilizado para criar o banco.

linguagem de marcação:
- HTML5 - Criar as páginas;

folha de estilo:
- CSS3 - Estilizar as páginas, utilizado apenas para posicionar alguns elementos ou realizar alterações básicas.

Frameworks/bibliotecas
- Bootstrap - Utilizado para estilizar as páginas.
- Datatable - Bibliotecas do datatable para a criação da tabela e demais alterações na mesma.
- Jquery - dinamizar a tabela e para criação dos filtros.
- SweetAlert - Retornar mensagens mais "intimistas" para o usuário após alguma ação.
- FontAwesome - ícones para deixar o site mais intuitivo e facilitar a utilização pelo usuário.


## Modo de Funcionamento
O site é dividido em 3 páginas principais para o usuário, nelas será possível realizar todas as ações necessárias para organizar os orçamentos da oficina.

![index](https://user-images.githubusercontent.com/42790322/87993363-aa6ca580-cac0-11ea-891e-9e659c874e7a.PNG)

Essa é a tela principal do site. Nela é possível pesquisar os dados apresentados na tabela e através dos botões presentes na mesma é possível realizar as outras ações do CRUD.

O botão "Novo orçamento" irá redirecionar para a pagina "cadastro.php", tela onde será realizado os cadastros de novos orçamentos.

![cadastro](https://user-images.githubusercontent.com/42790322/87994046-69759080-cac2-11ea-9cc7-69103f55e9ae.PNG)

O botão "Deletar" retornará uma mensagem para o usuário realizar o delete.

![delete](https://user-images.githubusercontent.com/42790322/87994514-82327600-cac3-11ea-8cd7-43a3396993bb.PNG)

O botão "Editar" irá redirecionar para a página "alterar.php", esta tela terá todos os dados do orçamento a ser alterado e o usuário terá livre acesso para editar qualquer informação presente.

![editarp1](https://user-images.githubusercontent.com/42790322/87994192-beb1a200-cac2-11ea-8bce-75ecff09f2cb.PNG)
![editarp2](https://user-images.githubusercontent.com/42790322/87994203-c5401980-cac2-11ea-97eb-0f22d6bb7b2c.PNG)

Além dessas páginas, existem outras files no projeto que não são vistas diretamente pelo usuário final, são elas:
- Delete.php: Realizar a query para acontecer o delete no banco de dados e após isso retorna a mensagem com o SweetAlert;
- Update.php: Realizar a query para acontecer a atualização no banco de dados e após isso retorna a mensagem com o SweetAlert;
- Inserir.php: Realizar a query para acontecer o cadastro no banco de dados e após isso retorna a mensagem com o SweetAlert;
- Conexao.php: Dados da conexão com o banco de dados;
- Delete.js: File onde está a mensagem retornada após o delete;
- Datatable.js: File onde a datatable é construida e alterada;
- br.txt: Plug-in em forma de texto para deixar o datatable em português.

Para navegação do site é necessário utilizar os botões e filtros inseridos, para realizar as ações do CRUD, e responder as mensagens de retorno para cada ação.

## Necessidades para execução do projeto
Para facilitar a correção do teste, o site foi hospedado no seguinte link: <br>
https://testethyago.000webhostapp.com/

Para executar o projeto de forma local é de suma importância:
- Extensão do php, html5 e css (utilizei a versão 7.4 do php);
- Banco de dados (de preferência phpMyAdmin);
- Ter o php em seu pacote de variáveis;
- Um editor de texto ou uma IDE (de preferência o visual studio code);
- O servidor apache para o host local.

Os links para baixar tais ferramentas.
- [Xampp](https://www.apachefriends.org/pt_br/download.html)
- [Visual Studio Code](https://code.visualstudio.com/download)

As demais bibliotecas/ferramentas já estão importadas no próprio código, não sendo necessário baixá-las ou realizar qualquer alteração. <br>
Para uma melhor visibilidade do site, recomendo utilizar o google chrome para testá-lo.
