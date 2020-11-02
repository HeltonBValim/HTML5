function mudaIcone(arquivo) {
    document.getElementById('icone').src="imagens/" + arquivo + ".png";
    //alert(document.getElementById('icone').src);
}

function calcTotal() {
    document.getElementById('cmpPreco').value = document.getElementById('cmpQtd').value * 1500;
}
