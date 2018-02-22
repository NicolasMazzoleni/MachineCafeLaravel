var boissons;
let iBoissons = -1;


$(document).ready(function () {

    $('.choixBoisson').val(-1);

    function indexBoissons(niveaux) {
        if (niveaux == 'plus') {
            if (iBoissons < boissons.length - 1) {
                iBoissons++;
                $('.choixBoisson').val(boissons[iBoissons].id);

            }
        } else if (niveaux == 'moins') {
            if (iBoissons > 0) {
                iBoissons--;
                $('.choixBoisson').val(boissons[iBoissons].id);
            }
        }

        affichageChoix();
    }

    function affichageChoix() {


        $('.boissons').html(boissons[iBoissons].nom + '</br>' + '0,' + boissons[iBoissons].prix + '€');
        /*return drinks[iBoissons];*/
    }

    /*
    function validerChoix() {
        if (!(iBoissons == -1)) {
            let choix = drinks[iBoissons%4];
            let sucre = iSucre;
            monnayeur(objBoissons[choix].prix);
        }
    }*/
    function marginAnimate(ingHeight) {
        let margin = Number($('#Lait').css('margin-top').split('px')[0]);
        let newMargin = margin - ingHeight;
        return (newMargin + 'px');
    }

    function remplissageGob(choix) {
        let stratCafe = objBoissons[choix].ingredients[0] * 50;
        let stratChocolat = objBoissons[choix].ingredients[1] * 50;
        let stratLait = objBoissons[choix].ingredients[2] * 20;
        let stratThe = objBoissons[choix].ingredients[3] * 50;

        $('#Lait').animate({marginTop: marginAnimate(iSucre * 10)});
        $('#Sucre').animate({height: (iSucre * 10) + 'px'}, function () {

            $('#Lait').animate({marginTop: marginAnimate(stratThe)});
            $('#Thé').animate({height: (stratThe) + 'px'}, function () {

                $('#Lait').animate({marginTop: marginAnimate(stratCafe)});
                $('#Café').animate({height: (stratCafe) + 'px'}, function () {

                    $('#Lait').animate({marginTop: marginAnimate(stratChocolat)});
                    $('#Chocolat').animate({height: (stratChocolat) + 'px'}, function () {

                        $('#Lait').animate({marginTop: marginAnimate(70)});
                        $('#Eau').animate({height: '70px'}, function () {

                            $('#Lait').animate({marginTop: marginAnimate(stratLait)});
                            $('#Lait').animate({height: (stratLait) + 'px'}, function () {

                                $('.ingredients').fadeTo(1000, 0.5, function () {

                                    $('.boissons').html('Servez vous !');
                                    $('.ingredients').css('background-color', 'brown');
                                })
                            });
                        });
                    });
                });
            });
        });
    }

    function affichageGob(annule) {
        let choix = drinks[iBoissons % 4];
        $('#chargement').animate({width: '768px'}, 5000);
        $('#gobelet').fadeIn('slow', remplissageGob(choix));
        comptageStock(objBoissons[choix].ingredients);
    }


    $('#gobelet').hide();
    affichageJauges();

    $('#btnDroite').click(function () {
        indexBoissons('plus');
    });

    $('#btnGauche').click(function () {
        indexBoissons('moins');
    });

    $('#btnValider img').click(function () {

        if ($('#chargement').width() == 0) {
            validerChoix();
        }
    });

    $('#gobelet').click(function () {
        if ($('#chargement').width() == 768) {
            $('#gobelet').fadeOut('slow');
            $('#chargement').width('0px');
            $('.boissons').html('Veuillez selectionner une boisson');
            $('.ingredients').height('0');
            $('#Lait').css('margin-top', '198px');
            $('.ingredients').css('background-color', '').fadeTo(0, 1);
        }
    });

});








