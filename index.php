<?php
session_start();
var_dump($_SESSION);

require 'core/bootstrap.php';

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
