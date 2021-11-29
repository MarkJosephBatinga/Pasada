<?php

function ConnectionString()
{
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "pasada";

    return mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
}