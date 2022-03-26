<?php
// include database functions
include( 'admin.php' );

if ( $user_logged_in && $is_admin ) {
    $sql = "SELECT * FROM users";

    $result = mysqli_query( $bd, $sql ); // get stories from database

    $users = mysqli_fetch_all( $result, MYSQLI_ASSOC ); // get data 
} else {
    $users = [];
} ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Users</title>
    </head>
    <body>
        <?php 
        // get header
        include( 'header.php' ); ?>
        
        <div class="container">
            <h1 class="text-center">Users</h1>

            <table class="table mb-5">
                <thead>
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Name</th>
                        <th scope="col">Occupation</th>
                        <th scope="col">E-mail</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?php echo $user['username'] ?></td>
                            <td><?php echo $user['name'] ?></td>
                            <td><?php echo $user['occupation'] ?></td>
                            <td><?php echo $user['email'] ?></td>

                            <td>
                                <?php if ( !$user['admin'] ) : ?>
                                    <a href="../user.php?action=deleteuser&admin=1&user_id=<?php echo $user['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
