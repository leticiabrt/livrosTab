<?php 
 include 'dados.php';
 
 $rock = array();
    foreach($dados as $chave => $item){
        if($item['estilo'] == 'rock')
            $rock[] = $item;
    }
 ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Aplicações Web II</title>
</head>

<body>
    <div class="container py-4">
        <div class="header">
            <a class="btn btn-secondary"  href="index.html">Início</a>
        </div>
        <div class="jumbotron">
                <p class="h3 text-center">Manipulação de Arrays em PHP</p>
                <div class="col-sm-12 text-center">
                <h6>Exibindo todos as pessoas cadastradas que gostam de rock.</h6>
            </div>
            </div>
        

        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
      <th scope="col">Estilo</th>
    </tr>
  </thead>
  <tbody>
  <?php 
        foreach($rock as $chave => $item):?>
        <tr>
        <td><?php echo $item['nome']?></td>
        <td><?php echo $item['idade']?></td>
        <td><?php echo $item['estilo']?></td></tr>
        <?php endforeach;?>
  </tbody>
</table>
    </div>
</body>