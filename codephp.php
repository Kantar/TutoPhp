<?php
/**
 * Created by PhpStorm.
 * User: sundor
 * Date: 12/08/2018
 * Time: 16:22
 */

$title;
$link;

if(!isset($_GET['title'])){
    $title = $_GET['title'];
    var_dump($title);
    switch ($title){
        case Tuto1:
            $link = "./Tuto1/bonjour.php";
            break;
        default:
            $link = "codephp : title non prévus";
        break;
    }
}else{
    $title ='Accueil';
}