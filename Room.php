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
            $_hotel->addRoom($this);
            $this->_nbBeds = $_nbBeds;
            $this->_price = $_price;
            $this->_wifi = $_wifi;
            $this->_state = $_state;
        }

        // ************************************************ MÉTHODES ************************************************ 
        // ************************************** ACCESSEURS (getters) **************************************

        public function getId() // CHECK
        {
            return $this->_id;
        }

        public function getHotel() // CHECK
        {
            return $this->_hotel;
        }

        public function getNbBeds() // CHECK
        {
            return $this->_nbBeds;
        }

        public function getPrice() // CHECK
        {
            return $this->_price;
        }

        public function getWifi() // CHECK
        {
            if ($this->_wifi === true)
            {
                return "Wi-fi disponible";
            } else {
                return "Wi-fi indisponible";
            }
        }

        public function getWifiLogo() // CHECK
        {
            if ($this->_wifi === true)
            {
                return "<i class='fa-solid fa-wifi'></i>";
            } else {
                return "<i class='fa-solid fa-xmark'></i>";
            }
        }

        public function getState() // CHECK
        {
            if ($this->_state === true)
            {
                return "<span class='room_available'>Disponible</span>";
            } else {
                return "<span class='room_booked'>Réservée</span>";
            }
        }

        public function getInfos() // CHECK
        {
            return "Chambre " . $this->_id . "<br>"
            . "Hôtel : " . $this->_hotel . "<br>"
            . "Nombre de lits : " . $this->_nbBeds . "<br>"
            . "Prix de la nuit : " . $this->_price . " €<br>"
            . $this->getWifi() . "<br>"
            . "État de la chambre : " . $this->getState(); 
        }

        // ************************************************************************************************** 
        // ************************************** MUTATEURS (setters) ***************************************

        public function setId(int $id) // CHECK
        {
            $this->_id = $id;
        }

        public function setHotel(Hotel $hotel) // CHECK
        {
            $this->_hotel = $hotel;
        }

        public function setNbBeds(int $nbBeds) // CHECK
        {
            $this->_nbBeds = $nbBeds;
        }

        public function setPrice(float $price) // CHECK
        {
            $this->_price = $price;
        }

        public function setWifi(bool $wifi) // CHECK
        {
            $this->_wifi = $wifi;
        }

        
        public function setState(bool $state) // CHECK
        {
            $this->_state = $state;
        }

        // **************************************************************************************************

        public function __toString() // CHECK
        {
            return " (" . $this->_nbBeds . " lits - " . $this->getPrice() . " € - " . $this->getWifi() . ")";
        }


    }


?>