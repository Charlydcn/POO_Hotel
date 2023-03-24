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

        public function getBookings() // CHECK
        {
            $result = "<h2>Réservation(s) de " . $this . "</h2>";
            $result .= "<div class='booking_counter'>" . $this->getNbBookings() . " RÉSERVATION(S)</div>";
            $total = 0;
            foreach ($this->_bookings as $booking) {
                $result .= "<p><strong>Hôtel : " . $booking->getHotel() . "</strong>";
                $result .= " / " . $booking->getInfosShort();
                $total += $booking->getPrice();
            } $result .= "<br>Total : " . $total . " €";
            return $result;
        }

        public function getNbBookings() // CHECK
        {
            return count($this->_bookings);
        }

        public function getInfos() // CHECK
        {
            return "Nom : " . strtoupper($this->getLastName()) . "<br>"
            . "Prénom : " . $this->getFirstName() . "<br>"
            . "Nombre de réservations : " . $this->getNbBookings() . "<br>"
            . "Réservations : " . $this->getBookings();
        }

        // **************************************************************************************************
        // ************************************** MUTATEURS (setters) ***************************************

        public function setBookings(Booking $booking) // CHECK
        {
            $this->_bookings[] = $booking;
        }

        // **************************************************************************************************

        public function addBooking(Booking $booking)
        {
            $this->_bookings[] = $booking;
        }

        public function __toString() // CHECK
        {
            return $this->getFirstName() . " " . strtoupper($this->getLastName());
        }


    }

?>