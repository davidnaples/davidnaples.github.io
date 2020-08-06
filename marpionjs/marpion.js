'use strict';

// fabriquer la grille (3 x 3 cases)
const grille = [[' ', ' ', ' '], [' ', ' ', ' '], [' ', ' ', ' ']];
let ligneCourante;

console.clear();

// Propose au joueur de choisir une case vide jusqu'à ce que la partie soit terminée
while(!gagnant(grille)) { // Tant que "pas" de gagnant
	afficheGrille(grille);
    // TODO: Demander au joueur de jouer
	let x = 1;
	let y = 2;
	// On inverse les coordonnées car par construction cela permet de représenter VISUELLEMENT les coordonnées abscisses/ordonnées

	grille[y][x] = 'x';
	afficheGrille(grille);
	console.log(x, y);
}


console.log('terminé');

// Affiche notre grille de manière plus lisible
function afficheGrille(grille) {
	console.clear();
	for(let ligne=0 ; ligne<3 ; ligne++) {
		ligneCourante = grille[ligne];
		console.log(`  ${ligneCourante[0]}  |  ${ligneCourante[1]}  |  ${ligneCourante[2]}  `);
		// console.log(grille[ligne][0]);
		// console.log(ligneCourante[0]);
	}
}

// Retourne 1, 2 ou false selon qui a gagné  (voir les "pure functions")
function gagnant(grille) {
	// TODO : pour le moment j1 gagne si une case n'est pas vide.
	if(grille[0][0] !== ' ' ||
		 grille[0][1] !== ' ' ||
		 grille[0][1] !== ' ' ||
		 grille[1][0] !== ' ' ||
		 grille[1][1] !== ' ' ||
		 grille[1][2] !== ' ' ||
		 grille[2][0] !== ' ' ||
		 grille[2][1] !== ' ' ||
		 grille[2][2] !== ' '
		) {
		
		return 1;
	}
	return false;
}