<?php 
// include database functions
include( 'db.php' ); 

$sql = "SELECT * 
FROM stories 
WHERE status='publish' 
ORDER BY date DESC 
LIMIT 3"; // get publish only

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

        <title>Run the Story</title>
    </head>
    <body>
        <?php 
        // get header
        include( 'header.php' ); ?>

    <div class="position-relative overflow-hidden p-3 text-center bg-light cover" style="background: url(images/cover-1.jpg) center / cover no-repeat">
            <div class="col-6 p-5 mx-auto my-5 position-relative">
                <h1 class="display-4 fw-normal">Top Attractions in Aberdeen</h1>
                <p class="lead fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac laoreet diam. Duis vel ipsum id orci molestie finibus ac id purus. Donec laoreet metus erat, vitae rhoncus nunc efficitur non. Maecenas in urna a arcu ullamcorper vehicula. In semper tincidunt efficitur. Vestibulum vitae gravida nisi, vel feugiat lorem. Maecenas ut faucibus mauris. Phasellus at elit consequat, accumsan justo eget, cursus magna. Ut mi nulla, porttitor id ornare vitae, sagittis non augue. Mauris ante enim, facilisis vel mi mattis, porta efficitur metus.</p>
                <a class="btn btn-primary btn-lg" href="storyseeker.php">Go to stories</a>
            </div>
    </div>       
        
        <div class="container">
        <div class="col-6 p-3 mx-auto my-3">
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac laoreet diam. Duis vel ipsum id orci molestie finibus ac id purus. Donec laoreet metus erat, vitae rhoncus nunc efficitur non. Maecenas in urna a arcu ullamcorper vehicula. In semper tincidunt efficitur. Vestibulum vitae gravida nisi, vel feugiat lorem. Maecenas ut faucibus mauris. Phasellus at elit consequat, accumsan justo eget, cursus magna. Ut mi nulla, porttitor id ornare vitae, sagittis non augue. Mauris ante enim, facilisis vel mi mattis, porta efficitur metus. Vestibulum tristique purus sit amet vestibulum porta. Aliquam malesuada et ante ut pretium.
                </p>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <?php foreach ($stories as $story) :
                    $author = $authors[ array_search( $story['author'], array_column( $authors, 'id' ) ) ]; ?>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="<?php echo $story['image'] ? 'images/' . $story['image'] : 'images/media1.jpg' ?>" class="img-fluid">

                    <div class="card-body">
                        <h5 class="card-title"><a href="storyseeker.php?story_id=<?php echo $story['id'] ?>"><?php echo $story['title'] ?></a></h5>
                        <p class="card-text mb-1 text-secondary"><small><?php echo $story['date'] ?> | <i><?php echo $author['name'] ?></i></small></p>
                        <p class="card-text"><?php echo mb_strimwidth( $story['content'], 0, 100, '...' ) ?></p>

                        <a href="storyseeker.php?story_id=<?php echo $story['id'] ?>" class="btn btn-outline-secondary btn-sm">Read more</a>
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
