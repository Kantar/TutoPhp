<?php
/**
 * Created by PhpStorm.
 * User: sundor
 * Date: 19/08/2018
 * Time: 15:08
 */

class Personnage
{
    private $_force;
    private  $_localisation;
    private $_experience;
    private $_degats;

    const FORCE_PETITE = 20;
    const FORCE_MOYENNE = 50;
    const FORCE_GRANDE = 80;

    /**
     * Personnage constructor.
     * @param $_force
     * @param $_localisation
     * @param $_experience
     * @param $_degats
     */
    public function __construct($_force, $_localisation, $_degats)
    {
        $this->setForce($_force) ;
        $this->setLocalisation($_localisation) ;
        $this->_experience = 1 ;
        $this->setDegats($_degats);
    }

    public function deplacer(){

    }
    public static function parler(){
        echo 'je suis un personnage ';
    }
    public function gagnerExperience(){
        $this->_experience = $this->_experience + 1;
    }
    public function afficherExperience(){
        echo $this->_experience;
    }
    public function frapper(Personnage $persoAFrapper){
        $persoAFrapper->_degats += $this->_force;
    }

    /**
     * @return mixed
     */
    public function getForce()
    {
        return $this->_force;
    }

    /**
     * @param mixed $force
     */
    public function setForce($force)
    {
        if (!is_int($force)){
            trigger_error('La force d\'un personnage doit être un nombre entier',E_USER_WARNING);
            return;
        }
        if($force > 100){
            trigger_error('La force d\'un personnage ne peut pas dépasser 100',E_USER_WARNING);
            return;
        }
        if(in_array($force, [self::FORCE_PETITE,self::FORCE_MOYENNE ,self::FORCE_GRANDE])){
            $this->_force = $force;
        }

    }

    /**
     * @return mixed
     */
    public function getLocalisation()
    {
        return $this->_localisation;
    }

    /**
     * @param mixed $localisation
     */
    public function setLocalisation($localisation)
    {
        $this->_localisation = $localisation;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->_experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience)
    {

        if (!is_int($experience)){
            trigger_error('L\'experience d\'un personnage doit être un nombre entier',E_USER_WARNING);
            return;
        }
        if($experience > 100){
            trigger_error('L\'experience d\'un personnage ne peut pas dépasser 100',E_USER_WARNING);
            return;
        }
        $this->_experience = $experience;
    }

    /**
     * @return mixed
     */
    public function getDegats()
    {
        return $this->_degats;
    }

    /**
     * @param mixed $degats
     */
    public function setDegats($degats)
    {
        $this->_degats = $degats;
    }

}