<?php


function fatalErrorHandler()
{
# Getting last error
    $error = error_get_last();
# Checking if last error is a fatal error
    if (($error['type'] === E_ERROR) || ($error['type'] === E_USER_ERROR)) {
# Here we handle the error, displaying HTML, logging, …
        echo 'There is an error has occured in ' . $error['file'];
// Perform API calls .
    }
}

# Registering shutdown function
register_shutdown_function('fatalErrorHandler');




use Torre\Torre;

ini_set("display_errors", 1);
include __DIR__ . "/vendor/autoload.php";

try {

    Torre::run();
} catch (Exception $e) {
    echo $e->getMessage();
}