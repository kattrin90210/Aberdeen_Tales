<?php 
// include database functions
include( 'db.php' ); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
        // get head 
        include( 'head.html' ); ?>

        <title>Usefull nformation</title>
    </head>
    <body>
        <?php 
        // get header
        include( 'header.php' ); ?>

        <div class="position-relative overflow-hidden p-5 text-center bg-dark cover" style="background: url(images/cover-1.jpg) center / cover no-repeat">
            <div class="col-5 mx-auto my-5 text-white position-relative">
                <h1 class="display-4 fw-normal">Usefull information</h1>
                <p class="lead fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac laoreet diam. Duis vel ipsum id orci molestie finibus ac id purus. Donec laoreet metus erat, vitae rhoncus nunc efficitur non.</p>
                <a class="btn btn-outline-light" href="storyseeker.php">Go to stories</a>
            </div>
        </div>

        <div class="d-flex justify-content-center my-4">
            <img class="rounded-circle shadow" src="images/flag.png" width="60">
        </div>
        
        <div class="container">
        <!--https://getbootstrap.com/docs/5.1/layout/columns/-->
            <div class="row align-items-md-stretch g-0">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-white bg-dark">
                        <h2>View stories</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac laoreet diam. Duis vel ipsum id orci molestie finibus ac id purus.</p>
                        <a class="btn btn-outline-light" href="storyseeker.php">View all stories</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border">
                        <p class="my-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac laoreet diam. Duis vel ipsum id orci molestie finibus ac id purus. Donec laoreet metus erat, vitae rhoncus nunc efficitur non. Maecenas in urna a arcu ullamcorper vehicula. In semper tincidunt efficitur. Vestibulum vitae gravida nisi, vel feugiat lorem. Maecenas ut faucibus mauris. Phasellus at elit consequat, accumsan justo eget, cursus magna.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-md-stretch mb-4 m g-0">
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border">
                        <h2>New Story</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac laoreet diam. Duis vel ipsum id orci molestie finibus ac id purus.</p>
                        <a class="btn btn-outline-secondary" href="storyform.php">Run the story</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="h-100 p-5 text-white bg-dark">
                    <p class="my-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac laoreet diam. Duis vel ipsum id orci molestie finibus ac id purus. Donec laoreet metus erat, vitae rhoncus nunc efficitur non. Maecenas in urna a arcu ullamcorper vehicula. In semper tincidunt efficitur. Vestibulum vitae gravida nisi, vel feugiat lorem. Maecenas ut faucibus mauris. Phasellus at elit consequat, accumsan justo eget, cursus magna.</p>
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
