<?php

$route = isset($_REQUEST['route'])? $_REQUEST['route'] : "home";
$service = isset($_REQUEST['service'])? $_REQUEST['service'] : "default";

spl_autoload_register(function ($class) {
    if(file_exists("models/$class.php")) {
        require_once "models/$class.php";
    } 
});

// Routage

switch($route) {
    case "home" : $view = showHome();
    break;
    default : $view = showHome();
}

switch($service) {
    case "questionnaire" : sendQuestions();
    break;
    default : exit;
}

// Fonctions de controle

function showHome() {

    $datas = [];
    $question = new Question();


    return ["template" => "views/home.php", $datas];
}

function sendQuestions() {

    $question = new Question();
    $retour = $question->selectAll();
    
    foreach($retour as &$question) {
        $reponse = new Reponse();
        $reponse->setIdQuestion($question["id"]);
        $question["reponses"] = $reponse->selectByIdQuestion();
    }

    $json = json_encode($retour);

    echo $json;
    exit;
}

// Template maître
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Quizz </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <?php require($view['template']) ?>

    <script src="questions.js"></script>
</body>
</html>