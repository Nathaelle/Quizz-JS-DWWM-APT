// Exemple d'utilisation de la méthode addEventListener()
/*
var titre = document.getElementsByTagName("h1");
titre[0].addEventListener("mouseover", function (e) {
    // Code éxécuté lorsqu'un évènement "mouseover" survient sur l'élément 
    titre[0].style.color = "red";
});

var titre = document.getElementsByTagName("h1");
titre[0].addEventListener("mouseout", function (e) {
    // Code éxécuté lorsqu'un évènement "mouseout" survient sur l'élément 
    titre[0].style.color = "green";
});*/


var question1 = document.getElementById('question-1');
question1.lastElementChild.addEventListener("submit", function (event) {
    // Pour stopper le comportement par défaut, et empêcher la page de se recharger
    event.preventDefault();
    
    var elems = document.getElementsByName('question-1');
    var max = elems.length;

    // Pour chaque élément "input type radio" :
    for(let i = 0; i < max; i++) {
        // Lorsque l'utilisateur a validé, les réponses ne peuvent plus être modifiées
        // Les boutons radio sont donc désactivés
        elems[i].disabled = true;

        if(elems[i].checked && elems[i].value == 'true') {
            elems[i].parentElement.parentElement.style.color = "green";
            elems[i].previousElementSibling.style.fontWeight = "bold";
            elems[i].previousElementSibling.style.fontSize = "1.1em";

        } else if (elems[i].checked && elems[i].value == 'false') {
            elems[i].parentElement.parentElement.style.color = "red";
            elems[i].previousElementSibling.style.fontWeight = "bold";
            elems[i].previousElementSibling.style.fontSize = "1.1em";
        }
    }
});
