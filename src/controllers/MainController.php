<?php

class MainController extends Controller {
    public function index(){


        $pokerandom = Pokemon::getRandomPoke();
        if ($pokerandom) {
            $poke = new Pokemon($pokerandom['id'], $pokerandom['name'],$pokerandom['isCaptured']);
        }else {
            $poke = null;
        }
     
        $pokesCaptured = Pokemon::getCapturedPoke();
        require_once("../views/main.php");

    }
}