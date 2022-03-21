<?php
// include database functions
include( 'db.php' );

$action = isset( $_GET['action'] ) ? $_GET['action'] : '';

if ( !$action ) {
    $action = isset( $_POST['action'] ) ? $_POST['action'] : '';
}

if ( !$user_logged_in ) {
    header( 'location: account.php' ); // redirect to login form
}


switch ( $action ) {
    case 'createstory':
        list(  
            'title'   => $title, 
            'content' => $content,
            'status'  => $status 
        ) = $_POST; // extract variabless from POST data 

        $author = (int) $_SESSION['user_id'];
        $image = isset( $_FILES['image']['name'] ) ? $_FILES['image']['name'] : ''; 


        // upload image
        if ( $image ) {
            if ( !move_uploaded_file( $_FILES['image']['tmp_name'], 'images/' . basename( $_FILES['image']['name'] ) ) ) {
                // error upload image
                $alert = 'danger';
                $message = 'Error upload file.';

                header( 'location: storyform.php?alert=' . $alert . '&message=' . $message ); // redirect to story page

                break;
            }
        }
       
        
        $sql = "INSERT INTO stories (`title`, `author`, `image`, `content`, `status`, `date`) VALUES ('$title', '$author', '$image', '$content', '$status', now())";
        $result = mysqli_query( $bd, $sql ); // insert user in database
    

        // create alert
        $alert = $result == true ? 'success' : 'danger';
        $message = $result == true ? 'Your story has been successfully updated.' : 'An error has occurred.';

        header( 'location: storyseeker.php?alert=' . $alert . '&message=' . $message ); // redirect to stories

        break;

    case 'editstory':
        list(  
            'id'      => $story_id,
            'title'   => $title, 
            'content' => $content,
            'status'  => $status 
        ) = $_POST; // extract variabless from POST data 

        $author = (int) $_SESSION['user_id'];
        $image = isset( $_FILES['image']['name'] ) ? $_FILES['image']['name'] : '';


        // delete uploaded image
        $sql = "SELECT image FROM stories WHERE id='$story_id'";
        $result = mysqli_query( $bd, $sql ); // get story from database
    
        $rows = mysqli_fetch_all( $result, MYSQLI_ASSOC ); // get data 
    
        list( 'image' => $old_image ) = array_shift( $rows ); // extract user data from database

        if ( $old_image && file_exists( 'images/' . $old_image ) ) {
            unlink( 'images/' . $old_image ); // delete old image
        }


        // upload new image
        if ( $image ) {
            if ( !move_uploaded_file( $_FILES['image']['tmp_name'], 'images/' . basename( $_FILES['image']['name'] ) ) ) {
                // error upload image
                $alert = 'danger';
                $message = 'Error upload file.';

                header( 'location: storyform.php?action=editstory&story_id=' . $story_id . '&alert=' . $alert . '&message=' . $message ); // redirect to story page

                break;
            }
        }


        $sql = "UPDATE stories SET title='$title', image='$image', content='$content', status='$status' WHERE id='$story_id'";
        $result = mysqli_query( $bd, $sql ); // insert user in database
    
        // create alert
        $alert = $result == true ? 'success' : 'danger';
        $message = $result == true ? 'Story successfully updated.' : 'Story update error.';

        header( 'location: storyform.php?action=editstory&story_id=' . $story_id . '&alert=' . $alert . '&message=' . $message ); // redirect to story page

        break;

    case 'deletestory':
        $story_id = $_GET['story_id']; // extract variabless from POST data 


        // delete uploaded image
        $sql = "SELECT image FROM stories WHERE id='$story_id'";
        $result = mysqli_query( $bd, $sql ); // get story from database
    
        $rows = mysqli_fetch_all( $result, MYSQLI_ASSOC ); // get data 
    
        list( 'image' => $image ) = array_shift( $rows ); // extract user data from database

        if ( $image && file_exists( 'images/' . $image ) ) {
            unlink( 'images/' . $image ); // delete image
        }


        // delete story from database
        $sql = "DELETE FROM stories WHERE id='$story_id'";
        $result = mysqli_query( $bd, $sql ); // insert user in database
    
        // create alert
        $alert = $result == true ? 'success' : 'danger';
        $message = $result == true ? 'Story deleted successfully!' : 'Story delete error.';

        header( 'location: storyseeker.php?alert=' . $alert . '&message=' . $message ); // redirect to authorization page

        break;
    
    default:
        header( 'Location: index.php' ); // redirect to authorization

        break;
}

exit;
