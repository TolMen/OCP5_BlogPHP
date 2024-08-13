<?php

if(empty($_SERVER['QUERY_STRING'])) {
    header("Location: src/views/homePage/home.php");
    exit;
}