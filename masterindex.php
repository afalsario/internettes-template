<?php

$header = '
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Internettes Template</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>
        <header>
            <div class="topbar"></div>
            <div class="row">
                <a href="main.html" class="logo"><h1 class="large-6 columns">Artist Name</h1></a>
            <!-- </div> -->
        </header>'; ?>

<?php $nav =

// <div class="row">
            '<nav class="large-offset-5 columns">
                <label for="mobile-menu" class="mobile-menu">Menu</label>
                <input type="checkbox" id="mobile-menu" role="button">
                <ul id="menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Galleries</a></li>
                    <li><a href="#">Works</a></li>
                    <li><a href="#">Newsletter</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </nav>
        </div>' ?>

<?php $content_before =

        '<div class="padding"></div>

        <div class="row">
            <section class="large-9 medium-9 columns">
                <div>'?>

<?php $content_after =

                '</div>
            </section>
            <aside class="sidebar large-3 medium-3 columns">
                    <div>
                        <p>This is the sidebar.</p>
                    </div>
            </aside>
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
