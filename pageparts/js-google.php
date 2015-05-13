<script>

var locations = [
['Lakewood Ranch', 27.4087468, -82.4133144 , 1 , 'Lakewood Ranch'] ,
['Ashland', 27.398652, -82.402687 , 2 , 'Ashland'] ,
['Augusta', 27.398735, -82.422555 , 3 , 'Augusta'] ,
['Banks', 27.425159, -82.388148 , 4 , 'Banks'] ,
['Belmont', 27.416735, -82.412171 , 5 , 'Belmont'] ,
['Bend', 27.427338, -82.403693 , 6 , 'Bend'] ,
['Bluffs', 27.415946, -82.430659 , 7 , 'Bluffs'] ,
['Blythefield', 27.407973, -82.404988 , 8 , 'Blythefield'] ,
['Boca Grove', 27.387395, -82.406138 , 9 , 'Boca Grove'] ,
['Brier Creek', 27.414902, -82.416443 , 10 , 'Brier Creek'] ,
['Canterbury', 27.392118, -82.406594 , 11 , 'Canterbury'] ,
['Chase', 27.427074, -82.400287 , 12 , 'Chase'] ,
['Cove', 27.388976, -82.421864 , 13 , 'Cove'] ,
['Crest', 27.428716, -82.419680 , 14 , 'Crest'] ,
['Crossings', 27.429474, -82.400746 , 15 , 'Crossings'] ,
['Dale', 27.425951, -82.397096 , 16 , 'Dale'] ,
['Dominion', 27.416216, -82.414598 , 17 , 'Dominion'] ,
['Edenmore', 27.408501, -82.421208 , 18 , 'Edenmore'] ,
['Fields', 27.423015, -82.400028 , 19 , 'Fields'] ,
['Forest', 27.427174, -82.418287 , 20 , 'Forest'] ,
['Gardens', 27.428367, -82.408286 , 21 , 'Gardens'] ,
['Glades', 27.422258, -82.423721 , 22 , 'Glades'] ,
['Glen', 27.429611, -82.422620 , 23 , 'Glen'] ,
['Gleneagles', 27.400595, -82.412748 , 24 , 'Gleneagles'] ,
['Green', 27.425878, -82.424406 , 25 , 'Green'] ,
['Greystone', 27.408330, -82.419618 , 26 , 'Greystone'] ,
['Grove', 27.412328, -82.426276 , 27 , 'Grove'] ,
['Hammock', 27.413013, -82.430340 , 28 , 'Hammock'] ,
['Haven', 27.429738, -82.405238 , 29 , 'Haven'] ,
['Highfield', 27.404229, -82.417992 , 30 , 'Highfield'] ,
['Hollow', 27.429345, -82.431919 , 31 , 'Hollow'] ,
['Keswick', 27.413467, -82.408979 , 32 , 'Keswick'] ,
['Kingsmill', 27.414230, -82.407026 , 33 , 'Kingsmill'] ,
['Knoll', 27.429098, -82.429858 , 34 , 'Knoll'] ,
['Lacantera', 27.417553, -82.406359 , 35 , 'Lacantera'] ,
['Lake Vista', 27.401220, -82.437439 , 36 , 'Lake Vista'] ,
['Lakes', 27.421380, -82.427759 , 37 , 'Lakes'] ,
['Laurel Valley', 27.391785, -82.401164 , 38 , 'Laurel Valley'] ,
['Legends Walk', 27.410298, -82.404066 , 39 , 'Legends Walk'] ,
['Lismore', 27.412252, -82.423678 , 40 , 'Lismore'] ,
['Lofts', 27.394777, -82.434605 , 41 , 'Lofts'] ,
['Meadow', 27.410402, -82.431301 , 42 , 'Meadow'] ,
['Miramar', 27.388059, -82.400274 , 43 , 'Miramar'] ,
['Mizner Reserve', 27.406263, -82.403493 , 44 , 'Mizner Reserve'] ,
['Montclair', 27.404757, -82.404413 , 45 , 'Montclair'] ,
['Moorings', 27.392655, -82.432655 , 46 , 'Moorings'] ,
['Muirfield', 27.400039, -82.426440 , 47 , 'Muirfield'] ,
['Oakmont', 27.398859, -82.415077 , 48 , 'Oakmont'] ,
['Oaks', 27.404745, -82.430548 , 49 , 'Oaks'] ,
['Orchid Island', 27.402149, -82.402600 , 50 , 'Orchid Island'] ,
['Palmers Creek', 27.411525, -82.407571 , 51 , 'Palmers Creek'] ,
['Park', 27.424678, -82.425629 , 52 , 'Park'] ,
['Pines', 27.428545, -82.426422 , 53 , 'Pines'] ,
['Place', 27.426584, -82.422259 , 54 , 'Place'] ,
['Pointe', 27.394393, -82.425116 , 55 , 'Pointe'] ,
['Portmarnock', 27.399215, -82.407027 , 56 , 'Portmarnock'] ,
['Preserve', 27.422963, -82.391776 , 57 , 'Preserve'] ,
['Presidio', 27.411345, -82.400586 , 58 , 'Presidio'] ,
['Quail Creek', 27.390407, -82.412458 , 59 , 'Quail Creek'] ,
['Ravines', 27.419721, -82.397733 , 60 , 'Ravines'] ,
['Ridge', 27.416005, -82.420971 , 61 , 'Ridge'] ,
['Rivers', 27.423193, -82.402702 , 62 , 'Rivers'] ,
['Riviera', 27.407410, -82.400880 , 63 , 'Riviera'] ,
['Run', 27.426462, -82.405281 , 64 , 'Run'] ,
['Sandhills', 27.396202, -82.403434 , 65 , 'Sandhills'] ,
['Siena', 27.403864, -82.402113 , 66 , 'Siena'] ,
['Silverwood', 27.403583, -82.421875 , 67 , 'Silverwood'] ,
['Sound', 27.388517, -82.429919 , 68 , 'Sound'] ,
['Spyglass', 27.400419, -82.419678 , 69 , 'Spyglass'] ,
['St. Georges', 27.396588, -82.419103 , 70 , 'St. Georges'] ,
['Stoneridge', 27.410768, -82.415155 , 71 , 'Stoneridge'] ,
['Strand', 27.430272, -82.415583 , 72 , 'Strand'] ,
['Teal Creek', 27.412577, -82.412023 , 73 , 'Teal Creek'] ,
['Terrace', 27.429932, -82.387864 , 74 , 'Terrace'] ,
['Thornhill', 27.413262, -82.419554 , 75 , 'Thornhill'] ,
['Trails', 27.426653, -82.409745 , 76 , 'Trails'] ,
['Twin Hills', 27.396586, -82.406277 , 77 , 'Twin Hills'] ,
['Vilamoura', 27.402404, -82.406769 , 78 , 'Vilamoura'] ,
['Vistas', 27.422728, -82.406354 , 79 , 'Vistas'] ,
['Walk', 27.428886, -82.391747 , 80 , 'Walk'] ,
['Watercrest', 27.398736, -82.429663 , 81 , 'Watercrest'] ,
['Westchester', 27.393267, -82.411856 , 82 , 'Westchester'] ,
['Weston', 27.390177, -82.408780 , 83 , 'Weston'] ,
['Wexford', 27.409392, -82.427436 , 84 , 'Wexford'] ,
['Whitemarsh', 27.389463, -82.404328 , 85 , 'Whitemarsh'] ,
['Woods', 27.420332, -82.427780 , 86 , 'Woods'] ,

];
var map;
function initialize() {
  var userlat = 27.4087468;
  var userlong =   -82.4133144 ;
  
var mapOptions = {
    center: new google.maps.LatLng(userlat,userlong),
    zoom: 13,
    mapTypeId: google.maps.MapTypeId.HYBRID
  };
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  map.setTilt(45);
  setMarkers(map, locations);
  	infowindow = new google.maps.InfoWindow({
                content: "loading..."
            });
	 
}

google.maps.event.addDomListener(window, 'load', initialize);
 function setMarkers(map, locations) {
  // Add markers to the map

  // Marker sizes are expressed as a Size of X,Y
  // where the origin of the image (0,0) is located
  // in the top left of the image.

  // Origins, anchor positions and coordinates of the marker
  // increase in the X direction to the right and in
  // the Y direction down.
  var image = {
    url: 'images/redflag.png',
 
    size: new google.maps.Size(28, 35) 
  };
 
  for (var i = 0; i < locations.length; i++) {
    var location = locations[i];
    var myLatLng = new google.maps.LatLng(location[1], location[2]);
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image,
        title: location[0],
		html: location[4],
        zIndex: location[3]
    });
var contentString = " some content";

   google.maps.event.addListener(marker, "click", function () {
           //alert(this.html);
           infowindow.setContent(this.html);
           infowindow.open(map, this);

  });
  }
}
</script>