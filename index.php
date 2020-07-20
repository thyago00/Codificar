<?php
require_once('conexao.php');
 
$sql = "SELECT * FROM tb_cadastro order by dt_orcamento desc";
$resultado = $conexao->query($sql);
$registro = [];
if ($resultado->num_rows > 0) {
    $registro = $resultado->fetch_all(MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página inicial</title>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 
</head>
<body>

<h2 style="text-align: center;">Pesquisa de orçamentos</h2>
<div class="col text-right" style="padding-bottom: 5px">
<a href="cadastro.php" class="btn btn-success" style= "font-family:Arial; font-size: 14px;"><i class="fa fa-plus">&nbsp;Novo Orçamento&nbsp;</i></a>
</div>
    <table id="tabelaOrcamentos" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>Data e Hora</th>
            <th>Cliente</th>
            <th>Vendedor</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
            <?php if(!empty($registro)) { ?>
                <?php foreach($registro as $dados) {
                    ?>
                    <tr>
                         <!-- Recebe todos os valores informados. -->
                        <td data-order=<?php $dados['dt_orcamento'];?>>
                        <?php echo date("d/m/Y — H:i", strtotime($dados['dt_orcamento'])); ?> 
                        </td>
                        <td> <?php echo $dados['nome_cliente']; ?> </td>
                        <td> <?php echo $dados['vendedor']; ?></td>
                        <td> R$ <?php echo $dados['valor']; ?></td>
                        <td> <?php echo $dados['descricao']; ?></td>
                        <td>
                            <!-- Botões para editar ou deletar. -->
                            <a href="alterar.php?id=<?php echo $dados['id_cliente']; ?>" class="btn btn-primary"><i class="fa fa-edit">&nbsp;Editar</i></a>
                            <a id="deletar" href="delete.php?delete=<?php echo $dados['id_cliente']; ?>" class="btn btn-danger"><i class="fa fa-trash">&nbsp;Deletar</i></a>
                        </td>
                    </tr>
                <?php } ?>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Data</th>
                <th>Cliente</th>
                <th>Vendedor</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th></th>
            </tr>
        </tfoot>
    </table>

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    
    <script src="delete.js"></script>
    <script src="datatable.js"></script>
</body>
</html>
