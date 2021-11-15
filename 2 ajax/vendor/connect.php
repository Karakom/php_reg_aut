<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'aut_reg');

    if (!$connect) {
        die('Error connect to DataBase');
    }