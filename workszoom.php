<?php include 'masterindex.php' ?>
<?php
echo $header . $nav . $content_before;
?>

<div class="row recent-work">
            <div class="large-12 medium-12 columns">
                <ul class="pagination" role="menubar" aria-label="Pagination">
  <li class="arrow unavailable" aria-disabled="true"><a href="">&laquo; Previous</a></li>
  <li class="current"><a href="">1</a></li>
  <li><a href="">2</a></li>
  <li><a href="">3</a></li>
  <li><a href="">4</a></li>
  <li class="unavailable" aria-disabled="true"><a href="">&hellip;</a></li>
  <li><a href="">12</a></li>
  <li><a href="">13</a></li>
  <li class="arrow"><a href="">Next &raquo;</a></li>
</ul>
            <br></br>
            <br></br>

            </div>
        </div>
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
<br>

<?php echo $content_after; ?>

<div class="cta">
    <div class="row">
        <h1 class="small-12 columns">Interested?</h1>
        <div class="center">
            <a href="works_inquire.php"><button class="button">Contact Artist</button></a>
            <a href="#"><button class="Paypal"><img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/buy-logo-large.png" alt="Buy now with PayPal" /></button></a>
        </div>
    </div>
</div>



<?php echo $footer; ?>




