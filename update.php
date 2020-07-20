<head>
<title>Update</title>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<?php
include_once('conexao.php');
if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $cliente = $_POST['cliente'];
    $data = $_POST['data'];
    $vendedor = $_POST['vendedor'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];

    $sql = "UPDATE tb_cadastro SET nome_cliente ='$cliente', dt_orcamento='$data', vendedor='$vendedor', descricao='$descricao',
    valor = $valor where id_cliente = $id";
    
    //Verifica se a edição foi realizada com sucesso.
    if (mysqli_query($conexao, $sql)) {
      echo '<script type="text/javascript">
      setTimeout(function() {
        swal({
            title: "Editado",
            text: "Orçamento editado com sucesso!",
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