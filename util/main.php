<?php
// Get the document root
$doc_root = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT', FILTER_SANITIZE_STRING);

// Get the application path
$uri = filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_STRING);
$dirs = explode('/', $uri);
$app_path = '/' . $dirs[1] . '/' . $dirs[2] . '/';

// Set the include path
set_include_path($doc_root . $app_path);

// Get common code

// Define some common functions
function display_db_error($error_message) {
    global $app_path;
    include 'errors/index23.php';
    exit;
}

function display_error_2($error_message) {
    global $app_path;
    include 'errors/index23.php';
    exit;
}

function redirect($url) {
    session_write_close();
    header("Location: " . $url);
    exit;
}

 function isValidTime($timeStr){

    $dateObj = DateTime::createFromFormat('d.m.Y H:i', "10.10.2010 " . $timeStr);
    $dateObjOffset = DateTime::createFromFormat('d.m.Y H:i', "10.10.2010 " . '24:00');

    if($dateObjOffset <= $dateObj){
        return false;
    }
    if ($dateObj !== false) {
       return true;
    }
    else{
       return false;
    }
}

// Start session to store user and cart data
session_start();
?>
