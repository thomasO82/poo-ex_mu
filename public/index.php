<?php

//db et Router
require_once('../core/Router.php');
require_once("../src/models/Db.php");
//les repositories
require_once("../src/models/repositories/PokemonRepositorie.php");
//modeles
require_once("../src/models/Pokemon.php");
//le controller abstract
require_once("../src/controllers/Controller.php");
//les autres controlleurs
require_once('../src/controllers/MainController.php');
require_once('../src/controllers/CaptureController.php');
require_once('../src/controllers/FreeController.php');


$router = new Router();
$router->start();


