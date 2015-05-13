<script>
var map;
function initialize() {
  var userlat = 27.4116934 ;
  var userlong = -82.4285267;
  var mapOptions = {
    center: new google.maps.LatLng(userlat,userlong),
    zoom: 14,
    mapTypeId: google.maps.MapTypeId.HYBRID
  };
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  map.setTilt(45);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>