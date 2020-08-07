<?php
//Il faut utilutiliser cette balise pour que le script soit interpreté

define('PLAYER1', readline("entrez le nom du joueur 1 ")); //Pour définir on peut utiliser le mot clé const (comme en JavaScript) 
const PLAYER2 = 'Toto'; // Voir la doc pour define : https://www.php.net/manual/fr/function.define.php


/* Pour définir une variable, on préfixe son nom par $ : 
https://www.php.net/manual/fr/language.variables.basics.php
*/
$player1Life = 300;
$player2Life = 300;

/**
 *  Les backtick en php n'ont rien à voir avec ceux de javascript. 
 * Ils servent à essayer d'executer des commandes shell : 
 * https://www.php.net/manual/fr/language.operators.execution.php
 */
`clear`; 
echo('/////////////////////////////////////'); // 
echo('  C\'est l\'heure du dueeeeeeeeel !');
echo('/////////////////////////////////////');
// console.log('');
while ($player1Life > 0 && $player2Life > 0) {
    //define("puissanceAttaque1", rand(0,50));
    /**
     * Les constantes ont une portée globale, ce qui veut dire qu'une fois définie elles sont accessible partout. 
     * Donc au prochain tour de boucle, PHP va se plaindre que la constante est déjà définie : 
     * https://www.php.net/manual/fr/language.constants.php
     * On ne peut donc pas définir de constante dans une boucle, on va devoir utiliser une variable
     */
    $puissanceAttaque1 = rand(0, 50);
    $puissanceAttaque2 = rand(0, 50);

    $attaque1Reussie = rand(0,100); 
    $attaque2Reussie = rand(0,100); 

    $potionLife = rand(30,90);

    /**Enchaîner les echo c'est moche (et ça résonne (c)Eve) 
     * On va utiliser un opérateur de concaténation `.`
     * Concaténer c'est « mettre bout à bout ».
    */
    echo(PLAYER1 . " " . $player1Life . " - " . PLAYER2 . " " . $player2Life);
    //echo('\n');
    echo("\n");
    // echo("PLAYER1 (${player1Life})  -  PLAYER2 (${player2Life})");
    if($player1Life < 20) {
        echo(PLAYER1 . " boit une potion et récupère " . $potionLife . " points de vie"); 
        $player1Life += $potionLife;
    } else {
        if($attaque1Reussie >= 10 ){
            echo(PLAYER1 . " attaque et enlève ${puissanceAttaque1} points de vie\n");
            $player2Life = $player2Life - $puissanceAttaque1;
        } else {
            echo(PLAYER1 . " a lamentablement échoué \n");
        }
    }
    //Pour répondre à l'étape 2, Q1 : plus juste pour player1 ,
    //On évite que le player2 attaque s'il vient de mourrir
    if($player2Life < 20) {
        echo(PLAYER2 . " boit une potion et récupère " . $potionLife . " points de vie"); 
        $player2Life += $potionLife;
 
    } else {
        if($player2Life > 0 ){    
            if($attaque2Reussie >= 10) {
                echo(PLAYER2 ." attaque et enlève ${puissanceAttaque2} points de vie\n");
                $player1Life = $player1Life - $puissanceAttaque2;
            } else {
                echo(PLAYER2 . " est gros looser qui ne sait pas attaquer\n");
            }
        }
    }
}

echo("/////////////////////////////////////\n");
echo($player1Life > 0 ? PLAYER1 : PLAYER2); 
echo(" est vainqueur");
//Pour répondre à l'étape 2, Q1 : plus juste pour player1 ,
echo($player2Life > 0 ? PLAYER2 : PLAYER1); 
echo(" est vainqueur");


if ($player1Life > 0) {
    echo("C'est un peu comme si c'est toi le joueur 1, alors bravo (même si tu n'as rien fait...).\n");
}