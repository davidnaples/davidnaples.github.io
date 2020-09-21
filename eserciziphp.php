<?php

//L'extension pour avoir des blocks de commentaires pré-formatés : PHP DocBlocker

/*-----------------------------------------------
 Exercice 1 : Fonction qui retourne Hello World!
 Faite en sorte que la fonction HelloWorld retourne exactement la valeur Hello World!
-------------------------------------------------*/
/**
 * Fonction qui retourne Hello World!
 *
 * @return string
 */
function HelloWorld(): string {
    return "Hello World!"; 
}
echo("Execice 1 : helloWorld\n");
//Test de la fonction : 
echo(HelloWorld() . "\n"); 
echo("\n"); 

/*-----------------------------------------------
 Exercice 2 : Qui est le meilleur prof ?
 Créer une fonction from scratch qui s'appelle quiEstLeMeilleurProf(). Elle doit retourner Le prof de programmation Web
-------------------------------------------------*/

/**
 * Fonction qui retourne la chaîne "Le prof de programmation Web, mais surtout Nico (ou Renaud, ça dépend des jours";
 *
 * @return string
 */
function  quiEstLeMeilleurProf(): string {
    return "Le prof de programmation Web, mais surtout Nico (ou Renaud, ça dépend des jours)";
}

echo("Exercice 2 : quiEstLeMeilleurProf\n");
//Test de la fonction 
echo quiEstLeMeilleurProf() . "\n"; 
echo("\n"); 

/*-----------------------------------------------
 Exercice 3 : Retourne ton argument
 Créer une fonction from scratch qui s'appelle jeRetourneMonArgument(). Exemple : Arg = "abc" ==> Return abc Arg = 123 ==> Return 123
-------------------------------------------------*/
/**
 * Fonction qui retourne l'argument qu'on lui passe.
 *
 * @param mixed $arg l'argument à retourner 
 * @return mixed
 */
function jeRetourneMonArgument( $arg ) {
    return $arg;
}

echo("Exercice 3  : jeRetourneMonArgument(123); & jeRetourneMonArgument('abc'); \n");

// Test de la fonction : 
echo jeRetourneMonArgument(123) ."\n";
echo jeRetourneMonArgument('abc') ."\n";
echo("\n"); 

/*-----------------------------------------------
 Exercice 4, Concatenation
 Créer une fonction from scratch qui s'appelle concatenation(). 
 Elle prendra deux arguments de type string. 
 Elle devra retourner la concatenation des deux. Exemple : argument 1 = Antoine Argument 2 = Griezmann; Resultat : AntoineGriezmann
-------------------------------------------------*/
/**
 * Concatène les deux chaînes données en arguments.
 *
 * @param string $arg1
 * @param string $arg2
 * @return string la concaténation des deux chaînes passées en paramètre. 
 */
function concatenation(string $arg1, string $arg2) : string {
    return $arg1 . $arg2;
}

echo('Exercice 4  : concatenation("Antoine", "Griezmann");' . "\n");

$arg1 = "Antoine";
$arg2 = "Griezmann"; 
$chaineConcatenee = concatenation($arg1, $arg2); 
echo("\n");
echo($chaineConcatenee);
echo("\n");

// Autre façon d'appeler la fonction : 
echo concatenation("Antoine", "Griezmann") . "\n";
echo("\n"); 



/*-----------------------------------------------
 Exercice 5, Concatenation avec espace
 Créer une fonction from scratch qui s'appelle concatenationAvecEspace().
 Elle prendra deux arguments de type string. 
 Elle devra retourner la concatenation des deux. 
 Exemple : argument 1 = Ngolo Argument 2 = Kante; Resultat : Ngolo Kante
-------------------------------------------------*/

/**
 * Concatène les deux chaînes données en arguments en les séparant par un espace.
 *
 * @param string $arg1
 * @param string $arg2
 * @return string la concaténation des deux chaînes passées en paramètre avec un espace entre les 2. 
 */
function concatenationAvecEspace(string $arg1, string $arg2): string {
    return $arg1 . " " . $arg2;
}

echo('Exercice 5 : concatenationAvecEspace("Ngolo", "Kante");' . "\n");
echo concatenationAvecEspace("Ngolo", "Kante") . "\n";
echo("\n"); 

/*-----------------------------------------------//
 Exercice 6, Somme
 Créer une fonction from scratch qui s'appelle somme(). 
 Elle prendra deux arguments de type int. 
 Elle devra retourner la somme des deux. 
 Exemple : argument 1 = 5 Argument 2 = 5 ; Resultat : 10
-------------------------------------------------*/

