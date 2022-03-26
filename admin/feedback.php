<?php
// include database functions
include( 'admin.php' );

if ( $user_logged_in && $is_admin ) {
    $sql = "SELECT * FROM feedback";

    $result = mysqli_query( $bd, $sql ); // get feedback from database

    $feedback = mysqli_fetch_all( $result, MYSQLI_ASSOC ); // get data 
} else {
    $feedback = [];
} ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Feedback</title>
    </head>
    <body>
        <?php 
        // get header
        include( 'header.php' ); ?>
        
        <div class="container">
            <h1 class="text-center">Feedback</h1>
            <!--https://getbootstrap.com/docs/5.1/components/list-group/-->
            <ul class="list-group">
                <?php foreach ($feedback as $message) : ?>
                    <li class="list-group-item d-flex justify-content-start align-items-start">
                        <div class="pe-4">
                            <div class="fw-bold"><?php echo $message['name'] ?></div>
                            <div><?php echo $message['email'] ?></div>

                            <small><date><?php echo $message['date'] ?></date></small>
                        </div>

                        <div class="me-auto pe-2">
                            <?php echo $message['message'] ?>
                        </div>

                        <a href="../story.php?action=deletefeedback&admin=1&message_id=<?php echo $message['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
