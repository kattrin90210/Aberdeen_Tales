<?php 
// include database functions
include( 'db.php' );


$sql = "SELECT * 
FROM stories 
WHERE status='publish' 
ORDER BY date DESC 
LIMIT 8"; // get publish only

$result = mysqli_query( $bd, $sql ); // get stories from database

$stories = mysqli_fetch_all( $result, MYSQLI_ASSOC ); // get data 

// get authors
if ( $stories ) {
    $author_ids = array_column( $stories, 'author' ); // extract ids from user array
    $author_ids = array_unique( $author_ids );
    $author_ids = implode( "','", $author_ids ); // get authors ids

    $sql = "SELECT id, name FROM users WHERE id IN ('$author_ids')";

    $result = mysqli_query( $bd, $sql ); // get author from database
    $authors = mysqli_fetch_all( $result, MYSQLI_ASSOC );
} ?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <?php 
        // get head 
        include( 'head.html' ); ?>

        <title>Aberdeen Tales</title>
    </head>
    <body>
    <?php 
        // get header
        include( 'header.php' ); ?>

<div class="container">

<div class="row mt-5 story-list">
                <?php foreach ($stories as $story) :
                    $author = $authors[ array_search( $story['author'], array_column( $authors, 'id' ) ) ]; ?>

                    <div class="col-6">
                        <div class="card mb-5 shadow">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="<?php echo $story['image'] ? 'images/' . $story['image'] : 'images/media1.jpg' ?>" class="img-fluid rounded-start">
                                </div>

                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="storyseeker.php?story_id=<?php echo $story['id'] ?>"><?php echo $story['title'] ?></a>
                                            <?php if ( $story['status'] == 'draft' ) : ?>
                                                <span class="badge bg-warning text-dark">Draft</span>
                                            <?php endif; ?>
                                        </h5>
                                        <p class="card-text mb-1 text-secondary"><small><?php echo $story['date'] ?> | <i><?php echo $author['name'] ?></i></small></p>
                                        <p class="card-text"><?php echo mb_strimwidth( $story['content'], 0, 100, '...' ) ?></p>

                                        <a href="storyseeker.php?story_id=<?php echo $story['id'] ?>" class="btn btn-outline-primary btn-sm">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

        <?php 
        // get footer
        include( 'footer.html' ); ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

        