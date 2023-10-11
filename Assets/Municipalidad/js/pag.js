function initMap() {
  // Coordenadas de la Municipalidad Provincial de Lambayeque
  var ubicacion = { lat: -6.701084, lng: -79.901313 };

  // Crea un nuevo mapa y lo coloca en el elemento con id "map"
  var map = new google.maps.Map(document.getElementById('map'), {
      center: ubicacion,
      zoom: 15 // Ajusta el nivel de zoom según tus preferencias
  });

  // Crea un marcador en la ubicación
  var marker = new google.maps.Marker({
      position: ubicacion,
      map: map,
      title: 'Municipalidad Provincial de Lambayeque'
  });
}