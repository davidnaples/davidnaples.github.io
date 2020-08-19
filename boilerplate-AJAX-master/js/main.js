function sendQuery(url, method) {
    // si l'utilisateur ne spécifie pas de <method> on met 'GET' par défaut
    !method? method = 'GET': null;
    // on crée un objet xhr
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           document.getElementById("api-response").innerHTML = xhr.responseText;
           // Autres méthodes de sélection de noeuds :
           // .getElementsByClassName("test") .getElementsByTagName('DIV') .querySelector() .querySelectorAll()
        }
    };
    xhr.open("GET", url, true);
    xhr.send();
}

function sendQueryWithCallback(url, method, callbackFunction) {
    // si l'utilisateur ne spécifie pas de <method> on met 'GET' par défaut
    (!method) ? method = 'GET': null;

    // on crée un objet xhr
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            /*  On entre dans ce if lorsqu'une requête s'est bien déroulée
                (réception d'une réponse, etc.). Comme vous voulons que ce traitement
                soit générique, on permet de passer en troisième paramètre 'callbackFunction'
                une fonction qui sera appellée ci-dessous et qui prendra en paramètre
                la réponse envoyée par le serveur, et qui correspond à l'attribut xhr.responseText

                On voit bien dans index.html que l'on peut donc spécifier le traitement que
                l'on veut, sous forme d'une fonction pour n'importe quelle url.
                Ainsi, cette méthode sendQueryWithCallback est utilisable pour n'importe quel
                type de projet, de traitement, et de réponse de la part d'un serveur. Cool ?
             */
            callbackFunction(xhr.responseText);
        }
    };
    xhr.open("GET", url, true);
    xhr.send();
}
