<?php
require_once('./controllers/Autoload.php');
$autoload=new Autoload();
$route=( isset($_GET['r']) ) ? $_GET['r'] :'home' ;
$casamiau = new Router($route);
$a=new GatoModel();
