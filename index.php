<?php 
// include database functions
include( 'db.php' ); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">

        <title>Hello, world!</title>
    </head>
    <body>
        <?php 
        // get header
        include( 'header.php' ); ?>
        
        <div class="container">
            <?php 
            // display content loop
            $count = 1;

            while ($count <= 10) : ?>
                <div class="card mb-5 shadow">
                    <div class="row g-0">
                        <div class="col-3">
                            <img src="./images/media1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>

                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
            // counter increment
            $count++;
            endwhile; ?>

        </div>

        <?php 
        // get footer
        include( 'footer.php' ); ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
