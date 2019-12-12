<?php

$app['database']->insert('ingredientes', [
    'name' => $_POST['material_name'],
    'unit' => $_POST['material_name']
     
]);

?><meta http-equiv="refresh" content="0;URL='/addmaterial'" />