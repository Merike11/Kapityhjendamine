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

<h1>Registreerumine: </h1>
<form action="/login" method="post" class="form-signin">
  
  <h1 class="h3 mb-3 font-weight-normal">Palun logi sisse</h1>
  <label for="inputEmail" class="sr-only">Eposti aadress</label>
  <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Salasõna</label>
  <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <button name="action" value="login" class="btn btn-lg btn-primary btn-block" type="submit">Logi sisse</button>
  
</form>

<?php require('partials/footer.php'); ?>