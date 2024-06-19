<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $country = htmlspecialchars($_POST["country"]);
    $password = htmlspecialchars($_POST["password"])

    echo $firstName." ";
    echo $lastName." lives in ";
    echo $country;
    echo hash($password);
}