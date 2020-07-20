## Descrição
Para participar do processo seletivo eu escolhi resolver o exercício número 1. O objetivo do exercício é a criação de um CRUD para facilitar o manuseamento de dados uma oficina e o monitoramento de suas vendas.

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
O projeto começa pelo arquivo "index.php", a partir dessa página que será possível pesquisar os dados inseridos anteriormente e realizar as outras ações envolvidas em um CRUD.

exemplo:

![paginaInicial](https://user-images.githubusercontent.com/42790322/75305122-f2461400-5823-11ea-8f84-4c7ffcb6ad20.PNG)

O botão "Enviar" tem o papel de inserir os dados informados no formulário para o banco de dados.

O botão "Consulta Padrão" irá redirecionar para uma outra página com todos os dados presentes no banco de dados.

O botão "Consulta Personalizada" irá redirecionar para uma outra página onde será inserido os filtros de pesquisa na consulta do banco de dados exigidos na ordem 3.1 do exercício.

![dadosPesquisa](https://user-images.githubusercontent.com/42790322/75305939-4e119c80-5826-11ea-9fde-bc0c50028bc8.PNG)

Após inserir os filtros desejados, basta clicar em "Enviar" e será redirecionado para uma página com os dados no banco de dados.

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
