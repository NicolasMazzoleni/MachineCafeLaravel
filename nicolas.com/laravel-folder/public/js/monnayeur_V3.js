let nbPiece = [5, 5, 5, 5, 5, 5];

function affichePiece() {
  for (let i = 0; i < nbPiece.length; i++) {
    $('.displayCount:eq('+i+')').html(nbPiece[i]);
  }
}

function monnayeur (prix) {
  let rendu = Math.round((nbtotal - prix)*100);
  let listeRendu = ['Vos pieces : '];
  let typePiece = [200, 100, 50, 20, 10, 5];
  let pieceRendu = [0, 0, 0, 0, 0, 0];
  let indice = 0;

if ( rendu < 0 ) {
  $('#affichageChoix .boissons').html('Pas assez de sous');
} else if (rendu === 0) {
  $('#affichageChoix .boissons').html("Merci pour l'appoint, bonne boisson.");
  affichageGob();
  nbtotal = rendu;
  $('.monnaie').html(nbtotal + ' €');
} else {
  console.log('A rendre : ' + rendu/100 + '€');
  comptage();
}

function comptage () {

  while ( indice < nbPiece.length) {
    while (rendu >= typePiece[indice] && nbPiece[indice] > 0){
        rendu = (rendu - typePiece[indice]);
        pieceRendu[indice] = pieceRendu[indice] +1;
      }
    if (pieceRendu[indice] > 0) {
      listeRendu.push(pieceRendu[indice] + (' piece(s) de ' + typePiece[indice]/100 + '€'));
    }
    indice = indice + 1;
  }

  if (rendu > 0) {
    $('#affichageChoix .boissons').html('Ne pourras pas rendre la monnaie');
  } else {
        for (let i = 0; i < pieceRendu.length; i++) {
         nbPiece[i] = nbPiece[i] - pieceRendu[i];
        }

      if (prix != 0) {
        affichageGob();
      }
      affichePiece();
      Processus(listeRendu);
      nbtotal = rendu;
      $('.monnaie').html(nbtotal + ' €');
    }
  }
}

function Processus (liste) {
  for (let i = 0; i < liste.length; i++) {
    console.log(liste[i]);
  }
}



$(document).ready(function() {
  affichePiece();


  $('#btnResetMonnaie img').click(function() {
    monnayeur(0);
  });

})