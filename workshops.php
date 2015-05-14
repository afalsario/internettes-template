<?php include 'masterindex.php' ?>
<?php
echo $header . $nav . $content_before;
?> 
<h1>Upcoming Workshops</h1>
<br></br>
<div class="wrapper">
	<div class="row">
		<div class="large-4 small-6 columns">
			<img class="image-blog" src="images/paint.png" alt=""/>
		</div>
		<div class="large-8 small-16 columns">
			<h1 class="left-align">Learn The Art of The Flower</h1>
			<p>Dates:07/07/2015-08/22/2015</p>
			<p>Location: 1234 Garden Lane, San Antonio, Tx 78218</p>
			<p>Description: Learn how to paint a nothing less than perfect flower with a family of people around you.</p>
			<a href="#"><button class="button center">More Details</button></a>
		</div>
	</div>
	<div class="row">
		<div class="large-4 small-6 columns">
			<img class="image-blog" src="images/computer.jpg" alt=""/>
		</div>
		<div class="large-8 small-16 columns">
			<h1 class="left-align">Art From A Computer's Perspective</h1>
			<p>Dates: 07/07/2015-08/22/2015</p>
			<p>Location: 3456 Geekout Lane, San Antonio, Tx, 78146</p>
			<p>Description: How to combine love of art with today's technology</p>
			<a href="#"><button class="button center">More Details</button></a>
		</div>
	</div>
</div>

<?php echo $content_after; ?>
<?php echo $footer; ?>
