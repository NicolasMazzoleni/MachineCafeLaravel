let Caisse = [10, 10, 10, 10, 10, 10];	

function RendLaMonnaie(Prix, Donne) {
	let Monnaie = [200, 100, 50, 20, 10, 5];  
	let Rendu =[];
	let Solde = Donne - Prix;

	for (let i = 0; i<Monnaie.length;i++){

		while (Solde >= Monnaie[i]) {
			Rendu.push(Monnaie[i]);
			Solde-=Monnaie[i];
			Caisse [i]--;
		}
	}
	console.log(Rendu, Caisse);
}

RendLaMonnaie(150, 200);
