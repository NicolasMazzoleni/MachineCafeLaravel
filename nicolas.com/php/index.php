<?php  
$bdd = new PDO('mysql:host=localhost;dbname=machine_a_cafe', 'ilot6', 'bandanas', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
include 'function.php';
$monnaie = 0;
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>COFFEE LAND</h1>
	<!-- Appel de la fonction -->
	<?php afficheDate();?> 
	<h3>Liste des boissons disponibles:</h3>
	<?php afficheBoisson($bdd);?>

	<h3><?= "Monnaie Insérée: ".$monnaie;?></h3>
	<!-- Déclaration des radios buttons -->
	<form action="index.php" method="POST" name="formulaire">
		Choisir une boisson:<br>
		<?php choixBoisson($bdd) ?>
	</br></br>Choisir une quantitée de sucre:<br>
	<?php afficheSucre() ?>
	</br><input type="submit" value="Choisir">
</form>
<h3>Recette:</h3>
<?php 
selectBoisson();
sucre();
deductionSucre();
?>


</body>
</html>



