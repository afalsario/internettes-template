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
            <input type="email" placeholder="Email Address (required)" required>
        </div>
    </div>
    <div class="clearfix"></div>
     <div class="row left">
        <div class="large-12 left columns">
            <label>Subscribe</label>
            <input type="radio" name="subscription-status" value="subscribe" class="newsletter">
            <label>Unsubscribe</label>
            <input type="radio" name="subscription-status" value="unsubscribe">
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

<?php echo $content_after; ?>

<?php echo $footer; ?>
