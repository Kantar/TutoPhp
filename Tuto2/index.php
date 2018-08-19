<?php
/**
 * Created by PhpStorm.
 * User: sundor
 * Date: 19/08/2018
 * Time: 15:10
 */
//require '../Models/Personnage.php';
require '../Tools/tools.php';
spl_autoload_register('chargerClasse');

$perso1 = new Personnage(Personnage::FORCE_MOYENNE,15,0);
$perso2 = new Personnage(Personnage::FORCE_PETITE,15,10);
$perso1->setForce(10);
$perso1->setExperience(2);

$perso2->setForce(90);
$perso2->setExperience(58);

$perso1::parler();
$perso2::parler();
$perso1->afficherExperience();
$perso2->afficherExperience();
$perso1->frapper($perso2);
$perso2->frapper($perso1);
$perso1->gagnerExperience();
$perso2->gagnerExperience();

echo 'Le personnage 1 a ', $perso1->getForce(), ' de force, contrairement au personnage 2 qui a ', $perso2->getForce(), 'de force.<br />';
echo 'Le personnage 1 a ', $perso1->getExperience(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->getExperience(), ' d\'expérience.<br />';
echo 'Le personnage 1 a ', $perso1->getDegats(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->getDegats(), ' de dégâts.<br />';



