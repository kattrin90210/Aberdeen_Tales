<?php

$db_server = 'localhost';
$db_name = 'kattrinc_app';
$db_username = 'root';
$db_password = 'root';

$bd = mysqli_connect( $db_server, $db_username, $db_password, $db_name );


if ( $bd == false ) {
    $request_url = basename( $_SERVER['REQUEST_URI'] );

    header( 'location: ' . $request_url . '?alert=danger&message=Error connect database: ' . mysqli_connect_error() ); 

    exit;
}

session_start(); // start user session

$user_logged_in = isset( $_SESSION['user_id'] ) && is_int( $_SESSION['user_id'] );
