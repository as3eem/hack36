<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 27/1/18
 * Time: 10:05 PM
 */?>
<style>
    #map-layer{
        border-radius: 25px;
        padding: 20px;
    }
</style>
<div id="map-layer"></div>

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiXt3xU5oqlQ9QkYWeeIBDJEbqBK_MDFc&callback=initMap"
    async defer></script>

<script type="text/javascript">
    var map;
    var geocoder;

    function initMap() {
        var mapLayer = document.getElementById("map-layer");
        var centerCoordinates = new google.maps.LatLng(37.6, -95.665);
        var defaultOptions = { center: centerCoordinates, zoom: 4 }

        map = new google.maps.Map(mapLayer, defaultOptions);
        geocoder = new google.maps.Geocoder();

<!--        --><?php
//        if (! empty($countryResult)) {
//        foreach ($countryResult as $k => $v) {
//        ?>
//        geocoder.geocode( { 'address': '<?php //echo $countryResult[$k]["country"]; ?>//' }, function(LocationResult, status) {
//            if (status == google.maps.GeocoderStatus.OK) {
//                var latitude = LocationResult[0].geometry.location.lat();
//                var longitude = LocationResult[0].geometry.location.lng();
//            }
//            new google.maps.Marker({
//                position: new google.maps.LatLng(latitude, longitude),
//                map: map,
//                title: '<?php //echo $countryResult[$k]["country"]; ?>//'
//            });
//        });
//        <?php
//        }
//        }
//        ?>
    }
</script>