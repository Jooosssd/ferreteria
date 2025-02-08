<?php
    $mysqli = new mysqli("localhost", "root", "123", "ferreteria");

    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }
?>