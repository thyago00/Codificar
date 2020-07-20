<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Tela de cadastro</title>
     <style>
  .nav-pills .nav-link:not(.active) {
    color: rgba(19, 18, 18, 0.925);;
}
.nav-pills .nav-link.active{
    background: rgb(238, 230, 230);
    color: black;
}
     </style>
</head>
<body>
<ul class="nav justify-content-end nav-pills">
  <li class="nav-item" style="padding-top: 10px">
    <a class="nav-link" href="index.php"><i class="fa fa-arrow-left">&nbsp;Voltar</i></a>
  </li>
  <li class="nav-item" style="padding: 10px 10px 0 0;">
    <a class="nav-link active" href="#">Cadastrar</a>
  </li>
</ul>
<h2 class="text-center">Cadastrar orçamento</h2>
<hr>
            <div class="container" style="width:750px;margin:0px auto">
            <form action="inserir.php" method="POST">

                  <div class="form-group">
                      <label class="control-label" for="cliente">Cliente</label>
                      <input type="text" class="form-control" name="cliente" id="cliente" required>
                  </div>

                  <div class="form-group">
                  <label class="control-label" for="vendedor">Vendedor</label>
                  <input type="text" class="form-control" name="vendedor" id="vendedor" required>
                  </div>

                  <div class="form-group">
                    <label for="data" class="control-label">Data</label>
                    <input type="datetime-local" class="form-control" name="data" id="data" required>
                  </div>

                  <div class="form-group">
                      <label class="control-label" for="inputName">Descrição</label>
                      <textarea id="editor" class ="form-control" name="descricao" id="descricao" required></textarea>
                  </div>

                  <div class="form-group"> 
                  <label class="control-label" for="valor">Valor</label>
                  <input type=number step=any class ="form-control" name="valor" id="valor" required>
                  </div>

                  <div class="form-group">
                      <div class="col text-center">
                      <button class="btn btn-success" type="submit" name="salvar">
                          Salvar
                      </button>
                      <a href="index.php" class="btn btn-danger">Cancelar</a>
                      </div>
                  </div>
                   </form>
              </div>
</body>
</html>