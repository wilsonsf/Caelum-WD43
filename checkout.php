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
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2>Sua compra</h2>
      </div> <!-- fim .panel-heading -->
      <div class="panel-body">
        <img src="img/produtos/foto<?= $_POST["id"]."-".$_POST["cor"]?>.png" alt="<?= $_POST["nome"] ?>" class="img-thumbnail img-responsive">
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
    <form action="">
      <fieldset>
        <legend>Dados pessoais</legend>
        <div class="form-group">
          <label for="nome">Nome completo</label>
          <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
          <label for="cpf">CPF</label>
          <input type="text" class="form-control" id="cpf" name="cpf">
        </div>

        <div class="checkbox">
          <input type="checkbox" value="sim" name="spam" id="" checked>
          <label>
            Quero receber spam da Mirror Fashion
          </label>
        </div>
      </fieldset>

      <fieldset>
        <legend>Cartão de crédito</legend>
      </fieldset>
      <button type="submit" class="btn btn-primary">
        Confirmar Pedido
      </button>
    </form>
  </div> <!-- fim .container -->
</body>
</html>
