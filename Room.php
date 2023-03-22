<?php

    class Room
    {
        private int $_id;
        private Hotel $_hotel;
        private int $_nbBeds;
        private float $_price;
        private bool $_wifi;
        private bool $_state = true;

        public function __construct(int $_id, Hotel $_hotel, int $_nbBeds, float $_price, bool $_wifi, bool $_state)
        {
            $this->_id = $_id;
            $this->_hotel = $_hotel;
            $this->_nbBeds = $_nbBeds;
            $this->_price = $_price;
            $this->_wifi = $_wifi;
            $this->_state = $_state;
        }

        // ************************************************ MÉTHODES ************************************************ 
        // ************************************** ACCESSEURS (getters) **************************************

        public function getId() // A TESTER
        {
            return $this->_id;
        }

        public function getHotel() // A TESTER
        {
            return $this->_hotel;
        }

        public function getNbBeds() // A TESTER
        {
            return $this->_nbBeds;
        }

        public function getPrice() // A TESTER
        {
            return $this->_price;
        }

        public function getWifi() // A TESTER
        {
            if ($this->_wifi === true)
            {
                return "Wi-fi disponible";
            } else {
                return "Wi-fi indisponible";
            }
        }

        public function getState() // A TESTER
        {
            if ($this->_state === true)
            {
                return "Chambre disponible";
            } else {
                return "Chambre réservée";
            }
        }

        public function getInfos() // A TESTER
        {
            return "Chambre " . $this->_id . "<br>"
            . "Hôtel : " . $this->_hotel . "<br>"
            . "Nombre de lits : " . $this->_nbBeds . "<br>"
            . "Prix de la nuit : " . $this->_price . "<br>"
            . $this->getWifi() . "<br>"
            . "État de la chambre : " . $this->getState(); 
        }

        // ************************************************************************************************** 
        // ************************************** MUTATEURS (setters) ***************************************

        public function setId($id)
        {
            $this->_id = $id;
        }

        public function setHotel(Hotel $hotel) // A TESTER
        {
            $this->_hotel = $hotel;
        }

        public function setNbBeds(int $nbBeds) // A TESTER
        {
            $this->_nbBeds = $nbBeds;
        }

        public function setPrice(float $price) // A TESTER
        {
            $this->_price = $price;
        }

        public function setWifi(bool $wifi) // A TESTER
        {
            $this->_wifi = $wifi;
        }
        
        public function setState(bool $state) // A TESTER
        {
            $this->_state = $state;
        }

        // **************************************************************************************************

        public function __toString() // A TESTER
        {
            return $this->_id . $this->_nbBeds . " - " . $this->_price . " - " . $this->_wifi;
        }


    }


?>