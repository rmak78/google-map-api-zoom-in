<script>
$("#mapselect").change(function() {
           
            ///alert($('option:selected', $(this)).val());
			 var userlatlong  = $('option:selected', $(this)).val();
			 var coords = userlatlong.split(",");
         	 var userlat =  parseFloat(coords[0]);
			 var userlong =  parseFloat(coords[1]);

			 var newLatLng = new google.maps.LatLng(userlat, userlong);
			 if( parseInt(coords[2]) > 0) {
			 
			 map.setZoom(parseInt(coords[2]));
			 } else {
			 map.setZoom(18);
			 }
			//marker.setPosition(newLatLng);
			map.setCenter(newLatLng)
			 
});
</script>