<?php
// include database functions
include( 'db.php' );

$action = isset( $_GET['action'] ) ? $_GET['action'] : '';

if ( !$action ) {
    $action = isset( $_POST['action'] ) ? $_POST['action'] : '';
}


switch ( $action ) {
    case 'registration': // new user regispration
        list( 
            'name'       => $name, 
            'occupation' => $occupation, 
            'email'      => $email, 
            'username'   => $username, 
            'password'   => $password 
        ) = $_POST; // extract variabless from POST data
   
    
        $sql = "INSERT INTO users (`name`, `occupation`, `email`, `username`, `password`) VALUES ('$name', '$occupation', '$email', '$username', '$password')";
    
        $result = mysqli_query( $bd, $sql ); // insert user in database

    
        // create alert
        $alert = $result == true ? 'success' : 'danger';
        $message = $result == true ? 'User ' . $username . ' successfully registered. Log in using your username and password.' : 'User registration error.';

        header( 'location: account.php?alert=' . $alert . '&message=' . $message ); // redirect to authorization page

        break;

    case 'authorization': // authorization
        list(  
            'username' => $username, 
            'password' => $password 
        ) = $_POST; // extract variabless from POST data

        $sql = "SELECT id FROM users WHERE username='$username' AND password='$password'";

        $result = mysqli_query( $bd, $sql ); // get user from database
        $rows = mysqli_fetch_all( $result, MYSQLI_ASSOC ); // get data 

        // create alert
        $url     = $rows ? 'index.php': 'account.php';
        $alert   = $rows ? 'success'  : 'danger';
        $message = $rows ? 'You have successfully logged in' : 'Incorrect login or password.';

        if ( $rows ) {
            foreach ($rows as $row) {
                if ( isset( $row['id'] ) && (int) $row['id'] > 0 ) {
                    $_SESSION['user_id'] = (int) $row['id']; // set user ID to session
                }
            }
        }

        header( 'location: ' . $url . '?alert=' . $alert . '&message=' . $message ); // redirect to homepage

        break;

    case 'updateuser': // update current user
        list(  
            'name'       => $name, 
            'occupation' => $occupation, 
            'email'      => $email, 
            'username'   => $username,
            'password'   => $password,
            'id'         => $user_id
        ) = $_POST; // extract variabless from user data 

        $sql = "UPDATE users SET name='$name', occupation='$occupation', email='$email', username='$username', password='$password' WHERE id='$user_id'";
        $result = mysqli_query( $bd, $sql ); // update user from database

        // create alert
        $alert = $result == true ? 'success' : 'danger';
        $message = $result == true ? 'User ' . $username . ' successfully updated.' : 'User update error.';

        header( 'location: account.php?alert=' . $alert . '&message=' . $message ); // redirect to authorization page

        break;

    case 'logout': // loguot user
        session_destroy(); // clear session

        header( 'location: account.php' ); // redirect to login form

        break;
    
    default:
        header( 'Location: account.php' ); // redirect to authorization

        break;
}

exit;
