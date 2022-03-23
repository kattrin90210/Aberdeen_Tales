<?php 
// include database functions
include( 'db.php' );


if ( !$user_logged_in ) {
    header( 'location: account.php' ); // redirect to login form
} 

$action = isset( $_GET['action'] ) ? $_GET['action'] : '';

if ( $action == 'editstory' && isset( $_GET['story_id'] ) ) {
    $story_id = $_GET['story_id'];
    $sql = "SELECT * FROM stories WHERE id='$story_id'";
    $result = mysqli_query( $bd, $sql ); // get story from database

    $rows = mysqli_fetch_all( $result, MYSQLI_ASSOC ); // get data 

    list( 
        'title'   => $title, 
        'content' => $content, 
        'image'   => $image, 
        'date'    => $date,
        'status'  => $status
    ) = array_shift( $rows ); // extract user data from database
} else {
    $story_id = 0;
    $image = '';
} ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">

        <title>Share your story!</title>
    </head>
    <body>
        <?php 
        // get header
        include( 'header.php' ); ?>
        
        <div class="container">

            <h1 class="text-center">Share your story!</h1>
            <form method="POST" action="story.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label><i>*</i>
                    <input type="text" name="title" class="form-control" id="title" value="<?php echo $title ?? '' ?>" required>
                </div>

                <div class="mb-3">
                    <div class="row">
                        <?php if ( $image ) : ?>
                            <div class="col-2">
                                <img src="<?php echo './images/' . $image ?>" class="img-fluid">
                            </div>
                        <?php endif; ?>

                        <div class="col-<?php echo $image ? '10' : '12' ?>">
                            <label for="image" class="form-label"><?php echo $image ? 'Change image' : 'Upload photo' ?></label>
                            <input class="form-control" name="image" type="file" id="image">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Write here</label><i>*</i>
                    <textarea class="form-control" name="content" id="content" rows="10" required><?php echo $content ?? '' ?></textarea>
                </div>  

                <div class="form-check form-switch mb-4">
                    <input type="hidden" name="status" value="draft">
                    <input class="form-check-input" name="status" type="checkbox" value="publish" role="switch" id="status"<?php echo isset( $status ) && $status == 'publish' ? ' checked' : '' ?>>
                    <label class="form-check-label" for="status">Publish</label>
                </div>

                <?php if ( $story_id ) : ?>
                    <input type="hidden" name="id" value="<?php echo $story_id ?>">

                    <button type="submit" name="action" value="editstory" class="btn btn-primary">Save</button>
                    <a href="story.php?action=deletestory&story_id=<?php echo $story_id ?>" class="btn btn-danger">Delete</a>
                <?php else : ?>
                    <button type="submit" name="action" value="createstory" class="btn btn-primary">DONE!</button>
                <?php endif; ?>
            </form>

        </div>

        <?php 
        // get footer
        include( 'footer.html' ); ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
