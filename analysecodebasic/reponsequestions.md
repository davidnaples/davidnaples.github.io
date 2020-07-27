## Etape 1 : la rencontre (~1 heure ?)

- **Avec quelle commande Node puis je exécuter ce script ?**  Dans le terminal je tape : node nomedufichier.je (se positionner dans le dossier du ficher ou faire drag and drop du fichier apres le commande node  )

- **Que fait ce script ?** me donne du text  , mais en fait  défie deux joueurs qui commencent tous les deux avec 100 points, en suite il attribue des nombres aléatoires à deux joueurs et les multiplie par 50  (puissanceattaque) et les soustrait du total de l'adversaire . Le jeu se termine lorsque l'un des deux joueurs atteint moins de zéro point

- **Que signifie le mot clé `const` ?** La déclaration *const* permet de créer une constante nommée accessible uniquement en lecture.

- **Quel autre mot clé ressemble un peu à `const` à l'usage dans ce script ?** Player1 et player2 ? pas bien compris ...

- **A quoi correspond l'object `console` et les "trucs" qui le suivent ?** console c'est une class et .log précis le method

- **Quelle est la différence entre la ligne 7, la ligne 9 et la ligne 27 ?** **D'où pourraient venir ces différences ?**les lignes 7 et 9 ont des guillemets ' et la ligne 27 les guillemets " , Ils fonctionnent de la même manière, mais ils doivent correspondre. Il n'est pas possible de commencer une string par un simple guillemets et de finir par un double guillemets ou l'inverse. En plus de cela, ils sont interchangeables.

- **Que fait la méthode Math.floor() ? La méthode floor () arrondit un nombre VERS LE BAS à l'entier le plus proche et renvoie le résultat. Si l'argument passé est un entier, la valeur ne sera pas arrondie.

- **A quoi sert le `while` ?** sert à declarer le debut d'un boucle 

- **Est-ce que la ligne 28 sert à invoquer un petit chat sauvage ? (oui/non sans justifier) **Non

- **A quoi servent les trois dernières lignes ? **L'instruction **`if`** exécute une instruction si une condition donnée est vraie ou équivalente à vrai, dans notre case si le player1 est gagnant , le script me donne le texe : "C'est un peu comme si c'est toi le joueur 1, alors bravo (même si tu n'as rien fait...)."

- **Vous avez le droit d'écrire trois phrases de commentaire dans ce script pour l'expliquer**
  
  - **vous pouvez les écrire sur les lignes que vous voulez**
  - u**n commentaire commence par `// `, par exemple `// Ceci est un commentaire :)`**
  
  Mes commentaires :
  
  je ne trouve pas encore l'utilitè d'utiliser le format Markdown .
  
  est que Typora est bien ou j''utilise vscode qui permet commeme de savaguarder en format markdown?

## Etape 2 : la bidouille (~2 heures)



- **Proposez deux solutions pour que le combat dure 3 fois plus longtemps en moyenne (des maaaaths !!!)** 

  1)console.log(`Bobby attaque et enlève ${puissanceAttaque1} points de vie`);

  ​    player2Life =Math.floor(player2Life - (puissanceAttaque1 /3 ));

  

  ​    console.log(`Bybbo attaque et enlève ${puissanceAttaque2} points de vie`);

  ​    player1Life =Math.floor (player1Life - (puissanceAttaque2 /3 ));

  j'ai enlevee un tiers à la puissance d'attaque de tous les jeueurs 

  2) let player1Life = 300;

  let player2Life = 300;

  j'ai donné trois fois plus de points 

- **Que se passe-t-il si on déplace les deux lignes après le `while` (13 et 14) avant le while ? (Détaillez un peu, testez plusieurs fois)**

les points enlevée sont constant chaque attaque , parceque puissanceAttaque1 et puissanceAttaque2 sont sortie du loop 

- **Si je change le nom de mes joueurs, il y aura un souci d'affichage à un moment : résolvez-le !!** oui parceque je dois changer ici aussi :

   console.log(`Bobby attaque et enlève ${puissanceAttaque1} points de vie`);

  console.log(`Bybbo attaque et enlève ${puissanceAttaque2} points de vie`);

- **Que se passe-t-il si je remplace les `&&` de la ligne 12 par des `||` ?**

  Logical operators are typically used with boolean (logical) values, and when they are, they return a boolean value.

  - [`&&`](https://developer.mozilla.org/it/docs/Web/JavaScript/Reference/Operators/Logical_Operators#Logical_AND)

    Logical AND.

  - [`||`](https://developer.mozilla.org/it/docs/Web/JavaScript/Reference/Operators/Logical_Operators#Logical_OR)

    Logical OR.

    Cela signifie que les conditions de la boucle changent dans notre cas

- **Notre jeu est très injuste envers le joueur 1, pourquoi ? Il existe au moins deux genres approches différentes.**

  à cause de çà:

   console.log(player1Life > 0 ? `${player1} est vainqueur` : `${player2} est vainqueur`);

  

  

- **Que se passe-t-il si je remplace**

  - **les `const` par des `let` ?**
  - **les `let` par des `const` ?**
  - **les `const` et les `let` par des `var` ?**
  - **Qu'est ce que cela vous évoque ?**

- **Expliquez ce que semble faire la ligne 28**

  utilise l'operateur conditionnel ternaire 

L'[opérateur conditionnel](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Opérateurs/L_opérateur_conditionnel) est le seul opérateur JavaScript qui utilise trois opérandes. L'expression utilisant l'opérateur peut prendre une valeur parmi deux selon une condition donnée. Cet opérateur s'utilise avec la syntaxe suivante :

```
condition ? val1 : val2
```

Si `condition` vaut `true`, l'opérateur vaudra `val1`. Sinon il vaudra `val2`.

## **Etape 3 : on maitrise (~ toute la vie)**

> **si si, après 4h de travail, no souci...**

- **Corrigez le script pour qu'il soit plus juste pour le joueur 1**

console.log(player1Life > 0 ? `${player1} est vainqueur` : ``) ;

console.log(player2Life > 0 ? `${player2} est vainqueur` : ``) ;

- **Modifiez le script pour qu'une attaque fonctionne 90% du temps et non pas 100% du temps**

  - **Et il faut alors afficher à l'écran si l'attaque a échoué**

- **Faites en sorte que si un joueur dispose de moins de 20 points de vie, il boive une potion (qui va lui redonner 60 points de vie) au lieu de lancer une attaque lorsque son tour arrive.**

  - **Si vous êtes chopatate, vous pouvez faire en sorte que la potion régénère entre 30 et 90 points de vie**

- ## **Etape 4 : on philosophe (~ toute la vie)**

  - **La ligne 28 à un comportement similaire avec une autre partie du script (on insiste sur le mot comportement), lequel ? Pensez-vous que ces deux morceaux de code sont complètement équivalents ?**
  - **Dans une itération de notre boucle, les deux joueurs font un peu la même chose... On n'aime pas répéter du code trop similaire : comment pourrait-on essayer de limiter ce doublon de code (explication attendue, pas du code)**