<?php

session_start();

include 'src/BDDControl/connectBDD.php';

if(empty($_SERVER['QUERY_STRING'])) {
    header("Location: src/views/Page/home.php");
    exit;
}