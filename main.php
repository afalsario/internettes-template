<?php include 'masterindex.php' ?>
<?php
echo $header . $nav . $content_before;
?>

        <div class="featured-image large-12 columns">
            <img src="images/picture-of-flowers.jpg" alt="Yellow Flower" height="600" width="800">
        </div>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section>

<?php echo $content_after; ?>

    <div class="cta">
        <div class="row">
            <h1 class="small-12 columns">Join My Mailing List</h1>
            <form>
                <input type="text" placeholder="Email Address">
                <input type="submit" class="button" value="Submit">
            </form>
        </div>
    </div>

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

<?php echo $footer; ?>


