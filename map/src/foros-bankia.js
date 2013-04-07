/* Cargamos las librerías necesarias de forma asíncrona, en paralelo:
 * http://yepnopejs.com/
 */
yepnope([{
  /* cargamos jQuery desde el CDN de google */
  load: 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js',
  complete: function () {
    /* si falla, cargamos la copia local */
    if (!window.jQuery) {
      yepnope('lib/jquery/jquery.js');
    }
  }
},
/* El CDN de Leaflet es muuuy lento, asi que lo cargaremos directamente desde
   local con los plugins necesarios. Se deja comentado por si encontramos un CDN mejor
{
  load: ['http://cdn.leafletjs.com/leaflet-0.4.5/leaflet.css',
    'http://cdn.leafletjs.com/leaflet-0.4.5/leaflet.js'],
  complete: function () {
    if (!window.L) {
      yepnope('lib/leaflet/leaflet.js');
    }
  }
},{
  load: 'lib/leaflet/plugins/plugins.js',
  complete: function () {
    dibujaMapa();
  }
}]); */
{
  load: 'lib/leaflet/leaflet-bankia.js',
  complete: function () {
    //Una vez completa la carga de todas las librerías pintamos el mapa
    dibujaMapa();
  }
}]);

function dibujaMapa() {

  var mapa = L.map('mapa', {attributionControl:false}).setView([40.46, -3.75], 5);

  //Añadimos capa de Open StreetMap
  L.tileLayer('http://tile.openstreetmap.org/{z}/{x}/{y}.png', {maxZoom: 18}).addTo(mapa);

  //bankias es un nuevo objeto GeoCSV inicialmente sin datos
  var bankias = L.geoCsv(null, {
    //onEachFeature se invoca para cada sucursal(feature), dibuja el contenido del popup
    onEachFeature: function (feature, layer) {
      var idnum = feature.properties[bankias.getPropertyName('idnum')]
		  , direccion = feature.properties[bankias.getPropertyName('Dirección')]
		  , cp = feature.properties[bankias.getPropertyName('Código postal')]
		  , localidad = feature.properties[bankias.getPropertyName('Localidad')]
		  , tf = feature.properties[bankias.getPropertyName('Teléfono')]
		  , urlsucursal = 'http://foros.toqueabankia.net/categories/oficina-'+idnum
		  , popup = '';
		popup += '<b><a href="'+urlsucursal+'" target="_blank">Oficina Nº '+idnum+'</a></b><br><br>';
		popup += direccion+'<br>';
		popup += cp+' '+localidad+'<br>';
		popup += 'Tf: '+tf+'<br><br>';
		popup += '<div class="participa"><p><a href="'+urlsucursal+'" class="boton" target="_parent">Ver Foro</a></p></div>';

      layer.bindPopup(popup);      
    },
    //creamos un marcador personalizado para bankia
    pointToLayer: function (feature, latlng) {
      return L.marker(latlng, {
        icon:L.icon({
          iconUrl: 'images/marcador-bankia.png',
          shadowUrl: 'images/marker-shadow.png',
          iconSize: [25,41],
          shadowSize:   [41, 41],
          shadowAnchor: [13, 20]
        })
      });
    },
    //le indicamos que en la primera línea del CSV vendrán los rótulos de los campos
    firstLineTitles: true
  });

  //Leemos el archivo CSV con la siguiente llamada AJAX
  $.ajax ({
    type:'GET',
    dataType:'text',
    url:'data/bankias.csv',
    error: function() {
      alert('No se pudieron cargar los datos');
    },
    success: function(csv) {
      //añadimos los datos al objeto GeoCSV bankias
      bankias.addData(csv);
      //creamos el grupo cluster y lo añadimos al mapa
      var cluster = new L.MarkerClusterGroup();
      cluster.addLayer(bankias);
      mapa.addLayer(cluster);
      //ajustamos el mapa mostrado a los bordes del cluster
      //mapa.fitBounds(cluster.getBounds());   
    },
    complete: function() {
      //desvanecemos la capa "Cargando..."
      $('#cargando').fadeOut('slow');
    }
  });

  //Geoposicionamiento al pulsar el botón "Bankias cercanos"
  $('#localizame').click(function(e) {
    mapa.locate();
    $('#localizame').text('Localizando...');
    mapa.on('locationfound', function(e) { 
      mapa.setView(e.latlng, 15);
      $('#localizame').text('Bankias cercanos');
    });
  });

}
