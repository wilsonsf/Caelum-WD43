<?php include_once("cabecalho.php"); ?>
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
  <section class="painel novidades">
    <h2>Novidades</h2>
    <ol>
      <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura1.png" alt="">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura2.png" alt="">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura3.png" alt="">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
      </li>
      <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura4.png" alt="">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura5.png" alt="">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura6.png" alt="">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>
    </ol>
  </section> <!-- fim .painel .novidades -->

  <section class="painel mais-vendidos">
    <h2>Mais Vendidos</h2>
    <ol>
      <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura1.png" alt="">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura2.png" alt="">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura3.png" alt="">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura4.png" alt="">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura5.png" alt="">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura6.png" alt="">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>
    </ol>
  </section> <!-- fim .painel .mais-vendidos -->
</div> <!-- fim .container .paineis -->
<script src="js/home.js"></script>
<?php include_once("rodape.php"); ?>
