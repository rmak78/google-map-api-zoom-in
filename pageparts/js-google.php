<script>
var map;
function initialize() {
  var userlat = 27.429098;
  var userlong = -82.429858;
  var mapOptions = {
    center: new google.maps.LatLng(userlat,userlong),
    zoom: 18,
    mapTypeId: google.maps.MapTypeId.SATELLITE
  };
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  map.setTilt(45);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>