/**
 * Effectue la somme des deux nombres passés en paramètre. 
 *
 * @param int $arg1
 * @param int $arg2
 * @return int la somme des 2 entiers passés en paramètre. 
 */
function somme(int $arg1, int $arg2): int {
    return $arg1 + $arg2;
}
echo("Exercice 6 : somme(5, 5); \n"); 
echo somme(5, 5) . "\n";
echo("\n"); 

/*-----------------------------------------------
 Exercice 7, Soustraction
 Créer une fonction from scratch qui s'appelle soustraction(). 
 Elle prendra deux arguments de type int. 
 Elle devra retourner la soustraction des deux. 
 Exemple : argument 1 = 5 Argument 2 = 5 ; Resultat : 0
-------------------------------------------------*/
/**
 * Renvoi le résultat de la soustraction du second argument au premier
 *
 * @param integer $x 
 * @param integer $y l'entier à soustraire à $x
 * @return integer le résultat de la soustraction $x - $y
 */
function soustraction(int $x, int $y): int {
    return $x - $y; 
}
echo("Exercice 7 : soustraction(5,5,) \n");
echo soustraction(5, 5) . "\n";
echo("\n"); 

/*-----------------------------------------------
 Exercice 8, multiplication
 Créer une fonction from scratch qui s'appelle multiplication(). 
 Elle prendra deux arguments de type int. 
 Elle devra retourner la multiplication des deux. 
 Exemple : argument 1 = 5 Argument 2 = 5 ; Resultat : 25
------------------------------------------------*/

/**
 * Effectue la multiplication des 2 nombres passés en paramètre. 
 *
 * @param integer $x
 * @param integer $y
 * @return integer le résultat de la multiplication
 */
function multiplication(int $x, int $y): int {
    return $x * $y; 
}
echo("Exercice 8 : multiplication(5,5); \n");
echo multiplication(5,5) . "\n";
echo("\n"); 

/*-----------------------------------------------
  Exercice 9, majeur
  Créer une fonction from scratch qui s'appelle estIlMajeure(). 
  Elle prendra un argument de type int. 
  Elle devra retourner un boolean. 
  Si age >= 18 elle doit retourner true si age < 18 elle doit retourner false 
  Exemple : age = 5 ==> false age = 34 ==> true
-------------------------------------------------*/
/**
 * Indique si l'âge donné en paramètre correspond à une personne majeure. 
 *
 * @param integer $age : l'aĝe à tester
 * @return boolean TRUE si l'âge est supérieur ou égal à 18, FALSE sinon
 */
function estIlMajeure(int $age): bool {
    return $age>=18;
}

echo("Exercice 9 : estIlMajeure(5) & estIlMajeure(35)\n");

$message = estIlMajeure(5) ?  "Il est majeur" : "Il est mineur, qu'il retourne à la mine";  
echo("$message\n");
$message = estIlMajeure(35) ?  "Il est majeur" : "Il est mineur, qu'il retourne à la mine";  
echo("$message\n");
echo("\n"); 

/*-----------------------------------------------
  Exercice 10, Plus Grand
  Créer une fonction from scratch qui s'appelle plusGrand(). 
  Elle prendra deux arguments de type int. 
  Elle devra retourner le plus grand des deux
-------------------------------------------------*/
/**
 * Trouve la valeur la plus grande des 2 valeurs données en paramètre. 
 * 
 * @param integer $a
 * @param integer $b
 * @return integer la valeur la plus grande. 
 */
function plusGrand(int $a, int $b): int {
    if($a > $b ) {
        return $a;
    } else {
        return $b;
    } 
}


/**
 * Trouve la valeur la plus grande des 2 valeurs données en paramètre. 
 * Fonction identique à la fonction précédente, seule la syntaxe change
 * @param integer $a
 * @param integer $b
 * @return integer la valeur la plus grande. 
 */
function plusGrandV2(int $a, int $b): int {
    return $a > $b ? $a : $b; 
}


/**
 * Trouve la valeur la plus grande des 2 valeurs données en paramètre. 
 * Utilise la foncotin max https://www.php.net/manual/fr/function.max.php
 * @param integer $a
 * @param integer $b
 * @return integer la valeur la plus grande. 
 */
function plusGrandV3(int $a, int $b): int {
    return max($a, $b);
}

