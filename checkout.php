<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Checkout Mirror Fashion</title>
  <meta name="viewport" content="width=device-width">
</head>
<body>
  <div class="jumbotron">
    <div class="container">
      <h1>Ótima escolha!</h1>
      <p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra</p>
    </div> <!-- fim .container -->
  </div> <!-- fim .jumbotron -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2>Sua compra</h2>
    </div> <!-- fim .panel-heading -->
    <div class="panel-body">
      <dl>
        <dt>Produto</dt>
        <dd><?= $_POST["nome"] ?></dd>
        <dt>Preço</dt>
        <dd><?= $_POST["preco"] ?></dd>
        <dt>Cor</dt>
        <dd><?= $_POST["cor"] ?></dd>
        <dt>Tamanho</dt>
        <dd><?= $_POST["tamanho"] ?></dd>
      </dl>
    </div> <!-- fim .panel-body -->
  </div> <!-- fim .panel .panel-default -->
</body>
</html>