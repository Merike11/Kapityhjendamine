<?php


$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('addmaterial', 'MaterialController@addmaterial');
$router->get('feedback', 'PagesController@feedback');
$router->post('material', 'MaterialController@store');
$router->post('add-feedback', 'controllers/add-feedback.php');
