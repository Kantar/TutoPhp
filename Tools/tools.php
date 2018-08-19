<?php
/**
 * Created by PhpStorm.
 * User: sundor
 * Date: 19/08/2018
 * Time: 16:15
 */
function chargerClasse($classe){
    require '../Models/' . $classe . '.php';
}