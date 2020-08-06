<?php
define("player1", "Bobby");
define("player2" , "Bybbo"); 
$player1Life=100;
$player2Life=100;


echo '/////////////////////////////////////';
echo '  C\'est l\'heure du dueeeeeeeeel !';
echo '/////////////////////////////////////';
echo '';

while ($player1Life > 0 && $player2Life > 0) {
    define( "puissanceAttaque1" , rand (0 , 50));
    define( "puissanceAttaque2" , rand(0 , 50));

    echo('');
    echo('player1' . $player1Life   'player2' . $player2Life);

    echo('Bobby attaque et enlève puissanceAttaque1 points de vie');
    $player2Life = $player2Life - puissanceAttaque1;

    echo("Bybbo attaque et enlève ${puissanceAttaque2} points de vie");
    $player1Life = $player1Life - puissanceAttaque2;
}
// retour du vainqueur   
echo("/////////////////////////////////////");
echo($player1Life > 0 ? `${player1} est vainqueur` : ``) ;
echo($player2Life > 0 ? `${player2} est vainqueur` : ``) ;

// player1 gagnant

if ($player1Life > 0) {
    echo("C'est un peu comme si c'est toi le joueur 1, alors bravo (même si tu n'as rien fait...).");
}
?>