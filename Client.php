<?php

    class Client extends Person
    {
        private array $_bookings;

        public function __construct(string $_firstName, string $_lastName, string $_genre, string $_birthDate)
        {
            parent::__construct($_firstName, $_lastName, $_genre, $_birthDate);
            $this->_bookings = [];
        }

        // ************************************************ MÉTHODES ************************************************ 
        // ************************************** ACCESSEURS (getters) **************************************

        public function getBookings() // A TESTER
        {
            $result = "<ul>";
            foreach ($this->_bookings as $booking) {
                $result .= "<li>" . $booking->getInfos() . "</li><br>";
            }
            $result .= "</ul>";
            return $result;
        }

        public function getNbBookings() // A TESTER
        {
            return count($this->_bookings);
        }

        public function getInfos()
        {
            return "Nom : " . strtoupper($this->getLastName()) . "<br>"
            . "Prénom : " . $this->getFirstName() . "<br>"
            . "Nombre de réservations : " . $this->getNbBookings() . "<br>"
            . "Réservations : " . $this->getBookings();
        }

        // **************************************************************************************************
        // ************************************** MUTATEURS (setters) ***************************************

        public function setBookings(Booking $booking) // A TESTER
        {
            $this->_bookings[] = $booking;
        }

        // **************************************************************************************************

        public function addBooking(Booking $booking)
        {
            $this->_bookings[] = $booking;
        }

        public function __toString() // A TESTER
        {
            return $this->getFirstName() . " " . strtoupper($this->getLastName());
        }


    }

?>