echo ("Exercice 10 : plusGrand(8,12)\n");
echo plusGrand(8,12) . "\n";
echo("\n"); 

/*-----------------------------------------------
  Exercice 11, Plus Petit
  Créer une fonction from scratch qui s'appelle plusPetit(). 
  Elle prendra deux arguments de type int. 
  Elle devra retourner le plus petit des deux.
-------------------------------------------------*/

/**
 * Trouve la valeur la plus grande des 2 valeurs données en paramètre. 
 *
 * @param integer $a
 * @param integer $b
 * @return int la valeur la plus petite. 
 */
function plusPetit(int $a, int $b): int {
    return $a < $b ? $a : $b; 
}

echo("Exercice 11 : plusPetit(8,12)\n");
echo plusPetit(8,12) . "\n";
echo("\n"); 

/*-----------------------------------------------
  Exercice 12, Plus Petit
  Créer une fonction from scratch qui s'appelle plusPetit(). 
  Elle prendra trois arguments de type int. 
  Elle devra retourner le plus petit des trois.
-------------------------------------------------*/

/**
 * Trouve et renvoi le plus petit des 3 arguments. Codé sans utiliser de fonction
 *
 * @param integer $a
 * @param integer $b
 * @param integer $c
 * @return integer le plus petit des 3 arguments
 */
function plusPetitExo12V1(int $a, int $b, int $c): int {
    if($a <= $b && $a <= $c ) return $a ; 
    if($b <= $c && $b <= $c ) return $b; 
    return $c;
}

/**
 * Trouve et renvoi le plus petit des 3 arguments en utilisant la fonction min. 
 * https://www.php.net/manual/fr/function.min.php
 *
 * @param integer $a
 * @param integer $b
 * @param integer $c
 * @return integer le plus petit des 3 arguments
 */
function plusPetitExo12V2(int $a, int $b, int $c): int {
    return min($a, $b, $c); 
}

/**
 * Trouve et renvoi le plus petit des 3 arguments en utilisant la fonction plusPetit définie précédement
 * @param integer $a
 * @param integer $b
 * @param integer $c
 * @return integer le plus petit des 3 arguments
 */
function plusPetitExo12V3(int $a, int $b, int $c): int {
    return plusPetit(plusPetit($a, $b), plusPetit($a, $c)); 
}

echo("Exercice 12 : plusPetitExo12V1(1,6,8) & plusPetitExo12V1(8,1,6) & plusPetitExo12V1(6,8,1)\n"); 
echo plusPetitExo12V1(1,6,8) . "\n"; 
echo plusPetitExo12V1(8,1,6) . "\n";
echo plusPetitExo12V1(6,8,1) . "\n";

echo("Exercice 12 : plusPetitExo12V2(1,6,8) & plusPetitExo12V2(8,1,6) & plusPetitExo12V2(6,8,1)\n"); 
echo plusPetitExo12V2(1,6,8) . "\n"; 
echo plusPetitExo12V2(8,1,6) . "\n";
echo plusPetitExo12V2(6,8,1) . "\n";

echo("Exercice 12 : plusPetitExo12V3(1,6,8) & plusPetitExo12V3(8,1,6) & plusPetitExo12V3(6,8,1)\n"); 
echo plusPetitExo12V3(1,6,8) . "\n"; 
echo plusPetitExo12V3(8,1,6) . "\n";
echo plusPetitExo12V3(6,8,1) . "\n";
echo("\n"); 

/*-----------------------------------------------
  Exercice 13, Premier element dans un array
  Créer une fonction from scratch qui s'appelle premierElementTableau(). 
  Elle prendra un argument de type array. 
  Elle devra retourner le premier élement du tableau. 
  Si l'array est vide, il faudra retourner null;
-------------------------------------------------*/

/**
 * Renvoi le premier élément d'un tableau
 *
 * @param array $tab le tableau dont veut récupérer le premier élément
 * @return mixed le premier élément du tableau ou null si le tableau est vide
 */
function premierElementTableau(array $tab) {
    return sizeof($tab) === 0 ? null : $tab[0]; 
}

/**
 * Renvoi le premier élément d'un tableau. Utilise la fonction array_shift. 
 * https://www.php.net/manual/fr/function.array-shift.php
 *
 * @param array $tab le tableau dont veut récupérer le premier élément
 * @return mixed le premier élément du tableau ou null si le tableau est vide
 */
function premierElementTableauV2(array $tab) {
    return array_shift($tab); 
}

