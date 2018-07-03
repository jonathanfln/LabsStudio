function initialize() {
	var myOptions = {
		zoom: 17,
		center: new google.maps.LatLng(50.855374, 4.3413491), //change the coordinates
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false,
		mapTypeControl: false,
		zoomControl: false,
		streetViewControl: false
	};
	var map = new google.maps.Map(document.getElementById("map-area"), myOptions);
	var marker = new google.maps.Marker({
		map: map,
		position: new google.maps.LatLng(50.855374, 4.3413491) //change the coordinates
	});
	google.maps.event.addListener(marker, "click", function () {
		infowindow.open(map, marker);
	});
}
google.maps.event.addDomListener(window, 'load', initialize);