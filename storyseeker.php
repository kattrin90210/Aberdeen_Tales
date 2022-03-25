<?php 
// include database functions
include( 'db.php' ); 


$story_id = isset( $_GET['story_id'] ) ? (int) $_GET['story_id'] : 0;
$user_id = $user_logged_in && isset( $_SESSION['user_id'] ) ? (int) $_SESSION['user_id'] : 0;


if ( $story_id ) { // get single story
    if ( $user_id ) {
        $sql = "SELECT * FROM stories WHERE id='$story_id'"; 
    } else {
        $sql = "SELECT * FROM stories WHERE id='$story_id' AND status='publish'";
    }
} else { // get all stories
    if ( $user_id ) {
        $sql = "SELECT * FROM stories WHERE status='publish' OR author='$user_id' ORDER BY date DESC"; // include author drafts
    } else {
        $sql = "SELECT * FROM stories WHERE status='publish' ORDER BY date ASC";
    }
}

$result = mysqli_query( $bd, $sql ); // get stories from database
$stories = mysqli_fetch_all( $result, MYSQLI_ASSOC );

// get authors
if ( $stories ) {
    $author_ids = array_column( $stories, 'author' ); // extract ids from user array
    $author_ids = array_unique( $author_ids );
    $author_ids = implode( "','", $author_ids ); // get authors ids

    $sql = "SELECT id, name FROM users WHERE id IN ('$author_ids')";

    $result = mysqli_query( $bd, $sql ); // get author from database
    $authors = mysqli_fetch_all( $result, MYSQLI_ASSOC );

    $authors = $story_id ? array_shift( $authors ) : $authors;

    // author filter
    if ( isset( $_GET['author'] ) && $_GET['author'] ) {
        $stories = array_filter( $stories, function( $story ) {
            return $story['author'] == $_GET['author'];
        } );
    }
}


$story = $story_id && $stories ? array_shift( $stories ) : null; // extract first element from stories array
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
        // get head 
        include( 'head.html' ); ?>

        <title>Stories's Almanac</title>
    </head>
    <body>
        <?php 
        // get header
        include( 'header.php' ); ?>
        
        <div class="container">

            <?php if ( $story_id && $story ) : ?>
                <!-- Single story -->
                <h1 class="text-center my-4">
                    <?php echo $story['title'] ?>
                    <?php if ( $story['status'] == 'draft' ) : ?>
                        <span class="badge bg-warning text-dark">Draft</span>
                    <?php endif; ?>
                </h1>

                <div class="card-text">
                    <img src="<?php echo $story['image'] ? 'images/' . $story['image'] : 'images/media1.jpg' ?>" class="float-start me-4" style="max-width: 400px">

                    <p class="card-text mb-0"><strong><?php echo $story['date'] ?></strong></p>
                    <p class="card-text mb-2">
                        <i><?php echo $authors['name'] ?></i><?php if ( $user_logged_in && $story['author'] == $_SESSION['user_id'] ) : ?>
                            | <a href="storyform.php?action=editstory&story_id=<?php echo $story['id'] ?>">Edit story</a> | <a href="story.php?action=deletestory&story_id=<?php echo $story['id'] ?>" class="text-danger">Delete</a>
                        <?php endif; ?>
                    </p>
                    <?php echo $story['content'] ?>
                </div>

                <div class="clearfix"></div>

                <div class="d-flex justify-content-center my-4">
                    <a class="btn btn-primary btn-lg" href="storyseeker.php">View all stories</a>
                </div>

            <?php else : ?>

                <h1 class="text-center my-4">Stories's Almanac</h1>

                <!-- Author filter -->
                <?php if ( $stories ) : ?>
                    <div class="row justify-content-end my-4">
                        <div class="col-auto">
                            <label for="authorselect" class="col-form-label">Select author</label>
                        </div>

                        <div class="col-auto">
                            <select class="form-select" id="authorselect" onchange="window.location.href = 'storyseeker.php?author=' + this.value">
                                <option value="">All</option>
                                <?php foreach ($authors as $author) : ?>
                                    <option value="<?php echo $author['id'] ?>"<?php echo isset( $_GET['author'] ) && $_GET['author'] == $author['id'] ? ' selected' : '' ?>><?php echo $author['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Story list -->
                <div class="story-list">
                    <?php foreach ($stories as $story) : 
                        $author = $authors[ array_search( $story['author'], array_column( $authors, 'id' ) ) ]; ?>
                        <!-- bootstrap card template -->
                        <div class="card mb-5 shadow">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="<?php echo $story['image'] ? 'images/' . $story['image'] : 'images/media1.jpg' ?>" class="img-fluid rounded-start">
                                </div>

                                <div class="col-8">
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="storyseeker.php?story_id=<?php echo $story['id'] ?>"><?php echo $story['title'] ?></a>
                                            <?php if ( $story['status'] == 'draft' ) : ?>
                                                <span class="badge bg-warning text-dark">Draft</span>
                                            <?php endif; ?>
                                        </h3>
                                        <p class="card-text text-secondary mb-2"><small><?php echo $story['date'] ?> | <i><?php echo $author['name'] ?></i></small></p>
                                        <p class="card-text"><?php echo mb_strimwidth( $story['content'], 0, 400, '...' ) ?></p>

                                        <a href="storyseeker.php?story_id=<?php echo $story['id'] ?>" class="btn btn-outline-primary">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>

        <?php 
        // get footer
        include( 'footer.html' ); ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
