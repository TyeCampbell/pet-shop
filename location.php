  <?php 

    $thisPage = "Store Location";

    require 'Includes/header.php';

  ?>

<div class="container-fluid">
	<div class="row">
		<div id="map">
		</div>
	</div>
</div>

<div class="container-fluid hidden-md hidden-lg">
	<div class="row">
		<img src="images/store-front-wide.png" class="img-responsive center-block inside-img">
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6 store hidden-sm hidden-xs">
			<img src="images/store-front-sm.png" class="img-responsive img-circle center-block store-img">
		</div>
		<div class="col-md-6">
			<h2 class="text-center">Store Location</h2>
			<p class="text-center">Stop by and see us! We have fuzzy friends begging for attention!</p>
			<div class="directions">
				<h4>Directions from Des Moines</h4>
				<ul>
					<li>Take I35 North to Exit 127 toward Urbandale/Grimes</li>
					<li>Continue on IA-141 West</li>
					<li>Drive to IA-44 W/E 1st Stree in Grimes</li>
					<li>Turn Right onto IA-141 W/NW Urbandale Drive</li>
					<li>Take The IA-44 Ramp to Grimes/Saylorville Lake</li>
					<li>Turn Left ont SE Main Street</li>
					<li>Located on the left side, on block south</li>
				</ul>
				<address class="text-center address">Sandy's Pet Shop<br> 215 Main Street<br> Grimes, IA 50111</address>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<img src="images/store-inside-view.png" class="img-responsive center-block inside-img">
	</div>
</div>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDjoKFkMWAYUavnzceoE3x6T7BeY9jbjQ&callback=initMap"></script>

  <?php require 'Includes/footer.php'; ?>