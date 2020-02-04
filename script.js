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


var question1 = document.getElementById("question-1");
console.log(question1.lastElementChild);
question1.lastElementChild.addEventListener("submit", function (event) {
    // Pour stopper le comportement par défaut, et empêcher la page de se recharger
    event.preventDefault();
    
    var elems = document.getElementsByName('question-1');
    var max = elems.length;
    for(let i = 0; i < max; i++) {
        console.log("La réponse " + elems[i].id + " a la valeur " + elems[i].value + " et est cochée : " + elems[i].checked);
    }

});

