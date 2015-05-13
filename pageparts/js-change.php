<script>
$("#select_neighbour").change(function() {
           
            ///alert($('option:selected', $(this)).val());
			 var userlatlong  = $('option:selected', $(this)).val();
			 var coords = userlatlong.split(",");
         	 var userlat =  parseFloat(coords[0]);
			 var userlong =  parseFloat(coords[1]);
			 var newLatLng = new google.maps.LatLng(userlat, userlong);

			//marker.setPosition(newLatLng);
			map.setCenter(newLatLng)
			 
});
</script>