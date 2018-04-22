<?php
/**
 * Created by PhpStorm.
 * User: wiki
 * Date: 05/04/2018
 * Time: 09:27
 */

class Coupon
{
    protected $id;
    protected $valeur;

    /**
     * Coupon constructor.
     * @param $id
     * @param $valeur
     */
    public function __construct($id, $valeur)
    {
        $this->id = $id;
        $this->valeur = $valeur;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * @param mixed $valeur
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;
    }




}