<?php 

$ingredients = $app['database']->selectAll('ingredients');

require('views/add-material.view.php'); 
?>