<head>
<title>Update</title>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<?php
include_once('conexao.php');

// Caso seja informado o botão salvar na tela de cadastro
if (isset($_POST['salvar'])) {
    $nome = $_POST['cliente'];
    $data = $_POST['data'];
    $hora= $_POST['hora'];
    $vendedor = $_POST['vendedor'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    
        $sql = "INSERT INTO tb_cadastro (nome_cliente, dt_orcamento,hr_orcamento, vendedor, descricao, valor)
    VALUES ('$nome', '$data', '$hora, '$vendedor', '$descricao', $valor);";
        
        //Verifica se a inserção ocorreu corretamente.
        //Verifica se a edição foi realizada com sucesso.
    if (mysqli_query($conexao, $sql)) {
        echo '<script type="text/javascript">
        setTimeout(function() {
          swal({
              title: "Cadastrado",
              text: "Orçamento cadastrado com sucesso!",
              type: "success"
          }, function() {
              window.location = "index.php"; 
          });
      }, 500);
        </script>';
      } else {
              echo '<script type="text/javascript">
              setTimeout(function() {
                swal({
                    title: "Tente novamente mais tarde",
                    text: "Verifique os dados informados",
                    type: "error"
                }, function() {
                    window.location = "index.php"; 
                });
            }, 500);
              </script>';
        
      }
        mysqli_close($conexao);
    }

?>