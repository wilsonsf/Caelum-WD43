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

setInterval(trocaBanner,4000);
