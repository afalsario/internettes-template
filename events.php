<?php include 'masterindex.php' ?>
<?php
echo $header . $nav . $content_before;
?>

<h1>Events</h1>
<div class="events-container">
	<div class="row">
		<div class="large-12 small-12 columns">
			<h2 class="events-title">Wine and Art</h2>
			<p>Date:07/01/2015</p>
			<p>Time:9:00pm</p>
			<p>Location: 1111 Moscato Lane, San Antonio, Tx 78218</p>
			<p>Description: Just Artist enjoying 2 of their favorite things.</p>
			<a href="#"><button class="button center">More Details</button></a>
		</div>
	</div>
	<div class="padding"></div>
	<div class="row">
		<div class="large-12 small-12 columns">
			<h2 class="events-title">Cheesy Art</h2>
			<p>Dates: 07/07/2015-08/22/2015</p>
			<p>Time:6:00pm</p>
			<p>Location: 7000 Asiago Lane, San Antonio, Tx, 78146</p>
			<p>Description: Let us eat cheese and Paint!</p>
			<a href="#"><button class="button center">More Details</button></a>
		</div>
	</div>
</div>
<div class="padding"></div>


<?php echo $content_after; ?>
<?php echo $footer; ?>