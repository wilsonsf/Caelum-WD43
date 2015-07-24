<?php
  $conexao = mysqli_connect("localhost","root","","WD43");

  $cabecalho_title = "Mirror Fashion";
  include_once("cabecalho.php"); 
?>
<div class="container destaque">
  <section class="busca">
    <h2>Busca</h2>
    
    <form id="form-busca" action="http://www.google.com.br/search">
      <input type="search" id="q" name="q">
      <input type="image" src="img/busca.png">
    </form>
  </section> <!-- fim .busca -->
  <section class="menu-departamentos">
    <h2>Departamentos</h2>
    
    <nav>
      <ul>
        <li>
          <a href="#">Blusas e Camisas</a>
          <ul>
            <li><a href="#">Manga curta</a></li>
            <li><a href="#">Manga comprida</a></li>
            <li><a href="#">Camisa social</a></li>
            <li><a href="#">Camisa casual</a></li>
          </ul>
        </li>
        <li><a href="#">Calças</a></li>
        <li><a href="#">Saias</a></li>
        <li><a href="#">Vestidos</a></li>
        <li><a href="#">Sapatos</a></li>
        <li><a href="#">Bolsas e Carteiras</a></li>
        <li><a href="#">Acessórios</a></li>
      </ul>
    </nav>
  </section> <!-- fim .menu-departamentos -->
  
  <img src="img/destaque-home.png" alt="Promoção: Big City Night">
  <a href="#" class="pause"></a>
</div> <!-- fim .container .destaque -->

<div class="container paineis">
  <section class="painel novidades painel-compacto">
    <h2>Novidades</h2>
    <ol>
      <?php 
        $dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data DESC LIMIT 12");
        while($prod = mysqli_fetch_array($dados)): ?>
      <li>
        <a href="produto.php?id=<?= $prod["id"] ?>">
          <figure>
            <img src="img/produtos/miniatura<?= $prod["id"] ?>.png" alt="<?= $prod["name"] ?>">
            <figcaption><?= $prod["name"] ?> por R$<?= $prod["preco"] ?></figcaption>
          </figure>
        </a>
      </li>
      <?php endwhile; ?>
    </ol>
    <button type="button">Mostra mais</button>
  </section> <!-- fim .painel .novidades .painel-compacto -->

  <section class="painel mais-vendidos painel-compacto">
    <h2>Mais Vendidos</h2>
    <ol>
      <?php 
        $dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY vendas DESC LIMIT 12");
        while($prod = mysqli_fetch_array($dados)): ?>
      <li>
        <a href="produto.php?id=<?= $prod["id"] ?>">
          <figure>
            <img src="img/produtos/miniatura<?= $prod["id"] ?>.png" alt="<?= $prod["name"] ?>">
            <figcaption><?= $prod["name"] ?> por R$<?= $prod["preco"] ?></figcaption>
          </figure>
        </a>
      </li>
      <?php endwhile; ?>
    </ol>
    <button type="button">Mostra mais</button>
  </section> <!-- fim .painel .mais-vendidos .painel-compacto -->
</div> <!-- fim .container .paineis -->
<script src="js/home.js"></script>
<?php include_once("rodape.php"); ?>
