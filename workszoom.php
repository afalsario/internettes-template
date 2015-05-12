<?php include 'masterindex.php' ?>
<?php
echo $header . $nav . $content_before;
?>
<div class="row">
    <div class=" featured-image large-12 med-12 small-12 columns">
        <section>
            <a href="#" class="image featured"><img src="images/blueflowers.png" alt="" /></a>
        </section>
    </div>

</div>
 <!--Gallery Info -->
<div class="row">
    <div class="large-6 medium-6 small-12 columns">
        <h2 class="left-align">Blue Flowers</h2>
        <p>30 X 30</p>
        <p>$900 USD</p>
        <p>Availability: On Hold</p>
    </div>

    <div class="large-6 medium-6 small-12 columns">
        <section class="box">
            <h2 class="left-align">Gallery Info</h2>
        <h4 class="zoom_left">Interesting Fine Art Gallery</h4>
        <p>(907) 903-9997<br>
            4th Avenue Marketplace, 333 W. 4th Ave, #211<br>
            Anchorage, Alaska 99501
        </p>
        <a href="#"><button class="button center">More Details</button></a>
    </div> 
</div>


<?php echo $content_after; ?>

<div class="cta">
        <div class="row">
            <h1 class="small-12 columns">Interested?</h1>
            <a href="works_inquire.php"><button class="button">Contact Artist</button></a>
                    <a href="#"><button class="Paypal"><img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/buy-logo-large.png" alt="Buy now with PayPal" /></button></a>

        </div>
    </div>
<?php echo $footer; ?>