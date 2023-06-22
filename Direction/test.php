<!DOCTYPE html>
<html>
<head>
  <title>Get Routes with API Key</title>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYaX_t1lKNDDhLmb-PezLwlDhfOQy9ZiE&libraries=places"></script>
</head>
<body>
  <div>
    <label for="start">Starting location:</label>
    <input type="text" id="start">
  </div>
  <div>
    <label for="destination">Destination:</label>
    <input type="text" id="destination">
  </div>
  <div>
    <button onclick="getDirections()">Get Directions</button>
  </div>
  <div id="map" style="height: 400px; width: 100%;"></div>

  <script>
    var map;
    var directionsService;
    var directionsRenderer;

    function initMap() {
      directionsService = new google.maps.DirectionsService();
      directionsRenderer = new google.maps.DirectionsRenderer();
      map = new google.maps.Map(document.getElementById('map'), {
        zoom: 7,
        center: {lat: 41.85, lng: -87.65} // Set the initial map center
      });
      directionsRenderer.setMap(map);

      var startInput = document.getElementById('start');
      var destinationInput = document.getElementById('destination');

      var startAutocomplete = new google.maps.places.Autocomplete(startInput);
      startAutocomplete.setFields(['place_id']);

      var destinationAutocomplete = new google.maps.places.Autocomplete(destinationInput);
      destinationAutocomplete.setFields(['place_id']);
    }

    function getDirections() {
      var start = document.getElementById('start').value;
      var destination = document.getElementById('destination').value;

      var request = {
        origin: start,
        destination: destination,
        travelMode: google.maps.TravelMode.DRIVING
      };

      directionsService.route(request, function(result, status) {
        if (status == google.maps.DirectionsStatus.OK) {
          directionsRenderer.setDirections(result);
        } else {
          alert('Error getting directions: ' + status);
        }
      });
    }
  </script>
  
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYaX_t1lKNDDhLmb-PezLwlDhfOQy9ZiE&callback=initMap&libraries=places"></script>
</body>
</html>