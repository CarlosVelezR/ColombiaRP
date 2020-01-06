<!DOCTYPE HTML>
<html>
<head>
    <title>Mapa Zonazero RP | SAMP Map</title>
    <!-- Disallow users to scale this page -->
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <style type="text/css">
        /* Allow the canvas to use the full height and have no margins */
        html, body, #map-canvas {
            height: 100%;
            margin: 0
        }
    </style>
</head>
<body>
<!-- The container the map is rendered in -->
<div id="map-canvas"></div>

<!-- Load all javascript -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="mapa/js/SanMap.min.js"></script>
<script>
    //Define the mapTypes we'll be using
	
    var mapType = new SanMapType(1, 2, function (zoom, x, y) {
        return x == -1 && y == -1 ? "mapa/tiles/map.outer.jpg" : "mapa/tiles/map." + zoom + "." + x + "." + y + ".png";//Where the tiles are located
    });
	
    var satType = new SanMapType(1, 2, function (zoom, x, y) {
        return x == -1 && y == -1 ? "mapa/tiles/map.outer.jpg" : "mapa/tiles/sat/sat." + zoom + "." + x + "." + y + ".png";//Where the tiles are located
    });
	
    //Initialize the map
    var sm = new SanMap('map-canvas', {'Map': mapType, 'Satellite': satType}, 2);

	//
	// The above code contain methods SanMap provide
	// From here on forth we only use methods provided by the Google API
	//
	
	//LS Bank
	var bankInfoWindow = new google.maps.InfoWindow({
		content: '<h3>LS Banco</h3><p><b>Esto es el banco</b>, tu dinero es bienvenido.</p>'
	});
	var bankMarker = new google.maps.Marker({
		position: SanMap.getLatLngFromPos(1500, -1590),
		map: sm.map
	});
	google.maps.event.addListener(bankMarker, 'click', function() {
		sm.map.setCenter(bankMarker.position);
		bankInfoWindow.open(sm.map,bankMarker);
	});
	
	
	//Place a marker in Blueberry
	var bbInfoWindow = new google.maps.InfoWindow({
		content: '<h3>Plaza</h3><p><b>Plaza</b>, los santos!</p>'
	});
	var bbMarker = new google.maps.Marker({
		position: SanMap.getLatLngFromPos(0, 0),
		map: sm.map
	});
	google.maps.event.addListener(bbMarker, 'click', function() {
		sm.map.setCenter(bbMarker.position);
		bbInfoWindow.open(sm.map,bbMarker);
	});
	
	//Place a marker in Idlewood
	var homeInfoWindow = new google.maps.InfoWindow({
		content: '<h3>Yo vivo aqui</h3><p><b>Casa</b>, mi hogar!</p>'
	});
	var homeMarker = new google.maps.Marker({
		position: SanMap.getLatLngFromPos(2050, -1700),
		map: sm.map,
		
	});
	google.maps.event.addListener(homeMarker, 'click', function() {
		sm.map.setCenter(homeMarker.position);
		homeInfoWindow.open(sm.map,homeMarker);
	});
	

</script>
</body>