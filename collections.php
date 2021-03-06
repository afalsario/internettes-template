<?php include 'masterindex.php' ?>
<?php
echo $header . $nav . $content_before;
?>
	<h1>Portfolio of Works</h1>
	<div class="row recent-work">
		<div class="large-6 medium-6 columns">
			<h1 class="left-align">Birds</h1>
			<a target="_blank" href="birdflower.png">
				<img src="images/birdflower.png" alt="Humming Bird and Flower" class="collect_image">
			</a>
			<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				<div class="center_button">

					<a href="works_expanded.php"><button class="button">View Collection</button></a>

				</div>
			</div>
		</div>
		<div class="large-6 medium-6 columns">
			<h1 class="left-align">Sunflower</h1>
			<a target="_blank" href="darksunflower.png">
				<img src="images/darksunflower.png" alt="Klematis" class="collect_image">
			</a>
			<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				<div class="center_button">
					<a href="works_expanded.php"><button class="button">View Collection</button></a>
				</div>
			</div>
		</div>
	</div> 
<!-- End of Row -->

	<div class="row recent-work">
		<div class="large-6 medium-6 columns">
			<h1 class="left-align">Crazy Color</h1>
			<a target="_blank" href="humbirdparty.png">
				<img src="images/humbirdparty.png" alt="Party" class="collect_image">
			</a>
			<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. 
			<div class="center_button">
					<a href="works_expanded.php"><button class="button">View Collection</button></a>
			</div>
		</div>

	</div>
	<div class="large-6 medium-6 columns">
		<h1 class="left-align">Bouquet</h1>
			<a target="_blank" href="redflowers.png">
				<img src="images/redflowers.png" alt="Red Flowers" class="collect_image">
			</a>
			<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.
			<div class="center_button">
					<a href="works_expanded.php"><button class="button">View Collection</button></a>
			</div>
			<br>
			<ul class="pagination">
				<li class="arrow unavailable"><a href="">&laquo;</a></li>
  				<li class="current"><a href="">1</a></li>
  				<li><a href="">2</a></li>
  				<li><a href="">3</a></li>
  				<li><a href="">4</a></li>
  				<li class="unavailable"><a href="">&hellip;</a></li>
  				<li><a href="">12</a></li>
  				<li><a href="">13</a></li>
  				<li class="arrow"><a href="">&raquo;</a></li>
			</ul>
		</div>

	</div>
</div>


<?php echo $content_after; ?>
<?php echo $footer; ?>
