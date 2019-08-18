<?php




    ob_start();
    $timezone = date_default_timezone_set("Europe/Berlin");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "players";

    $con = mysqli_connect($servername, $username, $password, $database);


    if (mysqli_connect_errno()) {
        echo "Fail to connect to Player Server" . mysqli_connect_errno();
    }



    ob_start();
    $timezone = date_default_timezone_set("Europe/Berlin");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fyp_login";

    $con = mysqli_connect($servername, $username, $password, $database);


    if (mysqli_connect_errno()) {
        echo "Fail to connect to Login Server" . mysqli_connect_errno();
    }
