<?php

$request_url = basename( $_SERVER['REQUEST_URI'] ); ?>

<header class="mb-4 pt-1 pb-3">
    <div class="container">
        <p class="h1 mb-2 text-white text-center logo"><a href="index.php">Aberdeen Tales</a></p>

        <ul class="nav justify-content-center nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link<?php echo $request_url == 'index.php' ? ' active' : '' ?>" href="index.php">Facts about Scotland</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?php echo $request_url == 'test.php' ? ' active' : '' ?>" href="test.php">Useful Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?php echo $request_url == 'test1.php' ? ' active' : '' ?>" href="test1.php">Top Attractions in Aberdeen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?php echo $request_url == 'storyseeker.php' ? ' active' : '' ?>" href="storyseeker.php">Stories' Almanac</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?php echo $request_url == 'auth.php' ? ' active' : '' ?>" href="storyform.php">Run the Story</a>
            </li>
            <?php if ( $user_logged_in ) : ?>
                <li class="nav-item">
                    <a class="nav-link<?php echo $request_url == 'userform.php' ? ' active' : '' ?>" href="account.php">My account</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</header>


<?php 
/* 
display alerts

alert - <primary, secondary, success, danger, warning, info, light, dark
message - <html, text>
*/
if ( isset( $_GET['alert'] ) && isset( $_GET['message'] ) ) : ?>
    <div class="container">
        <div class="alert my-3 alert-dismissible fade show alert-<?php echo $_GET['alert'] ?>" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            <?php echo $_GET['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
<?php endif; ?>