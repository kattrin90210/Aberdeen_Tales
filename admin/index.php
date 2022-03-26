<?php
// include database functions
include( 'admin.php' );

if ( $user_logged_in && $is_admin ) {
    $sql = "SELECT * FROM stories";

    $result = mysqli_query( $bd, $sql ); // get stories from database

    $stories = mysqli_fetch_all( $result, MYSQLI_ASSOC ); // get data 
} else {
    $stories = [];
} ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Dashboard</title>
    </head>
    <body>
        <?php 
        // get header
        include( 'header.php' ); ?>
        
        <div class="container">
        <h1 class="text-center">Stories</h1>
            <!--https://getbootstrap.com/docs/5.1/components/list-group/-->
            <ul class="list-group">
                <?php foreach ($stories as $story) : ?>
                    <li class="list-group-item d-flex justify-content-start align-items-start">
                        <img src="<?php echo $story['image'] ? '../images/' . $story['image'] : '../images/media1.jpg' ?>" width="100">

                        <div class="ms-4 me-auto">
                            <div class="fw-bold"><?php echo $story['title'] ?></div>

                            <small><date><?php echo $story['date'] ?></date> <span class="badge bg-primary rounded-pill"><?php echo $story['status'] == 'draft' ? 'Draft' : 'Publish' ?></span></small>
                        </div>

                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                            <a href="../storyform.php?action=editstory&admin=1&story_id=<?php echo $story['id'] ?>" class="btn btn-secondary">Edit</a>
                            <a href="../story.php?action=deletestory&admin=1&story_id=<?php echo $story['id'] ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
