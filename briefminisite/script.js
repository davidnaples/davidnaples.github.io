var tableau = [
    { titre: "Imparare a Simplon1", auteur: "Stephen King", prix: "10500,00€" , image: src="briefminisite/assets/img/📘.png" ,resume:"blablablablabla"     },
    { titre: "Imparare a Simplon2", auteur: "Stephen King", prix: "10500,00€" , image: img="briefminisite/assets/img/📘.png" ,resume:"blablablablabla"     },
    { titre: "Imparare a Simplon3", auteur: "Stephen King", prix: "10500,00€" , image: img="briefminisite/assets/img/📘.png" ,resume:"blablablablabla"     },
    { titre: "Imparare a Simplon4", auteur: "Stephen King", prix: "10500,00€" , image: img="briefminisite/assets/img/📘.png" ,resume:"blablablablabla"     },

    ];
function afficheRecommandations(tableau) 

    {
      
 return tableau[Math.floor(Math.random()*tableau.length)];


    }
    
    

/*function afficheLivres(prixMax) {
    
}
*/
console.log(afficheRecommandations(tableau));