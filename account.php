<?php 
// include database functions
include( 'db.php' ); 

$action = isset( $_GET['action'] ) ? $_GET['action'] : '';


if ( $user_logged_in ) { // get user data
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT name, occupation, email, username, password FROM users WHERE id='$user_id'";
    $result = mysqli_query( $bd, $sql ); // get user from database

    if ( !$result ) {
        session_destroy(); // clear session

        header( 'location: account.php' ); // redirect to login form
    }

    $rows = mysqli_fetch_all( $result, MYSQLI_ASSOC ); // get data 

    list( 
        'name'       => $name, 
        'occupation' => $occupation, 
        'email'      => $email, 
        'username'   => $username,
        'password'   => $password
    ) = array_shift( $rows ); // extract user data from database
} else {
    $user_id = 0;
} ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">

        <title>Account</title>
    </head>
    <body>
        <?php 
        // get header
        include( 'header.php' ); ?>
        
        <div class="container">
            <?php if ( !$user_id && !$action ) : ?>
                <h1 class="text-center">Authorization</h1>
            <?php elseif ( !$user_id && $action == 'registration' ) : ?>
                <h1 class="text-center">Registration</h1>
            <?php elseif ( $user_id ) : ?>
                <h1 class="text-center">Edit profile</h1>
            <?php endif ; ?>

            <div class="row">
                <div class="col-6 offset-3">
                    <div class="card shadow my-3">
                        <div class="card-body">
                            <?php if ( !$user_id && !$action ) : ?>
                                <form method="POST" action="user.php">
                                    <div class="mb-3">
                                        <label for="login" class="form-label">Login</label><i>*</i>
                                        <input type="text" name="username" class="form-control" id="login" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label><i>*</i>
                                        <input type="password" name="password" class="form-control" id="password" required>
                                    </div>
                                    
                                    <button type="submit" name="action" value="authorization" class="btn btn-primary">Login</button>
                                    <a href="account.php?action=registration" class="btn">Registration</button>
                                </form>
                            <?php endif; ?>

                            <?php if ( $user_id || $action == 'registration' ) : ?>
                                <form method="POST" action="user.php">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label><i>*</i>
                                        <input type="text" name="name" class="form-control" id="name" value="<?php echo $name ?? '' ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="occupation" class="form-label">Occupation</label>
                                        <input type="text" name="occupation" class="form-control" id="occupation" value="<?php echo $occupation ?? '' ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label><i>*</i>
                                        <input type="email" name="email" class="form-control" id="email" value="<?php echo $email ?? '' ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="login" class="form-label">Create Login</label><i>*</i>
                                        <input type="text" name="username" class="form-control" id="login" value="<?php echo $username ?? '' ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Create Password</label><i>*</i>
                                        <input type="password" name="password" class="form-control" id="password" value="<?php echo $password ?? '' ?>" required>
                                    </div>
                                    
                                    <?php if ( $user_id ) : 
                                        // if authorized ?>
                                        <input type="hidden" name="id" value="<?php echo $user_id ?>">

                                        <button type="submit" name="action" value="updateuser" class="btn btn-primary">Save</button>
                                        <a href="user.php?action=logout" class="btn btn-secondary">Log out</a>
                                    <?php else : 
                                        // if not authorized 
                                        if ( $action == 'registration' ) : ?>
                                            <button type="submit" name="action" value="registration" class="btn btn-primary">Register</button>
                                            <a href="account.php" class="btn">Sign In</a>
                                        <?php else : ?>
                                            <button type="submit" name="action" value="authorization" class="btn btn-primary">Login</button>
                                            <a href="account.php?action=registration" class="btn">Registration</a>
                                        <?php endif;
                                    endif; ?>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php 
        // get footer
        include( 'footer.html' ); ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
