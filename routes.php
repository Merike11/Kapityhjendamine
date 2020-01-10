<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('addmaterial', 'MaterialController@index');
$router->get('feedback', 'PagesController@feedback');
$router->post('addmaterial', 'MaterialController@store');
$router->post('add-feedback', 'controllers/add-feedback.php');
$router->post('material/editingredient', 'MaterialController@editingredient');

$router->get('material/delete', 'MaterialController@delete');
$router->get('material/edit', 'MaterialController@edit');

$router->get('login', 'UserController@index');
$router->post('login', 'UserController@login');

$router->get('logout', 'UserController@logout');
