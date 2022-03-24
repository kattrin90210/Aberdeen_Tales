<?php
include( 'db.php' ); 
if ( $user_logged_in ) {
    $user_id = (int) $_SESSION['user_id'];
    $sql = "SELECT name, email FROM users WHERE id='$user_id'";
    $result = mysqli_query( $bd, $sql );
    
    $rows = mysqli_fetch_all( $result, MYSQLI_ASSOC ); 

    list( 
        'name'  => $name,
        'email' => $email
    ) = array_shift( $rows ); // extract user data from database
} else {
    $user_id = 0;
} ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
        // get head 
        include( 'head.php' ); ?>

<title>Feedback</title>
    </head>
    <body>
        <?php 
        // get header
        include( 'header.php' );  ?>

<div class="container">

<h1 class="text-center mt-4">Write us</h1>
<!-- https://getbootstrap.com/docs/5.1/forms/overview/ -->

<form method="POST" action="story.php">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label><i>*</i>
                    <input type="text" name="name" class="form-control" id="name" value="<?php echo $name ?? '' ?>" required>
                </div>


                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label><i>*</i>
                    <input type="email" name="email" class="form-control" id="email" value="<?php echo $email ?? '' ?>" required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Write here</label><i>*</i>
                    <textarea class="form-control" name="message" id="content" rows="10" required></textarea>
                </div> 
                
                <button type="submit" name="action" value="sendfeedback" class="btn btn-primary">Send</button>
            </form>

        </div>

        <?php 
        // get footer
        include( 'footer.html' ); ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
