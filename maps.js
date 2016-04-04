$(document).ready(function(){
			var directionsService = new google.maps.DirectionsService();
			var markers = [];
			var myLatlng = new google.maps.LatLng(42.337368,-71.095350);
			var mapOptions = {zoom: 8, center: myLatlng, mapTypeId: google.maps.MapTypeId.ROADMAP}
			var map = new google.maps.Map($("#map").get(0), mapOptions);
			var marker1 = new google.maps.Marker({position: new google.maps.LatLng(42.337368,-71.095350),map:map});
		
			var listener = google.maps.event.addListener(map, "click", function(event) {
				var marker = new google.maps.Marker({position: event.latLng, map: map});
				markers.push(marker);
			
				if (markers.length == 1) {
					google.maps.event.removeListener(listener);
					var marker2 = markers[0];
				
					var directionsRenderer = new google.maps.DirectionsRenderer();
					directionsRenderer.setMap(map);
					directionsRenderer.setPanel($("#directions").get(0));
				
					var request = {origin: marker2.getPosition(), 
						destination: marker1.getPosition(), 
						travelMode: google.maps.TravelMode.DRIVING};
					directionsService.route(request, function(result, status) {
						if (status == google.maps.DirectionsStatus.OK) {
							directionsRenderer.setDirections(result); }
					});
				}  // end if
			});  // end listener
		});  // end ready