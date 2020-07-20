<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Editar</title>
  <style>
    .nav-pills .nav-link:not(.active) {
      color: rgba(19, 18, 18, 0.925);
    }

    .nav-pills .nav-link.active {
      background: rgb(238, 230, 230);
      color: black;
    }
  </style>
</head>
<?php
include_once('conexao.php');
// Valor recebido do botão editar no index
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "SELECT * FROM tb_cadastro where id_cliente = $id";
  $resultado = mysqli_query($conexao, $sql) or die("Erro ao retornar dados");
  $registro = mysqli_fetch_array($resultado);
}
?>
<ul class="nav justify-content-end nav-pills">
  <li class="nav-item" style="padding-top: 15px;">
    <a class="nav-link" href="index.php"><i class="fa fa-arrow-left">&nbsp;Voltar</i></a>
  </li>
  <li class="nav-item" style="padding: 10px 10px 0 0;">
    <a class="nav-link active" href="#">Editar</a>
  </li>
</ul>

<h2 class="text-center">Editar orçamento</h2>
<hr>
<div class="container" style="width:750px;margin:0px auto">
  <form action="update.php" method="POST">
    <div class="form group">
      <label class="control-label" for="id">id</label>
      <input class="form-control" type="text" name="id" value="<?php echo $registro['id_cliente']; ?>" readonly>
    </div>

    <div class="form-group">
      <label class="control-label" for="cliente">Cliente</label>
      <input type="text" class="form-control" name="cliente" id="cliente" value="<?php echo $registro['nome_cliente']; ?>">
    </div>

    <div class="form-group">
      <label for="data" class="control-label">Data</label>
      <input type="datetime-local" class="form-control" name="data" id="data" min="1970-01-01T00:00" max="2030-01-01T00:00" value="<?php echo date("Y-m-d\TH:i:s", strtotime($registro['dt_orcamento'])) ?>">
    </div>

    <div class="form-group">
      <label class="control-label" for="vendedor">Vendedor</label>
      <input type="text" class="form-control" name="vendedor" id="vendedor" value="<?php echo $registro['vendedor']; ?>">
    </div>

    <div class="form-group">
      <label class="control-label" for="inputName">Descrição</label>
      <textarea class="form-control" name="descricao" id="descricao" style="padding: 0px !important;  margin: 0px !important; text-align: left !important;"> <?php echo $registro['descricao']; ?></textarea>
    </div>

    <div class="form-group">
      <label class="control-label" for="valor">Valor</label>
      <input type=number step=any class="form-control" name="valor" id="valor" value="<?php echo $registro['valor']; ?>">
    </div>

    <div class="form-group">
      <div class="col text-center">
        <button class="btn btn-primary" type="Editar" name="editar">
          Editar
        </button>
        <a href="index.php" class="btn btn-danger">Cancelar</a>
      </div>
    </div>
  </form>
</div>