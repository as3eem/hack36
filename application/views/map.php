<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Google Maps APIs</title>

    <style>
        html,
        body {
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

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiXt3xU5oqlQ9QkYWeeIBDJEbqBK_MDFc&callback=initMap"></script>

<script type="text/javascript">
var map;

function initMap() {
map = new google.maps.Map(document.getElementById('map'), {
center: {
lat: 25.492,
lng: 81.86
},
zoom: 8
});
var iert = {
info: '<strong>Tiffin Service</strong><br>\
IERT Ground<br> Allahabad<br>\
<a href="#">Contact preson</a>',
lat: 25.49516,
long: 81.865216
};

var myorabad = {
info: '<strong>Web Developer Freelancer</strong><br>\
Myorabad<br> Allahabad<br>\
<a href="#">Contact preson</a>',
lat: 25.4793975,
long: 81.8416971
};

var fort = {
info: '<strong>Taxi Service</strong><br>\r\
Allahabad Fort<br> Allahabad<br>\
<a href="#">Contact</a>',
lat: 25.4294002,
long: 81.8746662
};

var locations = [
[iert.info, iert.lat, iert.long, 0],
[fort.info, fort.lat, fort.long, 1],
[myorabad.info, myorabad.lat, myorabad.long, 2],
];

var map = new google.maps.Map(document.getElementById('map'), {
zoom: 13,
center: new google.maps.LatLng(25.4813725,81.8650854),
mapTypeId: google.maps.MapTypeId.ROADMAP
});

var infowindow = new google.maps.InfoWindow({});

var marker, i;

for (i = 0; i < locations.length; i++) {
marker = new google.maps.Marker({
position: new google.maps.LatLng(locations[i][1], locations[i][2]),
map: map
});

google.maps.event.addListener(marker, 'click', (function (marker, i) {
return function () {
infowindow.setContent(locations[i][0]);
infowindow.open(map, marker);
}
})(marker, i));
}
}
</script>
</body>

</html>