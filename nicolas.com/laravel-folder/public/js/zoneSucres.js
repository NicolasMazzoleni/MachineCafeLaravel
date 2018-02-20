let iSucre = 3;

function indexSucre(niveaux) {
	if (niveaux == 'plus' && iSucre < 5) {
        iSucre++;
    } else if (niveaux == 'moins' && iSucre > 0) {
        iSucre--;
    }
	$('#ledSucres img').attr('src', "assets/led"+(iSucre)+"sucres.png");
}

$(document).ready(function() {
	$('#btnPlus img').click(function() {
		indexSucre('plus');
	});
	$('#btnMoins img').click(function() {
		indexSucre('moins');
	});
});