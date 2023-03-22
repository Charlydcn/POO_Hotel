<?php

class Room
{
    private Hotel $_hotel;
    private int $_nbBeds;
    private float $_price;
    private bool $_wifi;
    private bool $_state = true;

    public function __construct(Hotel $_hotel, int $_nbBeds, float $_price, bool $_wifi, bool $_state)
    {
        $this->_hotel = $_hotel;
        $this->_nbBeds = $_nbBeds;
        $this->_price = $_price;
        $this->_wifi = $_wifi;
        $this->_state = $_state;
    }

    // ************************************************ MÉTHODES ************************************************ 
    // ************************************** ACCESSEURS (getters) **************************************

    public function getHotel()
    {
        return $this->_hotel;
    }

    public function getNbBeds()
    {
        return $this->_nbBeds;
    }

    public function getPrice()
    {
        return $this->_price;
    }

    public function getWifi()
    {
        if ($this->_wifi === true)
        {
            return "Wi-fi disponible";
        } else {
            return "Wi-fi indisponible";
        }
    }

    public function getState()
    {
        if ($this->_state === true)
        {
            return "Chambre disponible";
        } else {
            return "Chambre indisponible";
        }
    }

    public function getInfos()
    {
        return "Hôtel : " . $this->_hotel
        . "Nombre de lits : " . $this->_nbBeds
        . "Prix de la nuit : " . $this->_price
        . $this->getWifi()
        . "État de la chambre : " . $this->getState(); 
    }

    // ************************************************************************************************** 
    // ************************************** MUTATEURS (setters) ***************************************

    public function setHotel(Hotel $hotel)
    {
        $this->_hotel = $hotel;
    }

    public function setNbBeds(int $nbBeds)
    {
        $this->_nbBeds = $nbBeds;
    }

    public function setPrice(float $price)
    {
        $this->_price = $price;
    }

    public function setWifi(bool $wifi)
    {
        $this->_wifi = $wifi;
    }
    
    public function setState(bool $state)
    {
        $this->_state = $state;
    }

    // **************************************************************************************************

    public function __toString()
    {
        return $this->_nbBeds . " - " . $this->_price . " - " . $this->_wifi;
    }


}


?>