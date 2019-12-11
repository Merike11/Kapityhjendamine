<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="application.css" type="text/css">
    
    
</head>
<body>
<?php require('partials/head.php');?>
    

<?php  if(!empty($tasks)) : foreach($tasks as $task) : ?>
    <li>
        <?php if ($task->completed) : ?>
            <strike><?= $task->description; ?></strike>
        <?php else : ?>
            <?= $task->description; ?>
        <?php endif; ?>
    </li>
<?php endforeach; endif; ?>

<?php require('partials/footer.php'); ?>        
        
      
 

</body>
</html>


