document.querySelector('#form-busca').onsubmit = function() {
  if (document.querySelector('#q').value == '') {
    //alert("Não pode pesquisar um campo em branco!");
    document.querySelector('#q').style.background = "red";
    return false;
  }
}

function limpaBusca() {
  document.querySelector('#q').style.background = "white";
}
document.querySelector('#form-busca').onclick = limpaBusca;

var banners = ["destaque-home.png","destaque-home-2.png"];
var bannerAtual = 0;

function trocaBanner() {
  bannerAtual = (bannerAtual+1) % banners.length;
  document.querySelector(".destaque img").src = "img/" + banners[bannerAtual];
}

var timer = setInterval(trocaBanner,2000);
var controle = document.querySelector(".pause");

controle.onclick = function() {
  if (controle.className == 'pause') {
    clearInterval(timer);
    controle.className = 'play';
  } else {
    timer = setInterval(trocaBanner,2000);
    controle.className = 'pause';
  }
}

$('.novidades').addClass('painel-compacto');
$('.mais-vendidos').addClass('painel-compacto');

$('.novidades button').click(function() {
  $('.novidades').removeClass('painel-compacto');
});
$('.mais-vendidos button').click(function() {
  $('.mais-vendidos').removeClass('painel-compacto');
});