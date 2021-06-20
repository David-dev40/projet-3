<?php



//pour afficher les erreurs php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

//debug
require('fonction.php');

require('controller/mainController.php');
//require('model/mainModel.php');



session_start();


$action = isset($_GET['action']) ? $_GET['action'] :'pageLogin'; 

if(function_exists($action)) {
    $action();
    
}else {
    echo "la page $action n'existe pas";
} 
die;


$pageContent = ob_get_clean();


//SI affichage page KO, peut-être tenter redirection
//header('Location: view/login.php');
//exit();


require_once __DIR__.'/SiteMVC/view/template.php'; 

?>