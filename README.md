## Descrição
Para participar do processo seletivo eu escolhi resolver o exercício número 1. O objetivo do exercício é a criação de um CRUD para facilitar o manuseamento de dados uma oficina e o monitoramento de seus orçamentos.

## Ferramentas
Para a realização do exercício eu utilizei as seguintes ferramentas:
- Visual Studio Code - Editor de código.
- Xampp - Para criação de um servidor local através do apache e o banco de dados através do mysql.
- 000webHost - Hospedagem do site.

as linguagens utilizadas foram:
- PHP - Realizar a busca dos dados, conectar com o banco de dados;
- Javascript - Dinamizar o datatable e as mensagens do SweetAlert;
- SQL - Utilizado para criar o banco.

linguagem de marcação:
- HTML5 - Criar as páginas;

folha de estilo:
- CSS3 - Estilizar as páginas, utilizado em poucos momentos apenas para posicionar alguns elementos ou realizar alterações básicas.

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

Para utilização do site deve-se utilizar os botões inseridos para realizar as ações e responder as mensagens de retorno para cada ação.

## Necessidades de execução do projeto
Para facilitar a correção do teste, o site foi hospedado no seguinte link: 
https://testethyago.000webhostapp.com/

Para executar o projeto de forma local é de suma importância:
- Extensão do php, html5 e css (utilizei a versão 7.4 do php);
- Banco de dados (de preferência phpMyAdmin);
- Ter o php em seu path de variáveis;
- Um editor de texto ou uma IDE (de preferência o visual studio code);
- O servidor apache para o host local.

Os links para baixar tais ferramentas.
[Xampp](https://www.apachefriends.org/pt_br/download.html)
[Visual Studio Code](https://code.visualstudio.com/download)

As demais bibliotecas/ferramentas já estão importadas no próprio código, não sendo necessário baixá-las ou realizar qualquer alteração.
