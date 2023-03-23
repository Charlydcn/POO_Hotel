<?php

    class Booking
    {
        private Client $_client;
        private Hotel $_hotel;
        private Room $_room;
        private DateTime $_dateStart;
        private DateTime $_dateEnd;

        public function __construct(Client $_client, Hotel $_hotel, Room $_room, string $_dateStart, string $_dateEnd)
        {
            $this->_client = $_client;
            $_client->addBooking($this);
            $this->_hotel = $_hotel;
            $_hotel->addBooking($this);
            $this->_room = $_room;
            $this->_dateStart = new DateTime($_dateStart);
            $this->_dateEnd = new DateTime($_dateEnd);
        }

        // ************************************************ MÉTHODES ************************************************        
        // ************************************** ACCESSEURS (getters) **************************************

        public function getClient() // A TESTER
        {
            return $this->_client;
        }

        public function getHotel() // A TESTER
        {
            return $this->_hotel;
        }
        
        public function getRoom() // A TESTER
        {
            return $this->_room;
        }
        
        public function getDateStart() // A TESTER
        {
            return $this->_dateStart->format("d-m-Y");
        }
        
        public function getDateEnd() // A TESTER
        {
            return $this->_dateEnd->format("d-m-Y");
        }

        public function getDuration() // A TESTER
        {
            $interval = $this->_dateStart->diff($this->_dateEnd);
            return $interval->d . " jours";
        }

        public function getPrice() // A TESTER
        {
            $interval = $this->_dateStart->diff($this->_dateEnd);
            $price = $this->_room->getPrice() * $interval->d;
            return $price;
        }
        
        public function getInfos()
        {
            return "Réservation de " . $this->_client . "<br>"
            . "Hotel : " . $this->_hotel . "<br>"
            . "Chambre : " . $this->_room->getId() . "<br>"
            . "Date de début : " . $this->getDateStart() . "<br>"
            . "Date de fin : " . $this->getDateEnd() . "<br>"
            . "(Durée : " . $this->getBookingDuration() . ") <br>"
            . "Prix : " . $this->getBookingPrice();
        }

        public function getInfosShort()
        {
            return $this->_client . " - "
            . "Chambre " . $this->_room . " - "
            . " du " . $this->getDateStart()
            . " au " . $this->getDateEnd();
        }

        // ************************************************************************************************** 
        // ************************************** MUTATEURS (setters) ***************************************

        public function setClient(Client $client)
        {
            $this->_client = $client;
        }

        public function setHotel(Hotel $hotel)
        {
            $this->_hotel = $hotel;
        }

        public function setRoom(Room $room)
        {
            $this->_room = $room;
        }

        public function setDateStart($dateStart)
        {
            $this->_dateStart = new DateTime($dateStart);
        }

        public function setDateEnd($dateEnd)
        {
            $this->_dateEnd = new DateTime($dateEnd);
        }

        // ************************************************************************************************** 

        public function __toString()
        {
            return $this->_client . " - "
            . "Chambre " . $this->_room->getId() . " - "
            . " du " . $this->getDateStart()
            . " au " . $this->getDateEnd();
        }

    }

?>