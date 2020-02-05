let question1 = {
    id: 1,
    intitule: "Un acouphène est une sensation qui affecte quel organe ?",
    reponses: [
        { id: 1, label: "Oeil", value: false },
        { id: 2, label: "Bouche", value: false },
        { id: 3, label: "Oreille", value: true },
        { id: 4, label: "Nez", value: false }
    ]
}

let question2 = {
    id: 2,
    intitule: "La mère de Lucie a trois enfants, ces deux premières filles se nomment Marie et Anna. Comment s'appelle son troisième enfant ?",
    reponses: [
        { id: 1, label: "Lucie", value: true },
        { id: 2, label: "Delphine", value: false },
        { id: 3, label: "Jaqueline", value: false },
        { id: 4, label: "On ne l'appelle pas on la siffle", value: false }
    ]
}

let question3 = {
    id: 3,
    intitule: "Combien y a t'il de lettres dans l'alphabet cyrillique ?",
    reponses: [
        { id: 1, label: 30, value: true },
        { id: 2, label: 300, value: false },
        { id: 3, label: 60, value: false },
        { id: 4, label: 2, value: false }
    ]
}

let question4 = {
    id: 4,
    intitule: "Quelle est la monnaie du Brésil ?",
    reponses: [
        { id: 1, label: "Le réal", value: false },
        { id: 2, label: "L'escudo", value: true },
        { id: 3, label: "Le dollar brésilien", value: false },
        { id: 4, label: "Le franc Suisse", value: false }
    ]
}

let lst_questions = [question1, question2, question3, question4];

// 1. Accéder et afficher en console l'intitulé de la première question.
console.log('?');

// 2. Accéder et afficher en console tous les intitulé de toutes les questions.

// 3. Afficher en console, en dessous des intitulés, toutes les réponses de la question.

// 4. Afficher en console, en plus des intitulés, toutes les BONNES réponses des questions.