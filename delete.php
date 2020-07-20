<head>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<?php
include_once('conexao.php');

// Caso seja selecionado o botão delete.
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM tb_cadastro where id_cliente = $id";

    //Verifica se a query funcionou corretamente.
    if (mysqli_query($conexao, $sql)) {
        echo '<script type="text/javascript">
    setTimeout(function() {
      swal({
          title: "Deletado",
          text: "Orçamento deletado com sucesso!",
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
                    text: "Não foi possível deletar",
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