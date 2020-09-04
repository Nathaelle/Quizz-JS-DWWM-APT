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
    default : $view = showHome();
}

// Fonctions de controle

function showHome() {

    return ["template" => "views/home.php"];
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