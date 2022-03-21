<?php 
// include database functions
include( 'db.php' ); 


if ( $user_logged_in ) {
    $user_id = (int) $_SESSION['user_id'];
    $sql = "SELECT * FROM stories WHERE status='publish' OR author='$user_id'"; // get publish and author draft
} else {
    $sql = "SELECT * FROM stories WHERE status='publish'"; // get publish only
}
$result = mysqli_query( $bd, $sql ); // get stories from database

$stories = mysqli_fetch_all( $result, MYSQLI_ASSOC ); // get data 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">

        <title>Stories's Almanac</title>
    </head>
    <body>
        <?php 
        // get header
        include( 'header.php' ); ?>
        
        <div class="container">

            <h1 class="text-center">Stories' Almanac</h1>

            <?php foreach ($stories as $story) : ?>
                <div class="card mb-5 shadow">
                    <div class="row g-0">
                        <div class="col-3">
                            <img src="<?php echo $story['image'] ? 'images/' . $story['image'] : 'images/media1.jpg' ?>" class="img-fluid rounded-start">
                        </div>

                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $story['title'] ?>
                                    <?php if ( $story['status'] == 'draft' ) : ?>
                                        <span class="badge bg-warning text-dark">Draft</span>
                                    <?php endif; ?>
                                </h5>
                                <p class="card-text"><?php echo $story['content'] ?></p>
                                
                                <?php if ( $user_logged_in && $story['author'] == $_SESSION['user_id'] ) : ?>
                                    <a href="storyform.php?action=editstory&story_id=<?php echo $story['id'] ?>" class="btn btn-secondary">Edit story</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

        <?php 
        // get footer
        include( 'footer.php' ); ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
