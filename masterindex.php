<?php
$header = '
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Internettes Template</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="http://fonts.googleapis.com/css?family=Baumans" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>
    <div class="topbar">
        <div class="row">
            <nav class="large-6 medium-1 small-1 left columns">
                <label for="topbar-menu" class="topbar-menu">Menu</label>
                <input type="checkbox" id="topbar-menu" role="button">
                <ul id="top-menu">
                    <li><a href="blogfront.php">Blog</a></li>
                    <li><a href="en.php">Newsletter</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <div class="icons large-6 medium-10 small-10 columns">
                <i class="fa fa-facebook-square"></i>
                <i class="fa fa-tumblr-square"></i>
                <i class="fa fa-twitter-square"></i>
                <i class="fa fa-pinterest-square"></i>
                <i class="fa fa-google-plus-square"></i>
                <i class="fa fa-linkedin-square"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-rss"></i>
            </div>
        </div>
    </div>
            <header class="row">
                <a href="main.php" class="logo"><h1 class="large-6 columns">Amanda\'s Fine Art</h1></a>
            </header>'; ?>
<?php $nav =
        '<div class="row">
            <nav class="large-6 right columns">
                <label for="mobile-menu" class="mobile-menu">Menu</label>
                <input type="checkbox" id="mobile-menu" role="button">
                <ul id="menu">
                    <li><a href="main.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="collections.php">Works</a></li>
                    <li><a href="galleries.php">Galleries</a></li>
                   
                    

                </ul>
            </nav>
        </div>' ?>

<?php $content_before =
        '<div class="padding"></div>
        <div class="row">
            <div class="large-12 columns">
                <div class="sidebar right large-3 medium-3 columns">
                    <h3>Upcoming Events</h3>
                    <div>
                        <h4>4.25.15</h4>
                        <a href="#"><p>Art Show @ The Pearl</p></a></a>
                        <h4>5.25.15</h4>
                        <a href="#"><p>Art Show @ The Pearl</p></a>
                        <h4>6.25.15</h4>
                        <a href="#"><p>Art Show @ The Pearl</p></a>
                    </div>
                    <h3>Latest Posts</h3>
                    <div>
                        <h4>4.12.15</h4>
                        <a href="#"><p>New Post</p></a>
                        <h4>2.12.15</h4>
                        <a href="#"><p>Painting Process</p></a>
                        <h4>1.25.15</h4>
                        <a href="#"><p>My Muse</p></a>
                        <h4>12.1.14</h4>
                        <a href="#"><p>New Gallery Shows</p></a>
                    </div>
                </div>
                <section class="large-9 medium-9 columns">'?>

<?php $content_after =
                '
                </section>
            </div>
        </div>'?>

<?php $footer =
        '<hr>
        <div class="row recent-work">
            <h1 class="small-12 large-centered columns">Recent Works</h1>
            <div class="large-4 medium-4 columns">
                <section class="box feature">
                    <a href="#" class="image featured"><img src="images/birdflower.png" alt="" /></a>
                    <h3>Image Title</h3>
                </section>
            </div>
            <div class="large-4 medium-4 columns">
                <!-- Box -->
                <section class="box feature">
                    <a href="#" class="image featured"><img src="images/darksunflower.png" alt="" /></a>
                    <h3>Image Title</h3>
                </section>
            </div>
            <div class="large-4 medium-4 columns">
                <!-- Box -->
                <section class="box feature last">
                    <a href="#" class="image featured"><img src="images/humbirdparty.png" alt="" /></a>
                    <h3>Image Title</h3>
                </section>
            </div>
        </div>


        <footer>
            <div class="row">
                <div class="large-12 columns">
                    <p>Artist Websites by <a href="http://faso.com">FineArtStudioOnline</a></p>
                </div>
            </div>
        </footer>
    </body>
</html>' ?>
