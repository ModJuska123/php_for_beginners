<?php
//priskiriu kintamuosius:
$db_host = "localhost";
$db_name = "lecture";
$db_user = "root";
$db_pass = "";

//susikonektinu su lentele (db)
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//err pranešimas nepavykus
if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}