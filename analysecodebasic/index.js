
//delaration des constantes

const player1 = 'Bobby';
const player2 = 'Bybbo';
let player1Life = 100;
let player2Life = 100;

// ecriture du texe 

console.clear();
console.log('/////////////////////////////////////');
console.log('  C\'est l\'heure du dueeeeeeeeel !');
console.log(`/////////////////////////////////////`);
console.log('');

//boucle

while (player1Life > 0 && player2Life > 0) {
    const puissanceAttaque1 = Math.floor(Math.random() * 50);
    const puissanceAttaque2 = Math.floor(Math.random() * 50);

    console.log('');
    console.log(`${player1} (${player1Life})  -  ${player2} (${player2Life})`);

    console.log(`Bobby attaque et enlève ${puissanceAttaque1} points de vie`);
    player2Life = player2Life - puissanceAttaque1;
//et si on inverse ?
    console.log(`Bybbo attaque et enlève ${puissanceAttaque2} points de vie`);
    player1Life = player1Life - puissanceAttaque2;

}


// retour du vainqueur
console.log("/////////////////////////////////////");
console.log(player1Life > 0 ? `${player1} est vainqueur` : ``) ;
console.log(player2Life > 0 ? `${player2} est vainqueur` : ``) ;



// player1 gagnant

if (player1Life > 0) {
    console.log("C'est un peu comme si c'est toi le joueur 1, alors bravo (même si tu n'as rien fait...).")
}