echo('Exercice 13: premierElementTableau(["firstElement",1,2])'."\n");
echo premierElementTableau(["firstElement",1,2]) . "\n";

echo('Exercice 13: premierElementTableauV2(["firstElement",1,2])'."\n");
echo premierElementTableauV2(["firstElement",1,2]) . "\n";
echo("\n"); 

/*-----------------------------------------------
  Exercice 14, Dernier element dans un array
 Créer une fonction from scratch qui s'appelle dernierElementTableau(). 
 Elle prendra un argument de type array. Elle devra retourner le dernier élement du tableau. 
 Si l'array est vide, il faudra retourner null;
-------------------------------------------------*/

/**
 * Renvoi le dernier élément d'un tableau
 *
 * @param array $tab le tableau dont veut récupérer le dernier élément
 * @return mixed le dernier élément du tableau ou null si le tableau est vide
 */
function dernierElementTableau(array $tab) {
    return sizeof($tab) === 0 ? null : $tab[sizeof($tab) - 1]; 
}

/**
 * Renvoi le dernier élément d'un tableau. Utilise la fonction array_pop. 
 * https://www.php.net/manual/fr/function.array-pop.php
 *
 * @param array $tab le tableau dont veut récupérer le dernier élément
 * @return mixed le dernier élément du tableau ou null si le tableau est vide
 */
function dernierElementTableauV2(array $tab) {
    return array_pop($tab); 
}

echo('Exercice 14: dernierElementTableau(["firstElement",1,2])'."\n");
echo dernierElementTableau(["firstElement",1,2]) . "\n";

echo('Exercice 14: dernierElementTableauV2(["firstElement",1,2])'."\n");
echo dernierElementTableauV2(["firstElement",1,2]) . "\n";
echo("\n"); 

/*-----------------------------------------------
  Exercice 15, Plus grand dans un array
  Créer une fonction from scratch qui s'appelle plusGrand(). 
  Elle prendra un argument de type array. 
  Elle devra retourner le plus grand des élements présent dans l'array. 
  Si l'array est vide, il faudra retourner null;
-------------------------------------------------*/

/**
 * Cherche et retrouve le nombre le plus grand d'un tableau. 
 *
 * @param array $tab
 * @return mixed renvoi la valeur la plus grande du tableau ou null si le tableau est vide. 
 */
function plusGrandExo15(array $tab) {
    $max = null; 
    foreach($tab as $val) {
        if($val > $max ) {
            $max = $val; 
        }
    }
    return $max; 
}

/**
 * Cherche et retrouve le nombre le plus grand d'un tableau. Utilise la fonction max
 *
 * @param array $tab
 * @return mixed renvoi la valeur la plus grande du tableau ou null si le tableau est vide. 
 */
function plusGrandExo15V2(array $tab) {
    return emtpy($tab) ? null : max($tab);
}

/**
 * Cherche et retrouve le nombre le plus grand d'un tableau. Utilise la fonction plusGrand précédement définie
 *
 * @param array $tab
 * @return mixed renvoi la valeur la plus grande du tableau ou null si le tableau est vide. 
 */
function plusGrandExo15V3(array $tab) {
    $max = null; 
    foreach($tab as $val) {
        $max = plusGrand($val, $max === null ? 0 : $max); 
    }
    return $max;
}

echo("Exercice 15 : plusGrandExo15([8,2,6])\n");
echo plusGrandExo15([8,2,6]) . "\n";

echo("Exercice 15 : plusGrandExo15V2([8,2,6])\n");
echo plusGrandExo15V2([8,2,6]) . "\n";

echo("Exercice 15 : plusGrandExo15V3([8,2,6])\n");
echo plusGrandExo15V3([8,2,6]) . "\n";
echo("\n"); 


/*-----------------------------------------------
  Exercice 16, Plus petit dans un array
  Créer une fonction from scratch qui s'appelle plusPetit(). 
  Elle prendra un argument de type array. 
  Elle devra retourner le plus petit des élements présent dans l'array. 
  Si l'array est vide, il faudra retourner null;
-------------------------------------------------*/

/**
 * Cherche et retrouve le nombre le plus petit d'un tableau. 
 *
 * @param array $tab
 * @return mixed renvoi la valeur la plus petite du tableau ou null si le tableau est vide. 
 */
function plusPetitExo16(array $tab) {
    $min = null; 
    foreach($tab as $val) {
        if($val < $min  || $min === null) {
            $min = $val; 
        }
    }
    return $min; 
}

