<?php

include('config.php');
include('functions.php');

//$action = $_GET['action'];

//Get recipe id passed in URL
//$recipe_id = get('recipe_id');

// Set Session variable if recipe id is not empty
//if(!empty($recipe_id)){
//    $_SESSION['recipeID'] = $recipe_id;
//}
//$_SESSION['recipeID'] = $_GET['recipe_id'];
//print_r($_GET);

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Cocktail Recipes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="css/assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  </head>
  <body><nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg"  color-on-scroll="100">
</nav>


<div class="page-header header-filter" data-parallax="true" style="background-image: url('images/bg.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand text-center">
          <h1>It's Time for a Drink</h1>
          
        </div>
      </div>
    </div>
  </div>
</div>

<div class="main main-raised">
  <div class="container">
    <div class="section text-center">
      <h2 class="title"><?php echo $recipe->getRecipeName(); ?></h2>
      <p>
        <?php echo $recipe->getInstructions(); ?>
      </p>
      <ul style="list-style-type:none;">
        <?php foreach($recipe->getIngredients() as $ingredient) : ?>
            <li><?php echo $ingredient['name'] ?></li>
        <?php endforeach; ?>
      </ul>
      <a href="editForm.php" >Edit Recipe</a>
      <a> | </a>
      <a href="index.php" >Home</a>
      
      
    </div>
  </div>
</div>

<footer class="footer footer-default" >
  <div class="container">
    <div class="copyright float-right">
        &copy;
        <script>
            document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by Scott Girten.
    </div>
  </div>
</footer>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="assets/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Google Maps Plugin  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script></body>
</html>