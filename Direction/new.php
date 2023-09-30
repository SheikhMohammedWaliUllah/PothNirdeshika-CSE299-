
<!DOCTYPE html>
<html>
<head>
	<title>Route Finder</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		html, body {
			height: 100%;
			margin: 0;
			padding: 0;
		}
		#map {
			height: 100%;
		}
	</style>
</head>
<body>
	<div id="map"></div>
	<script>
		function initMap() {
			// Initialize the map
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 13,
				center: {lat: 37.7749, lng: -122.4194}
			});

			// Initialize the search box
			var input1 = document.getElementById('from');
			var input2 = document.getElementById('to');
			var searchBox1 = new google.maps.places.SearchBox(input1);
			var searchBox2 = new google.maps.places.SearchBox(input2);

			// Bias the search box to the current map's viewport
			map.addListener('bounds_changed', function() {
				searchBox1.setBounds(map.getBounds());
				searchBox2.setBounds(map.getBounds());
			});

			// Initialize the directions service and renderer
			var directionsService = new google.maps.DirectionsService();
			var directionsRenderer = new google.maps.DirectionsRenderer({map: map});

			// Listen for changes in the search box inputs and update the route
			searchBox1.addListener('places_changed', function() {
				calculateAndDisplayRoute(directionsService, directionsRenderer);
			});

			searchBox2.addListener('places_changed', function() {
				calculateAndDisplayRoute(directionsService, directionsRenderer);
			});

			// Calculate and display the route
			function calculateAndDisplayRoute(directionsService, directionsRenderer) {
				var start = input1.value;
				var end = input2.value;
				directionsService.route({
					origin: start,
					destination: end,
					travelMode: 'DRIVING'
				}, function(response, status) {
					if (status === 'OK') {
						directionsRenderer.setDirections(response);
					} else {
						window.alert('Directions request failed due to ' + status);
					}
				});
			}
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=API_KEY&libraries=places&callback=initMap"
    async defer></script>
    <div>
        <label>From:</label>
        <input type="text" id="from" placeholder="Enter starting point">
    </div>
    <div>
        <label>To:</label>
        <input type="text" id="to" placeholder="Enter destination">
    </div>
</body>
</html>