/**
 * Cherche et retrouve le nombre le plus petit d'un tableau. Utilise la fonction min
 *
 * @param array $tab
 * @return mixed renvoi la valeur la plus petite du tableau ou null si le tableau est vide. 
 */
function plusPetitExo16V2(array $tab) {
    return min($tab);
}

/**
 * Cherche et retrouve le nombre le plus petit d'un tableau. Utilise la fonction plusPetit précédement définie
 *
 * @param array $tab
 * @return mixed renvoi la valeur la plus petite du tableau ou null si le tableau est vide. 
 */
function plusPetitExo16V3(array $tab) {
    $min = null; 
    foreach($tab as $val) {
        $min = plusPetit($val, $min === null ? 0 : $min);
    }
    return $min;
}

echo("Exercice 16 : plusPetitExo16([8,2,6])\n");
echo plusPetitExo16([8,2,6]). "\n";

echo("Exercice 16 : plusPetitExo16V2([8,2,6])\n");
echo plusPetitExo16V2([8,2,6]) . "\n";

echo("Exercice 16 : plusPetitExo16V3([8,2,6])\n");
echo plusPetitExo16V3([8,2,6]) . "\n";
echo("\n"); 

/*-----------------------------------------------
  Exercice 17, Mot de passe trop court
  Créer une fonction from scratch qui s'appelle verificationPassword(). 
  Elle prendra un argument de type string. 
  Elle devra retourner un boolean qui vaut true si le password fait au moins 8 caractères et false si moins.
-------------------------------------------------*/

/**
 * Vérfie qu'un mot de passe fait au moins 8 caractères. 
 *
 * @param string $motdepasse le mot de passe à tester
 * @return boolean TRUE si le mot de passe fait au moins 8 caractère, FALSE sinon. 
 */
function verificationPassword(string $motdepasse): bool {
    return strlen($motdepasse) >= 8; 
}   

echo("Exercice 17 : verificationPassword('1234567') & verificationPassword('12345678')\n");

$message = verificationPassword('1234567') ?  "Yes, bon mot de passe." : "Ce sont les blagues les plus courtes les meilleurs, pas les mots de passe";  
echo("$message\n");
$message = verificationPassword('12345678') ?  "Yes, bon mot de passe." : "Ce sont les blagues les plus courtes les meilleurs, pas les mots de passe";
echo("$message\n");
echo("\n"); 

/*-----------------------------------------------
  Exercice 18, Mot de passe secure
  Créer une fonction from scratch qui s'appelle verificationPassword(). 
  Elle prendra un argument de type string. 
  Elle devra retourner un boolean qui vaut true si le password respecte les règles suivantes :
   - Faire au moins 8 caractères
   - Avoir au moins 1 chiffre
   - Avoir au moins une majuscule et une minuscule
-------------------------------------------------*/

/**
 * Vérfie qu'un mot de passe fait au moins 8 caractères. 
 * Ici on utilise les expressions régulières : https://www.php.net/manual/fr/book.pcre.php
 * avec la fonction preg_match : https://www.php.net/manual/fr/function.preg-match.php
 * et des modificateurs qui permettent de chercher des majuscules ou miniscules : https://www.php.net/manual/fr/regexp.reference.unicode.php
 * (mais ça marche pas tip-top comme on peut le voir avec des mots-passe contenant un caractère minuscule accentué)
 * @param string $motdepasse le mot de passe à tester
 * @return boolean TRUE si le mot de passe fait au moins 8 caractère, contient au moins un chiffre, et au moins une minuscule et une majuscule ; FALSE sinon. 
 */
function verificationPasswordExo18(string $motdepasse): bool {
    return strlen($motdepasse) >= 8 && preg_match("/[0-9]/", $motdepasse) === 1 && preg_match("/\p{Lu}/", $motdepasse) === 1 && preg_match("/\p{lL}/", $motdepasse) === 1 ; 
    //On aurait pu remplacer l'utilisation des modificateurs par des intervals ([a-z][A-Z]), mais ça ne prend pas en compte les caractères accentués. 
    //On aurait aussi pu remplacer les modificateur par les classes de caractères POSIX : [:lower:] & [:upper:] mais les accents ne sont toujours pas pris en compte
    //return strlen($motdepasse) >= 8 && preg_match("/[0-9]/", $motdepasse) === 1 && preg_match("/[[:lower:]]/", $motdepasse) === 1 && preg_match("/[[:upper:]]/", $motdepasse) === 1 ; 
}   

