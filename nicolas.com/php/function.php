<?php 

//fonction qui nous affiche la date 
function afficheDate() { 
	echo "Nous sommes le ".date("l j F Y, H:i");
}



function afficheBoisson($database){
	$reponse = $database->query('SELECT boisson.nom FROM boisson
WHERE id NOT IN (SELECT boisson.id FROM boisson
	INNER JOIN recette ON boisson.id = recette.boisson_id
	INNER JOIN ingredients ON recette.ingredients_id = ingredients.id
	WHERE stock < nbdose)');
while ($donnees = $reponse->fetch()){
	echo '<li>' . $donnees['nom'];
}
}



function choixBoisson($database){
		$reponse = $database->query('SELECT boisson.nom, boisson.id FROM boisson
WHERE id NOT IN (SELECT boisson.id FROM boisson
	INNER JOIN recette ON boisson.id = recette.boisson_id
	INNER JOIN ingredients ON recette.ingredients_id = ingredients.id
	WHERE stock < nbdose)');
while ($donnees = $reponse->fetch()){
	echo '<input type="radio" name="Genre" value="'.$donnees['id'].'">'.$donnees['nom'].'</br>';
	}
}


function selectBoisson(){
	global $bdd;
	if (isset($_POST["Genre"]) && isset($_POST["Sugar"])) {
		$reponse = $bdd->prepare('SELECT ingredients.nom, recette.nbdose FROM recette
		INNER JOIN boisson ON recette.boisson_id = boisson.id
		INNER JOIN ingredients ON recette.ingredients_id = ingredients.id
		WHERE boisson.id = ?');
		$reponse -> execute(array($_POST["Genre"]));
			while ($donnees = $reponse->fetch()){
			echo '<li>'. $donnees['nom'] . ' - ' . $donnees['nbdose']. ' dose '. '</li>';
			}
	} else {
		echo "Selectionner une boisson et une quantitée de sucre.";
	}	
}

function sucre(){
    global $bdd;
    $sucre = "";
    if (isset($_POST["Genre"]) && isset($_POST["Sugar"])) {
        $sucre = "<li> sucre - ".$_POST["Sugar"].' dose'."</li>";
    }
    return $sucre;
};

function choixSucre(){
	global $bdd;
	$nbsugar = 0;

	$reponse = $bdd->query('SELECT ingredients.stock FROM ingredients
	WHERE ingredients.id = 6');
	$donnees = $reponse->fetch();
	$nbsugar = $donnees['stock'];
	return $nbsugar;
}


function afficheSucre(){
	$nbsucre = choixSucre();

for ($i=0; $i <= $nbsucre && $i <= 5; $i++) { 
	echo '<input type="radio" name="Sugar" value="'.$i.'">'.$i;
	}
}



function deductionSucre(){
global $bdd;
 if (isset($_POST["Genre"]) && isset($_POST["Sugar"])) {
        $reponse = $bdd->prepare('UPDATE ingredients
								SET stock = stock - ?
								WHERE ingredients.id = 6');
        $reponse -> execute(array($_POST["Sugar"]));
    }
}


?>