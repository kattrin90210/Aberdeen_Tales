<?php
// include database functions
include( '../db.php' ); 

$is_admin = isset( $_SESSION['admin'] ) && $_SESSION['admin'] === true;

if ( !$is_admin ) {
    // create alert
    $alert = 'danger';
    $message = 'You are not an administrator.';

    header( 'location: account.php?alert=' . $alert . '&message=' . $message ); // redirect to authorization page
} 