/**
 * Vérfie qu'un mot de passe fait au moins 8 caractères. Sans expression régulière. 
 * Ne prend pas en compte les caractères accentués. 
 * Trouvée par Yamina sur developpez.com
 *
 * @param string $motdepasse
 * @return boolean
 */
function verificationPasswordExo18V2(string $motdepasse): bool {
    $lg = strlen($motdepasse); 
    //On renvoi faux directement si le mot de passe n'est pas assez long pour gagner en temps de calcul
    if($lg < 8) { return false; }
    $hasMin = false;
    $hasMax = false; 
    $hasNum = false; 
    for($i=0; $i < $lg; $i++) {
        if(is_int(intval($motdepasse[$i]))) {
            $hasNum = true;
        }
        if ($motdepasse[$i] >= "a" && $motdepasse[$i] <= "z") {
            $hasMin = true; 
        } 
        if ($motdepasse[$i] >= "A" && $motdepasse[$i] <= "Z") {
            $hasMax = true; 
        }
    } 
    return $hasMin && $hasMax && $hasNum; 

}

echo("Exercice 18 : verificationPasswordExo18('1234567a') & verificationPasswordExo18('12345678Àe') & verificationPasswordExo18('12345678Aé') & verificationPasswordExo18('12345678Ae')\n");

$pass = '1234567a';
$message = verificationPasswordExo18($pass) ?  "Yes, bon mot de passe." : "Ce mot de passe est aussi sécurisé qu'une fenêtre en papier";  
echo("$pass : $message\n");
$pass = '12345678Àe';
$message = verificationPasswordExo18($pass) ?  "Yes, bon mot de passe." : "Ce mot de passe est aussi sécurisé qu'une fenêtre en papier";
echo("$pass : $message\n");
$pass = '12345678Aé';
$message = verificationPasswordExo18($pass) ?  "Yes, bon mot de passe." : "Ce mot de passe est aussi sécurisé qu'une fenêtre en papier";
echo("$pass : $message\n");
$pass = '12345678Ae';
$message = verificationPasswordExo18($pass) ?  "Yes, bon mot de passe." : "Ce mot de passe est aussi sécurisé qu'une fenêtre en papier";
echo("$pass : $message\n");
echo("\n"); 

echo("Exercice 18 : verificationPasswordExo18V2('1234567a') & verificationPasswordExo18V2('12345678Àe') & verificationPasswordExo18V2('12345678Aé') & verificationPasswordExo18V2('12345678Ae')\n");

$pass = '1234567a';
$message = verificationPasswordExo18V2($pass) ?  "Yes, bon mot de passe." : "Ce mot de passe est aussi sécurisé qu'une fenêtre en papier";  
echo("$pass : $message\n");
$pass = '12345678Àe';
$message = verificationPasswordExo18V2($pass) ?  "Yes, bon mot de passe." : "Ce mot de passe est aussi sécurisé qu'une fenêtre en papier";
echo("$pass : $message\n");
$pass = '12345678Aé';
$message = verificationPasswordExo18V2($pass) ?  "Yes, bon mot de passe." : "Ce mot de passe est aussi sécurisé qu'une fenêtre en papier";
echo("$pass : $message\n");
$pass = '12345678Ae';
$message = verificationPasswordExo18V2($pass) ?  "Yes, bon mot de passe." : "Ce mot de passe est aussi sécurisé qu'une fenêtre en papier";
echo("$pass : $message\n");
echo("\n"); 

/*-----------------------------------------------
Exercice 19, Quelle capitale ?
Créer une fonction from scratch qui s'appelle capital(). Elle prendra un argument de type string. 
Elle devra retourner le nom de la capitale des pays suivants :
   - France ==> Paris
   - Allemagne ==> Berlin
   - Italie ==> Rome
   - Maroc ==> Rabat
   - Espagne ==> Madrid
   - Portugal ==> Lisbonne
   - Angleterre ==> Londres
   - Tout autre pays ==> Inconnu
-------------------------------------------------*/

/**
 * Indique la capitale d'un pays
 *
 * @param string $pays le pays dont on souhaite obtenir la capitale
 * @return string la capitale du pays donné, ou inconnu si le pays ne fait pas parti de la liste. 
 */
