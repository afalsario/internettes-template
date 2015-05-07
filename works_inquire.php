
<?php include 'masterindex.php' ?>
<?php
echo $header . $nav . $content_before;
?>

<div id="contact-form" class="clearfix">
    <h1>Want to know more?</h1>
    <h2>Get in Touch</h2>
    <ul id="errors" class="">
        <li id="info">There were some problems with your form submission:</li>
    </ul>
    <p id="success">Thanks for your message! We will get back to you ASAP!</p>
    <form method="post" action="process.php">
        <label for="name">Name: <span class="required">*</span></label>
        <input type="text" id="name" name="name" value="" placeholder="John Doe" required="required" autofocus="autofocus" />
         
        <label for="email">Email Address: <span class="required">*</span></label>
        <input type="email" id="email" name="email" value="" placeholder="johndoe@example.com" required="required" />
         
        <label for="telephone">Telephone: </label>
        <input type="tel" id="telephone" name="telephone" value="" />
         
        <label for="message">Message: <span class="required">*</span></label>
        <textarea id="message" name="message" placeholder="Your message must be greater than 20 charcters" required="required" data-minlength="20"></textarea>
         
        <span id="loading"></span>
        <input type="submit" value="Submit" id="submit-button" />
        <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
    </form>
</div>
<?php echo $content_after; ?>