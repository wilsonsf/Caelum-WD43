<?php
  $cabecalho_title = "Produto da Mirror Fashion";
  $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">';
  include_once("cabecalho.php");
  $conexao = mysqli_connect("localhost","root","","WD43");
  $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
  $produto = mysqli_fetch_array($dados);
?>
<div class="produto-back">
  <div class="container">
    <div class="produto">
      <h1><?= $produto["nome"] ?></h1>
      <p>por apenas R$<?= $produto["preco"] ?></p>
      
      <form action="checkout.php" method="POST">
        <input type="hidden" name="nome" value="Fuzzy Cardigan">
        <fieldset class="cores">
          <legend>Escolha a cor:</legend>
          <input type="radio" name="cor" value="verde" id="verde" checked>
          <label for="verde">
            <img src="img/produtos/foto<?= $produto["id"] ?>-verde.png" alt="verde">
          </label>
          
          <input type="radio" name="cor" value="rosa" id="rosa">
          <label for="rosa">
            <img src="img/produtos/foto<?= $produto["id"] ?>-rosa.png" alt="rosa">
          </label>
          
          <input type="radio" name="cor" value="azul" id="azul">
          <label for="azul">
            <img src="img/produtos/foto<?= $produto["id"] ?>-azul.png" alt="azul">
          </label>
        </fieldset> <!-- fim .cores -->
        <fieldset class="tamanhos">
          <legend>Escolha o tamanho:</legend>
          
          <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
        </fieldset><!-- fim .tamanhos -->
        <input type="submit" class="comprar" value="Comprar">
        
      </form>
    </div> <!-- fim .produto -->
    
    <div class="detalhes">
      <h2>Detalhes do Produto</h2>
      <p><?= $produto["descricao"] ?></p>
      <table>
        <thead>
          <tr>
            <th>Características</th>
            <th>Detalhe</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Modelo</td>
            <td>Cardigã 7845</td>
          </tr>
          <tr>
            <td>Material</td>
            <td>Algodão e poliester</td>
          </tr>
          <tr>
            <td>Cores</td>
            <td>Azul, Rosa e Verde</td>
          </tr>
          <tr>
            <td>Lavagem</td>
            <td>Lavar a mão</td>
          </tr>
        </tbody>
      </table>
    </div> <!-- fim .detalhes -->
  </div> <!-- fim .container -->
</div> <!-- fim .produto-back -->
<?php include_once("rodape.php"); ?>