function capital(string $pays) : string {
    $capitale = null;
    switch($pays) {
        case "France": $capitale = "Paris"; 
            break;  
        case "Allemagne": $capitale = "Berlin"; 
            break; 
        case "Italie": $capitale = "Rome"; 
            break; 
        case "Maroc": $capitale = "Rabat"; 
            break; 
        case "Espagne": $capitale = "Madrid"; 
            break; 
        case "Portugal": $capitale = "Lisbonne"; 
            break; 
        case "Angleterre": $capitale = "Londres"; 
            break; 
        default: $capitale = "Inconnu";
    }
    return $capitale; 
}

echo("Exercice 19 : capital('France') & capital('Japon') \n");
$pays = "France";
echo "La capitale de $pays est " . capital($pays) . "\n";
$pays = "Japon";
echo "La capitale de $pays est " . capital($pays) . "\n";
echo("\n"); 

/*-----------------------------------------------
Exercice 20, Liste
Créer une fonction from scratch qui s'appelle listHTML(). Elle prendra deux arguments :

    - Un string représentant le nom de la liste
    - Un array représentant les élements de cette liste
Elle devra retourner une liste HTML. Chaque element de cette liste viendra du tableau passé en paramètre.

Exemple : 
    Paramètre : 
        - Titre : Capitale 
        - Liste : ["Paris", "Berlin", "Moscou"] 
    Résultat : <h3>Capitale</h3><ul><li>Paris</li><li>Berlin</li><li>Moscou</li></ul>

Comme vous pouvez le voir il n'y a pas d'espace ni de retour à la ligne entre les élements de la liste. 
Pas d'espace non plus entre le titre et la liste.
Si le titre est null et vide il faut que la fonction retourne null. 
Si l'array est vide, il faut que la fonction retourne null.
-------------------------------------------------*/

/**
 * Renvoi une chaîne de caractère representant du code HTML composé d'un titre de niveau et d'une liste d'éléments non ordonnés.
 *
 * @param string $titre
 * @param array $elements
 * @return string Renvoi une chaîne de caractère representant du code HTML composé d'un titre de niveau et d'une liste d'éléments non ordonnés ; ou null si le titre est vide ou null ou si la liste d'éléments est vide
 */
function listHTML(?string $titre, array $elements): ?string {
    if(is_null($titre) || empty($titre) || sizeof($elements) === 0) {
        return null; 
    }
    $output = "<h3>$titre</h3><ul>"; 
    foreach($elements as $e) {
        $output .= "<li>$e</li>";
    }
    $output .= "</ul>"; 
    return $output; 
}

echo("Exercice 20 : listHTML(nujll, ['a', 'b']); &  listHTML('Capitale' , ['Paris', 'Berlin', 'Moscou']); & listHTML('Vide', []); \n");
echo listHTML(null, ['a', 'b']) . "\n";
echo listHTML('Capitale' , ['Paris', 'Berlin', 'Moscou']) . "\n";
echo listHTML('Vide', []) . "\n"; 
echo("\n"); 


/*-----------------------------------------------
Exercice 21, remplacer lettres
Créer une fonction from scratch qui s'appelle remplacerLesLettres(). 
Elle prendra un argument de type string. 
Elle devra retourner cette même string mais en remplacant les e par des 3, les i par des 1 et les o par des 0 
Exemple :
 - input : "Bonjour les amis" ==> Output : B0nj0ur l3s am1s
 - input : "Les cours de programmation Web sont trops cools" ==> Output : L3s c0urs d3 pr0grammat10n W3b s0nt tr0ps c00ls
-------------------------------------------------*/

/**
 * Remplace les lettres e par des 3, les i par des 1 et les o par des 0 dans la chaîne donnée en paramètre.  
 *
 * @param string $mot
 * @return string le nouveau mot avec les lettres remplacées. 
 */
function remplacerLesLettres(string $chaine): string {
    return strtr($chaine, "eio", "310"); 
}

/**
 * Remplace les lettres e par des 3, les i par des 1 et les o par des 0 dans la chaîne donnée en paramètre.  
 * Utilise la fonction str_replace : https://www.php.net/manual/fr/function.str-replace.php
 * @param string $mot
 * @return string le nouveau mot avec les lettres remplacées. 
 */
function remplacerLesLettresV2(string $chaine): string {
    return str_replace(["e", "i", "o"], ["3", "1", "0"], $chaine);
}

