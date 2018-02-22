$(document).ready(function () {
var iSucre = 0;

function indexSucre(niveaux) {
    if (niveaux == 'plus' && iSucre < 5) {
        iSucre++;
    } else if (niveaux == 'moins' && iSucre > 0) {
        iSucre = iSucre-1;
    }
    $('#ledSucres img').attr({
        "src": "assets/led" + (iSucre) + "sucres.png",

    });
}

   $('.choixSucre').val(0);
    $('#btnPlus img').click(function () {
        let current = parseInt($('.choixSucre').val());
        if (current < currentStockSucre) {
            $('.choixSucre').val(current + 1);
            indexSucre('plus');
        }
    });
    $('#btnMoins img').click(function () {
        let current = parseInt($('.choixSucre').val());
        if (current > 0) {
            $('.choixSucre').val(current - 1);
            indexSucre('moins');
        }
    });



});


