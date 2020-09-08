<?php

$route = isset($_REQUEST['route'])? $_REQUEST['route'] : "home";

spl_autoload_register(function ($class) {
    if(file_exists("models/$class.php")) {
        require_once "models/$class.php";
    } 
});

// Routage

switch($route) {
    case "home" : $view = showHome();
    break;
    case "forms" : $view = showUserForms();
    break;
    // Services -----
    case "questionnaire" : sendQuestions();
    break;
    default : $view = showHome();
}

// Fonctions de controle

function showHome() {

    $datas = [];
    return ["template" => "views/home.php", $datas];
}

function showUserForms() {

    $datas = [];
    return ["template" => "views/user_forms.php", $datas];
}

function showAdmin() {

    $datas = [];
    return ["template" => "views/admin.php", $datas];
}

function sendQuestions() {

    //sleep(3);

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

    <script src="js/questions.js"></script>
</body>
</html>