echo("Exercice 21: remplacerLesLettres('Bonjour les amis'); & remplacerLesLettresV2('Bonjour les amis') \n");
echo remplacerLesLettres('Bonjour les amis') . "\n"; 
echo remplacerLesLettresV2('Bonjour les amis') . "\n"; 
echo("Exercice 21: remplacerLesLettres('Les cours de programmation Web sont trops cools'); & remplacerLesLettresV2('Les cours de programmation Web sont trops cools') \n");
echo remplacerLesLettres('Les cours de programmation Web sont trops cools') . "\n";
echo remplacerLesLettresV2('Les cours de programmation Web sont trops cools') . "\n";
echo("\n");

/*-----------------------------------------------
Exercice 22, Quelle année
Créer une fonction from scratch qui s'appelle quelleAnnee(). 
Elle devra retourner un integer representant l'année actuelle.
-------------------------------------------------*/

/**
 * Renvoi l'année actuelle
 * Utilise la fonction date : https://www.php.net/manual/fr/function.date.php
 * @return integer l'année actuelle
 */
function quelleAnnee(): int {
    return date("Y");
}

echo("Exercice 22 : quelleAnnee()\n");
echo quelleAnnee() ."\n"; 
echo("\n");

/*-----------------------------------------------
Exercice 23, Quelle date
Créer une fonction from scratch qui s'appelle quelleDate(). 
Elle devra retourner une string representant la date actuelle sous le format suivant DD/MM/YYYY

Où DD représente le jour actuelle, MM le mois actuel et YYYY l'année actuelle. 
Les valeurs doivent être numérique et non au format String.
-------------------------------------------------*/
function quelleDate(): string {
    return date("d/m/Y"); 
}
echo("Exercice 23 : quelleDate()\n");
echo quelleDate() ."\n"; 
echo("\n");

/*-----------------------------------------------
Exercice 24, inclure librairie
Créer une fonction from scratch qui s'appelle fonctionMagique(). 
Il faut intégrer la librairie ./libraryToInclude.php

Il vous suffira pour completer cette exercice de retourner simplement la valeur produite par la fonction fonctionDeMaLibrairie() qui se trouve justement dans la librairie incluse.
-------------------------------------------------*/

include_once("./libraryToInclude.php"); 
/**
 * inclut la librairie libraryToInclude.php et renvoi la valeur de la fonction fonctionDeMaLibrairie()
 *
 * @return 
 */
    include_once("./libraryToInclude.php"); 
function fonctionMagique() {
    return fonctionDeMaLibrairie(); 
}

/*-----------------------------------------------
Exercice 25, inclure librairie
Créer une fonction from scratch qui s'appelle getUtilisateursAutorises(). Il faut intégrer la librairie ./libraryToInclude.php

La fonction retournera un array d'utilisateur autorisés.

Il faut d'abord récupérer la liste de tous les utilisateurs. Cette liste se trouvera en appellant la fonction getAllUtilisateurs()

Une fois tous les utilisateur récuperer, faire les opérations suivantes :

    - Supprimer les utilisateurs bloqués.
    - Supprimer les utilisateurs qui n'ont pas d'adresse email
    - Supprimer les utilisateurs qui ont moins de 18 ans.
Enfin retourner la nouvelle liste propre.
-------------------------------------------------*/

// Remarque, vous n'avez pas accès au fichier ./libraryToInclude.php en local, donc on ne peut pas tester en dehors du site. 

/**
 * Renvoi la liste des utilisateurs autorisés, que la fonction charge depuis une librairie. 
 * 
 * @return array la liste des utilisateurs autorisés. 
 */
include_once("./libraryToInclude.php"); 
function getUtilisateursAutorises() : array {
    $users = getAllUtilisateurs();
    $authorizedUsers = []; 
    foreach($users as $u) {
        if($u->age >= 18 && !$u->blocked && !empty($u->email)){
            array_push($authorizedUsers, $u);
        }
    }
    return $authorizedUsers;
}

/**
 * Renvoi la liste des utilisateurs autorisés, que la fonction charge depuis une librairie.
 * 
 * @return array la liste des utilisateurs autorisés. 
 */
include_once("./libraryToInclude.php"); 
function getUtilisateursAutorisesV2() : array {
    $users = getAllUtilisateurs();
    foreach($users as $key => $u) {
        if($u->age < 18 || $u->blocked || empty($u->email)){
            unset($users[$key]); // On supprime les utilisateurs du tableau
        }
    }
    return array_values($users); //On renvoi un tableau réindexé : https://www.php.net/manual/fr/function.array-values.php
}

echo("Exercice 25: getUtilisateursAutorises()\n");
$users = getUtilisateursAutorises(); 
//var_dump($users);


