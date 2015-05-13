<script>

var locations = [
['Lakewood Ranch', 27.4116934, -82.4285267 , 1 , 'This is Lakewood Ranch' ] ,
['Ashland', 27.398652, -82.402687 , 2 , 'This is Ashland' ] ,
['Augusta', 27.398735, -82.422555 , 3 , 'This is Augusta' ] ,
['Banks', 27.425159, -82.388148 , 4 , 'This is Banks' ] ,
['Belmont', 27.416735, -82.412171 , 5 , 'This is Belmont' ] ,
['Bend', 27.427338, -82.403693 , 6 , 'This is Bend' ] ,
['Bluffs', 27.415946, -82.430659 , 7 , 'This is Bluffs' ] ,
['Blythefield', 27.407973, -82.404988 , 8 , 'This is Blythefield' ] ,
['Boca Grove', 27.387395, -82.406138 , 9 , 'This is Boca Grove' ] ,
['Brier Creek', 27.414902, -82.416443 , 10 , 'This is Brier Creek' ] ,
['Canterbury', 27.392118, -82.406594 , 11 , 'This is Canterbury' ] ,
['Chase', 27.427074, -82.400287 , 12 , 'This is Chase' ] ,
['Cove', 27.388976, -82.421864 , 13 , 'This is Cove' ] ,
['Crest', 27.428716, -82.419680 , 14 , 'This is Crest' ] ,
['Crossings', 27.429474, -82.400746 , 15 , 'This is Crossings' ] ,
['Dale', 27.425951, -82.397096 , 16 , 'This is Dale' ] ,
['Dominion', 27.416216, -82.414598 , 17 , 'This is Dominion' ] ,
['Edenmore', 27.408501, -82.421208 , 18 , 'This is Edenmore' ] ,
['Fields', 27.423015, -82.400028 , 19 , 'This is Fields' ] ,
['Forest', 27.427174, -82.418287 , 20 , 'This is Forest' ] ,
['Gardens', 27.428367, -82.408286 , 21 , 'This is Gardens' ] ,
['Glades', 27.422258, -82.423721 , 22 , 'This is Glades' ] ,
['Glen', 27.429611, -82.422620 , 23 , 'This is Glen' ] ,
['Gleneagles', 27.400595, -82.412748 , 24 , 'This is Gleneagles' ] ,
['Green', 27.425878, -82.424406 , 25 , 'This is Green' ] ,
['Greystone', 27.408330, -82.419618 , 26 , 'This is Greystone' ] ,
['Grove', 27.412328, -82.426276 , 27 , 'This is Grove' ] ,
['Hammock', 27.413013, -82.430340 , 28 , 'This is Hammock' ] ,
['Haven', 27.429738, -82.405238 , 29 , 'This is Haven' ] ,
['Highfield', 27.404229, -82.417992 , 30 , 'This is Highfield' ] ,
['Hollow', 27.429345, -82.431919 , 31 , 'This is Hollow' ] ,
['Keswick', 27.413467, -82.408979 , 32 , 'This is Keswick' ] ,
['Kingsmill', 27.414230, -82.407026 , 33 , 'This is Kingsmill' ] ,
['Knoll', 27.429098, -82.429858 , 34 , 'This is Knoll' ] ,
['Lacantera', 27.417553, -82.406359 , 35 , 'This is Lacantera' ] ,
['Lake Vista', 27.401220, -82.437439 , 36 , 'This is Lake Vista' ] ,
['Lakes', 27.421380, -82.427759 , 37 , 'This is Lakes' ] ,
['Laurel Valley', 27.391785, -82.401164 , 38 , 'This is Laurel Valley' ] ,
['Legends Walk', 27.410298, -82.404066 , 39 , 'This is Legends Walk' ] ,
['Lismore', 27.412252, -82.423678 , 40 , 'This is Lismore' ] ,
['Lofts', 27.394777, -82.434605 , 41 , 'This is Lofts' ] ,
['Meadow', 27.410402, -82.431301 , 42 , 'This is Meadow' ] ,
['Miramar', 27.388059, -82.400274 , 43 , 'This is Miramar' ] ,
['Mizner Reserve', 27.406263, -82.403493 , 44 , 'This is Mizner Reserve' ] ,
['Montclair', 27.404757, -82.404413 , 45 , 'This is Montclair' ] ,
['Moorings', 27.392655, -82.432655 , 46 , 'This is Moorings' ] ,
['Muirfield', 27.400039, -82.426440 , 47 , 'This is Muirfield' ] ,
['Oakmont', 27.398859, -82.415077 , 48 , 'This is Oakmont' ] ,
['Oaks', 27.404745, -82.430548 , 49 , 'This is Oaks' ] ,
['Orchid Island', 27.402149, -82.402600 , 50 , 'This is Orchid Island' ] ,
['Palmers Creek', 27.411525, -82.407571 , 51 , 'This is Palmers Creek' ] ,
['Park', 27.424678, -82.425629 , 52 , 'This is Park' ] ,
['Pines', 27.428545, -82.426422 , 53 , 'This is Pines' ] ,
['Place', 27.426584, -82.422259 , 54 , 'This is Place' ] ,
['Pointe', 27.394393, -82.425116 , 55 , 'This is Pointe' ] ,
['Portmarnock', 27.399215, -82.407027 , 56 , 'This is Portmarnock' ] ,
['Preserve', 27.422963, -82.391776 , 57 , 'This is Preserve' ] ,
['Presidio', 27.411345, -82.400586 , 58 , 'This is Presidio' ] ,
['Quail Creek', 27.390407, -82.412458 , 59 , 'This is Quail Creek' ] ,
['Ravines', 27.419721, -82.397733 , 60 , 'This is Ravines' ] ,
['Ridge', 27.416005, -82.420971 , 61 , 'This is Ridge' ] ,
['Rivers', 27.423193, -82.402702 , 62 , 'This is Rivers' ] ,
['Riviera', 27.407410, -82.400880 , 63 , 'This is Riviera' ] ,
['Run', 27.426462, -82.405281 , 64 , 'This is Run' ] ,
['Sandhills', 27.396202, -82.403434 , 65 , 'This is Sandhills' ] ,
['Siena', 27.403864, -82.402113 , 66 , 'This is Siena' ] ,
['Silverwood', 27.403583, -82.421875 , 67 , 'This is Silverwood' ] ,
['Sound', 27.388517, -82.429919 , 68 , 'This is Sound' ] ,
['Spyglass', 27.400419, -82.419678 , 69 , 'This is Spyglass' ] ,
['St. Georges', 27.396588, -82.419103 , 70 , 'This is St. Georges' ] ,
['Stoneridge', 27.410768, -82.415155 , 71 , 'This is Stoneridge' ] ,
['Strand', 27.430272, -82.415583 , 72 , 'This is Strand' ] ,
['Teal Creek', 27.412577, -82.412023 , 73 , 'This is Teal Creek' ] ,
['Terrace', 27.429932, -82.387864 , 74 , 'This is Terrace' ] ,
['Thornhill', 27.413262, -82.419554 , 75 , 'This is Thornhill' ] ,
['Trails', 27.426653, -82.409745 , 76 , 'This is Trails' ] ,
['Twin Hills', 27.396586, -82.406277 , 77 , 'This is Twin Hills' ] ,
['Vilamoura', 27.402404, -82.406769 , 78 , 'This is Vilamoura' ] ,
['Vistas', 27.422728, -82.406354 , 79 , 'This is Vistas' ] ,
['Walk', 27.428886, -82.391747 , 80 , 'This is Walk' ] ,
['Watercrest', 27.398736, -82.429663 , 81 , 'This is Watercrest' ] ,
['Westchester', 27.393267, -82.411856 , 82 , 'This is Westchester' ] ,
['Weston', 27.390177, -82.408780 , 83 , 'This is Weston' ] ,
['Wexford', 27.409392, -82.427436 , 84 , 'This is Wexford' ] ,
['Whitemarsh', 27.389463, -82.404328 , 85 , 'This is Whitemarsh' ] ,
['Woods', 27.420332, -82.427780 , 86 , 'This is Woods' ] ,

];
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
var contentString = "This is some content";

   google.maps.event.addListener(marker, "click", function () {
           //alert(this.html);
           infowindow.setContent(this.html);
           infowindow.open(map, this);

  });
  }
}
</script>