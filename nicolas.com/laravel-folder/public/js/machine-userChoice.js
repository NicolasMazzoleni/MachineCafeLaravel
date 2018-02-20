
//2) reading function machineAcafe from the call function down below
function userChoice(boisson,nbsucre) {
  let listIng = [];
  let listTouill = ["Distribution d'une touillette"];
  let total = [];

//3) reading the switch instruction with 'The' as expression (boisson)
  switch (boisson)
  {
//4) calling the function The(nbsucre) which become equal as listIng
    case 'The' :
    listIng = The(nbsucre);
    break;
    case 'Chocolat' :
    listIng = Chocolat(nbsucre);
    break;
    case 'Capuccino' :
    listIng = Capuccino(nbsucre);
    break;
    case 'Cafe' :
    listIng = Cafe(nbsucre);
    break;
  }
//6)   
  if (nbsucre === 0)
  {
   total = total.concat(listIng);   
 }
 else 
 {
  total = total.concat(listIng, listTouill);
}

//7) calling function processus with 'total' as parameter
Processus(total);
}


function The(nbsucre) {
  let listeIng = [];
  listeIng.push('Distribution du The');
  if (nbsucre === 0){
  } 
  else if (nbsucre > 0 && nbsucre < 2){

    listeIng.push('Supplément de ' + nbsucre + " sucre");
  }
  else if (nbsucre >= 2){
    listeIng.push('Supplément de ' + nbsucre + " sucres");
  }
//5) returning the result of the function (so visible outside of the function)
  return listeIng;
}


function Chocolat(nbsucre) {
  let listeIng = [];
  listeIng.push('Distribution du Chocolat');
  if (nbsucre === 0){
  } 
  else if (nbsucre > 0 && nbsucre < 2){

    listeIng.push('Supplément de ' + nbsucre + " sucre");
  }
  else if (nbsucre >= 2){
    listeIng.push('Supplément de ' + nbsucre + " sucres");
  }
  return listeIng;
}

function Capuccino(nbsucre) {
  let listeIng = [];
  listeIng.push('Dustribution du Capuccino');
  if (nbsucre === 0){
  } 
  else if (nbsucre > 0 && nbsucre < 2){

    listeIng.push('Supplément de ' + nbsucre + " sucre");
  }
  else if (nbsucre >= 2){
    listeIng.push('Supplément de ' + nbsucre + " sucres");
  }
  return listeIng;
}

function Cafe(nbsucre) {
  let listeIng = [];
  listeIng.push('Distribution du Café');
  if (nbsucre === 0){
  } 
  else if (nbsucre > 0 && nbsucre < 2){

    listeIng.push('Supplément de ' + nbsucre + " sucre");
  }
  else if (nbsucre >= 2){
    listeIng.push('Supplément de ' + nbsucre + " sucres");
  }
  return listeIng;
}


//8) reading the function from the call action above
function Processus(Tab){
  for (let ProcessusIndex = 0;ProcessusIndex<Tab.length;ProcessusIndex++){
    console.log(Tab[ProcessusIndex]);
  }

}

// 1) call function machineAcafe with 'The' et '0' as parameters 
userChoice('The',0) 