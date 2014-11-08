//used tutorial from google maps api
//generated script from mapeasy.com

function initialize()
{
	var myLatlng = new google.maps.LatLng(52.2958926,-113.8140696);
	var myOptions = {zoom: 16, center: myLatlng,
			disableDefaultUI: true, panControl: true,
			zoomControl: true,zoomControlOptions:
			{
				style: google.maps.ZoomControlStyle.DEFAULT
			},
			mapTypeId: google.maps.MapTypeId.ROADMAP
			}
		var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
		var marker = new google.maps.Marker(
		{
			position: myLatlng,
			map: map,
			title:"CN Nails and Spa"
		});

		var infowindow = new google.maps.InfoWindow(
		{
			content: "CN Nails and Spa"
			});
			google.maps.event.addListener(marker, "click", function()
			{
				infowindow.open(map, marker);
			});

}
google.maps.event.addDomListener(window, 'load', initialize);
