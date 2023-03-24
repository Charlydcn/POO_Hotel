<?php

class Hotel
{
    private string $_name;
    private string $_addressName;
    private string $_city;
    private int $_zipCode;
    private array $_rooms;
    private array $_bookings;

    public function __construct(string $_name, string $_addressName, string $_city, int $_zipCode)
    {
        $this->_name = $_name;
        $this->_addressName = $_addressName;
        $this->_city = $_city;
        $this->_zipCode = $_zipCode;
        $this->_rooms = [];
        $this->_bookings = [];       
    }

    //***************************************************** MÉTHODES *****************************************************
    //******************************************* ACCESSEURS (getters) *******************************************

    public function getName() // CHECK
    {
        return $this->_name;
    }

    public function getAddressName() // CHECK
    {
        return $this->_addressName;
    }

    public function getCity() // CHECK
    {
        return $this->_city;
    }

    public function getZipCode() // CHECK
    {
        return $this->_zipCode;
    }
    
    public function getFullAddress() // CHECK
    {
        return $this->_addressName . " " . $this->_zipCode . " " . $this->_city;
    }

    public function getRooms() // CHECK
    {
        $result = 
        "<table id='rooms_list'>
            <thead>
                <tr>
                    <th>CHAMBRE</th>
                    <th>PRIX</th>
                    <th>WIFI</th>
                    <th>ETAT</th>
                </tr>
            </thead>
            <tbody>";
        foreach ($this->_rooms as $room) {
            $result .= "<tr><td>" . "Chambre " . $room->getId() . "</td><td>" . $room->getPrice() . " €</td><td>" . $room->getWifiLogo() . "</td><td>" . mb_strtoupper($room->getState()) . "</tr>";
        }        
        $result .= "</tbody></table>";
        return $result;
    }

    public function getNbRooms() // CHECK
    {
        return count($this->_rooms);
    }

    public function getBookings() // CHECK
    {
        if (count($this->_bookings) > 1)
        {
            $result = "<h2>Réservation(s) de l'hôtel" . " " . $this->_name . " " . $this->_city . "</h2>";
            $result .= "<span class='booking_counter'>" . $this->getNbBookings() . " RÉSERVATION(S)</span>";
            $result .= "<p>";
            foreach ($this->_bookings as $booking) {
                $result .= $booking . "<br>";
            }
            $result .= "</p>";
            return $result;
        } else {
            $result = "<h2>Réservations de l'hôtel" . " " . $this->_name . " " . $this->_city . "</h2>";
            $result .= "<p>Aucune réservation ! </p>";
            return $result;
        }
    }

    public function getNbBookings() // CHECK
    {
        return count($this->_bookings);
    }

    public function getInfos() // CHECK
    {
        $nbAvailableRooms = $this->getNbRooms() - $this->getNbBookings();
        return "<h2>" . $this->_name . " " . $this->_city . "</h2>" 
        . "<p>" . $this->getFullAddress() .  "<br>"
        . "Nombre de chambres : " . $this->getNbRooms() . "<br>"
        . "Nombre de chambres réservées : " . $this->getNbBookings() . "<br>"
        . "Nombre de chambres disponibles : " . $nbAvailableRooms;
    }

    //************************************************************************************************************
    //******************************************* MUTATEURS (setters) *******************************************

    public function setName(string $name) // CHECK
    {
        $this->_name = $name;
    }

    public function setAddressName(string $addressName) // CHECK
    {
        $this->_addressName = $addressName;
    }

    public function setCity(string $city) // CHECK
    {
        $this->_city = $city;
    }

    public function setZipCode(int $zipCode) // CHECK
    {
        $this->_zipCode = $zipCode;
    }

    public function setRooms(Room $room) // CHECK
    {
        $this->_rooms[] = $room;
    }

    public function setBookings(Booking $booking) // CHECK
    {
        $this->_bookings[] = $booking;
    }

    //************************************************************************************************************

    public function addRoom(Room $room)
        {
            $this->_rooms[] = $room;
        }

    public function addBooking(Booking $booking)
        {
            $this->_bookings[] = $booking;
        }

    public function __toString() // CHECK
    {
        return $this->_name . " " . $this->_city;
    }
    
}

?>