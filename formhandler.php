<?php

//var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $imie = htmlspecialchars($_POST["imie"]);
    $nazwisko = htmlspecialchars($_POST["nazwisko"]);
    $plec = htmlspecialchars($_POST["plec"]);
    
    echo "Twoje dane które podałeś";
    echo "<br>";
    echo $imie;
    echo "<br>";
    echo $nazwisko;
    echo "<br>";
    echo $plec;

    header("Location: ../formularz.php");
}   else {
    header("Location: ../formularz.php");
}
