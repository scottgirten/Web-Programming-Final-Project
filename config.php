<?php

// Connecting to the MySQL database
$user = 'girtens1';
$password = '5df4f90a';

$database = new PDO('mysql:host=csweb.hh.nku.edu; dbname=db_fall19_girtens1', $user, $password);

//Autoloader function
function scott_autoloader ($class){
	include 'classes/class.' . $class . '.php';
}
spl_autoload_register('scott_autoloader');


// Start the session
session_start();

if(isset($_GET['recipe_id'])){
    $_SESSION['recipeID'] = $_GET['recipe_id'];
}

//if(isset($_SESSION['recipeID'])){
    scott_autoloader('Recipe');
    $recipe = new Recipe($_SESSION['recipeID'], $database);
//}