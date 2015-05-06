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
                <a href="main.html" class="logo"><h1 class="large-4 columns">Artist Name</h1></a>
            </div>
        </header>'; ?>

 <?php $nav =

        '<nav class="large-offset-5 medium-offset-2 columns">
            <div class="row">
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
            </div>
        </nav>' ?>

<?php $content_before =

        '<div class="padding"></div>

        <div class="row">
            <section class="large-9 columns">
                <div>'?>

<?php $content_after =

                '</div>
            </section>
            <aside class="sidebar large-3 columns">
                    <div>
                        <p>This is the sidebar.</p>
                    </div>
            </aside>
        </div>
    </body>
</html>' ?>
