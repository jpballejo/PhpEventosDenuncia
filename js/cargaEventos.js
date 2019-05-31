var eventos = [];

function agregarEvento (nombre, lat, lng) {
	eventos.push ([nombre, lat, lng]);
};

function myMap() {
	var mapProp= {
	center:new google.maps.LatLng(-32.3209812, -58.0799678),
	zoom:14,
	};
	var map = new google.maps.Map(document.getElementById("mapa"),mapProp);
	for (var i = 0; i < eventos.length; i++)
	var marker = new google.maps.Marker({position:new google.maps.LatLng(eventos[i][1], eventos[i][2]), map:map });
}
