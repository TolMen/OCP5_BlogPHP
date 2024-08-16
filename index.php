<?php

session_start();

include 'src/control/BDDControl/connectBDD.php';

/*
The script checks if the URL contains a query string. 
If no query string is present, the script redirects the user to the home page. 
If a redirection is necessary, script execution is stopped immediately.
*/
if(empty($_SERVER['QUERY_STRING'])) {
    header("Location: src/views/Page/home.php");
    exit;
}
