<?php

$request_url = basename( $_SERVER['REQUEST_URI'] ); ?>

<header class="pt-1">
    <div class="container">
        <p class="h1 mb-2 text-white text-center logo">
            <a href="index.php">Aberdeen Tales</a>
        </p>
    </div> 
    
    <nav class="navbar navbar-expand navbar-dark">
        <div class="container justify-content-center">
          
    <!-- bootstrap nav template https://getbootstrap.com/docs/5.1/components/navs-tabs/ -->

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link<?php echo $request_url == 'index.php' ? ' active' : '' ?>" href="index.php">Facts about Scotland</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?php echo $request_url == 'useful.php' ? ' active' : '' ?>" href="usefull.php">Useful Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?php echo $request_url == 'storyteller.php' ? ' active' : '' ?>" href="storyteller.php">Top Attractions in Aberdeen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?php echo $request_url == 'storyseeker.php' ? ' active' : '' ?>" href="storyseeker.php">Stories' Almanac</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?php echo $request_url == 'storyform.php' ? ' active' : '' ?>" href="storyform.php">Run the Story</a>
            </li>

            <?php if ( $user_logged_in ) : ?>
                <li class="nav-item">
                    <a class="nav-link<?php echo $request_url == 'account.php' ? ' active' : '' ?>" href="account.php">My account</a>
                </li>


                <?php if ( isset( $_SESSION['admin'] ) && $_SESSION['admin'] === true ) : ?>
                <li class="nav-item">
                    <a href="admin/index.php" class="nav-link">Admin Dashboard</a>
                </li>   

                <?php endif; ?>
            <?php endif; ?>
        </ul>
    </div>
</nav>
</header>


<?php 
/* 
display alerts

alert - <primary, secondary, success, danger, warning, info, light, dark
message - <html, text>
*/
if ( isset( $_GET['alert'] ) && isset( $_GET['message'] ) ) : ?>
    <div class="container">

<!-- bootstrap alert template https://getbootstrap.com/docs/5.1/components/alerts/ -->

        <div class="alert my-3 alert-dismissible fade show alert-<?php echo $_GET['alert'] ?>" role="alert">
            <?php echo $_GET['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
<?php endif; ?>
