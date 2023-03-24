<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/CSS/style.css">  
    <style> <?php include '/laragon/www/Charly/Hotel/CSS/style.css'; ?> </style>
</head>
<body>

    <?php

        spl_autoload_register(function ($class_name) {
            include $class_name . ".php";
        });

        // INSTANCIATIONS *************************************************************************************************

        // HÔTELS ********************************
        $hilton = new Hotel("Hilton ****", "10 route de la gare", "Strasbourg", "67000");
        $regent = new Hotel("Regent ****", "61 rue Dauphine", "Paris", "75006");

        // CLIENTS ********************************
        $mickaMurmann = new Client("Micka", "Murmann", "Male", "1989/04/19");
        $virgileGibello = new Client("Virgile", "Gibello", "Male", "1985/01/02");

        // CHAMBRES ********************************
        $chambre1 = new Room("1", $hilton, "2", 120, false, true);
        $chambre2 = new Room("2", $hilton, "2", 120, false, true);
        $chambre3 = new Room("3", $hilton, "2", 120, false, false);
        $chambre4 = new Room("3", $hilton, "2", 120, false, true);
        $chambre5 = new Room("5", $hilton, "2", 120, false, true);
        $chambre6 = new Room("6", $hilton, "2", 120, false, true);
        $chambre7 = new Room("7", $hilton, "2", 120, false, false);
        $chambre8 = new Room("8", $hilton, "2", 120, false, false);
        $chambre9 = new Room("9", $hilton, "2", 120, false, true);
        $chambre10 = new Room("10", $hilton, "2", 120, false, true);
        $chambre11 = new Room("11", $hilton, "2", 120, false, false);
        $chambre12 = new Room("12", $hilton, "2", 120, false, true);
        $chambre13 = new Room("13", $hilton, "2", 120, false, false);
        $chambre14 = new Room("14", $hilton, "2", 120, false, true);
        $chambre15 = new Room("15", $hilton, "2", 120, false, false);
        $chambre16 = new Room("16", $hilton, "2", 300, true, true);
        $chambre17 = new Room("17", $hilton, "2", 300, true, false);
        $chambre18 = new Room("18", $hilton, "2", 300, true, true);
        $chambre19 = new Room("19", $hilton, "2", 300, true, true);
        $chambre20 = new Room("20", $hilton, "2", 120, false, false);
        $chambre21 = new Room("21", $hilton, "2", 120, false, true);
        $chambre22 = new Room("22", $hilton, "2", 120, false, false);
        $chambre23 = new Room("23", $hilton, "2", 120, false, true);
        $chambre24 = new Room("24", $hilton, "2", 120, false, false);
        $chambre25 = new Room("25", $hilton, "2", 120, false, false);
        $chambre26 = new Room("26", $hilton, "2", 120, false, false);
        $chambre27 = new Room("27", $hilton, "2", 120, false, false);
        $chambre28 = new Room("28", $hilton, "2", 120, false, false);
        $chambre29 = new Room("29", $hilton, "2", 120, false, false);
        $chambre30 = new Room("30", $hilton, "2", 120, false, false);
   
        // RÉSERVATIIONS ********************************
        $booking1 = new Booking($virgileGibello, $hilton, $chambre17, "2021/01/01", "2021/01/01");
        $booking2 = new Booking($mickaMurmann, $hilton, $chambre3, "2021/03/11", "2021/03/15");
        $booking3 = new Booking($mickaMurmann, $hilton, $chambre4, "2021/04/01", "2021/04/17");

        // ****************************************************************************************************************
        // AFFICHAGE *************************************************************************
        echo $hilton->getInfos() . "<br><br>";
        echo $hilton->getBookings() . "<br>";
        echo $regent->getBookings() . "<br>";
        echo $mickaMurmann->getBookings() . "<br><br>";
        echo $hilton->getRooms();

    ?>

</body>
</html>