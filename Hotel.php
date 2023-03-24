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

    public function getName() // A TESTER
    {
        return $this->_name;
    }

    public function getAddressName() // A TESTER
    {
        return $this->_addressName;
    }

    public function getCity()
    {
        $result = $this->_city;
    }

    public function getZipCode() // A TESTER
    {
        return $this->_zipCode;
    }
    
    public function getFullAddress()
    {
        return $this->_addressName . " " . $this->_zipCode . " " . $this->_city;
    }

    public function getRooms() // A TESTER
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

    public function getNbRooms() // A TESTER
    {
        return count($this->_rooms);
    }

    public function getBookings() // A TESTER
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

    public function getNbBookings() // A TESTER
    {
        return count($this->_bookings);
    }

    public function getInfos()
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

    public function setName(string $name) // A TESTER
    {
        $this->_name = $name;
    }

    public function setAddressName(string $addressName) // A TESTER
    {
        $this->_addressName = $addressName;
    }

    public function setCity(string $city) // A TESTER
    {
        $this->_city = $city;
    }

    public function setZipCode(int $zipCode) // A TESTER
    {
        $this->_zipCode = $zipCode;
    }

    public function setRooms(Room $room) // A TESTER
    {
        $this->_rooms[] = $room;
    }

    public function setBookings(Booking $booking) // A TESTER
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

    public function __toString()
    {
        return $this->_name . " " . $this->_city;
    }
    
}

?>