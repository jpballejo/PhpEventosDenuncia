var iconBase ='img/';

    var icons = {
      aReparar: {
        icon: iconBase + 'bachered.png'
      },
      reparado: {
        icon: iconBase + 'bachegreen.png'
      },
      enEspera: {
        icon: iconBase + 'bacheyellow.png'
      }
    };


var eventos = [];

function agregarEvento (id, lat, lng, tipo) {
  	eventos.push ([id, lat, lng, icons[tipo].icon]);
};

function myMap() {
	var mapProp= {
	center:new google.maps.LatLng(-32.3209812, -58.0799678),
	zoom:14,
	};
	var map = new google.maps.Map(document.getElementById("mapa"),mapProp);
  for (var i = 0; i < eventos.length; i++)
	var marker = new google.maps.Marker({position:new google.maps.LatLng(eventos[i][1], eventos[i][2]), id: eventos[i][0],icon:eventos[i][3], map:map }).addListener ("click", function () {
         clickEvento (this);  
        });
}

function clickEvento (evento) {
    idEvento = evento.id;
    //alert(idEvento);
    $.ajax ({
        type: "POST",
        url: "/PhpEventosDenuncia/evento/obtenerEvento/" + idEvento,
        dataType: "JSON",
        success: function (data) {
            if(data.status == 'success'){
               //var evento = json_decode(data.evento);
               document.getElementById("detNombre").innerHTML = data.evento[0]["nombre"];
               document.getElementById("detDescripcion").innerHTML = data.evento[0]["descripcion"];
               document.getElementById('foto').src = data.evento[0]["foto"];
               //$("#detDescripcion").val (data.evento[0]["descripcion"]);
               $("#evemtpModal").modal("show");
               //alert(data.evento[0]["nombre"]);
              }
            
        },
        error: function () {
            alert ("Error!!!");
        }
    });
}
