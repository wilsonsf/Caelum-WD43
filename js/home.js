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
