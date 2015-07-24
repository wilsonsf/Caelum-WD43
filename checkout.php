<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Checkout Mirror Fashion</title>
  <meta name="viewport" content="width=device-width">
  <style type="text/css">
    .form-control:invalid {
      border: 1px solid #cc0000;
    }
  </style>
</head>
<body>
  <div class="jumbotron">
    <div class="container">
      <h1>Ótima escolha!</h1>
      <p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra</p>
    </div> <!-- fim .container -->
  </div> <!-- fim .jumbotron -->

  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-lg-3">
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
      </div>

      <form action="" class="col-sm-8 col-lg-9">
        <div class="row">
          <fieldset class="col-md-6">
            <legend>Dados pessoais</legend>
            
            <div class="form-group">
              <label for="nome">Nome completo</label>
              <input type="text" class="form-control" id="nome" name="nome" autofocus required>
            </div> <!-- fim .form-group -->

            <div class="form-group">
              <label for="email">Email</label>
              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" required>
              </div>
            </div> <!-- fim .form-group -->

            <div class="form-group">
              <label for="cpf">CPF</label>
              <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
            </div> <!-- fim .form-group -->

            <div class="checkbox">
              <input type="checkbox" value="sim" name="spam" id="" checked>
              <label>
                Quero receber spam da Mirror Fashion
              </label>
            </div> <!-- fim .checkbox -->
          </fieldset> <!-- fim .col-md-6 -->

          <fieldset class="col-md-6">
            <legend>Cartão de crédito</legend>

            <div class="form-group">
              <label for="numero-cartao">Número - CVV</label>
              <input type="text" class="form-control" id=" numero-cartao" name="numero-cartao" required>
            </div> <!-- fim .form-group -->

            <div class="form-group">
              <label for="bandeira-cartao">Bandeira</label>
              <select name="bandeira-cartao" id="bandeira-cartao" class="bandeira-cartao" required>
                <option value="master">MasterCard</option>
                <option value="visa">VISA</option>
                <option value="amex">American Express</option>
              </select>
            </div> <!-- fim .form-group -->

            <div class="form-group">
              <label for="validade-cartao">Validade</label>
              <input type="month" name="validade-cartao" id="validade-cartao" class="form-control" required>
            </div> <!-- fim .form-group -->
          </fieldset> <!-- fim .col-md-6 -->
        </div> <!-- fim .row -->

        <button type="submit" class="btn btn-primary btn-lg pull-right">
          <span class="glyphicon glyphicon-thumbs-up"></span>
          Confirmar Pedido
        </button> <!-- fim .btn .btn-primary .btn-lg .pull-right -->
        
      </form> <!-- fim .col-sm-8 -->

    </div> <!-- fim .row -->
  </div> <!-- fim .container -->
  <script>
    document.querySelector("input[type=email]").oninvalid = function() {
      //remove mensagem de erro antigas
      this.setCustomValidity("");

      if (!this.validity.valid) {
        this.setCustomValidity("Email inválido!");
      }
    }
  </script>
</body>
</html>
