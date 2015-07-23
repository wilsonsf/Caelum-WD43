<?php
  $cabecalho_title = "Produto da Mirror Fashion";
  $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">';
  include_once("cabecalho.php");
?>
  <div class="container">
    <div class="produto">
      <h1>Fuzzy Cardigan</h1>
      <p>por apenas R$129,00</p>
      
      <form>
        <fieldset class="cores">
          <legend>Escolha a cor:</legend>
          <input type="radio" name="cor" value="verde" id="verde" checked>
          <label for="verde">
            <img src="img/produtos/foto2-verde.png" alt="verde">
          </label>
          
          <input type="radio" name="cor" value="rosa" id="rosa">
          <label for="rosa">
            <img src="img/produtos/foto2-rosa.png" alt="rosa">
          </label>
          
          <input type="radio" name="cor" value="azul" id="azul">
          <label for="azul">
            <img src="img/produtos/foto2-azul.png" alt="azul">
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
      <p>Esse é o melhor casaco de Cardigã que você já viu. Excelente material italiano com estampa desenhada pelos artesãos da comunidade Krotor nas ilhas gregas. Compre já e receba hoje mesmo pela nossa entrega a jato.</p>
    </div>
  </div> <!-- fim .container -->
<?php include_once("rodape.php"); ?>
