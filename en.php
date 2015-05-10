<?php include 'masterindex.php' ?>
<?php
echo $header . $nav . $content_before;
?>

<h1>Email Newsletter</h1>
<h5>To subscribe to the email newsletter for Amanda's Fine Art, please complete the form below and click submit.</h5>

<form class="newsletter">
    <div class="row left">
        <div class="large-12 left columns">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name">
        </div>
    </div>
    <div class="row left">
        <div class="large-12 left columns">
            <input type="text" placeholder="Email Address (required)">
        </div>
    </div>
    <div class="clearfix"></div>
     <div class="row left">
        <div class="large-12 left columns">
            <input type="radio" name="subscription-status" value="subscribe" class="newsletter">Subscribe
            <input type="radio" name="subscription-status" value="unsubscribe">Unsubscribe
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row left">
        <div class="large-12 left columns">
            <input type="submit" class="button" value="Submit">
        </div>
    </div>
</form>

<div class="clearfix"></div>
<br>
<hr>
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

<?php echo $content_after; ?>

<?php echo $footer; ?>
