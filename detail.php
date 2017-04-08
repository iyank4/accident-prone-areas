<?php
include 'functions.php';

if (! empty($_GET['id'])) {

  $sql = 'SELECT * FROM areas WHERE id='.$_GET['id'];

  $result = open_sesame($sql);
  $data_row = mysqli_fetch_assoc($result);
}

?><!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="favicon.ico">

    <title>Traffic Accidents Area</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/timeline.css" rel="stylesheet">
    <style type="text/css">
      #map-canvas {
        width:100%;
        height: 500px;
      }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">
      <div class="page-header">
        <h2>Traffic Accidents Area</h2>
      </div>
    </div>

    <div id="map-canvas"></div>
    <hr>

    <div class="container">
      <div class="page-header">
        <h2><?=$data_row['nama_jalan']?></h2>
        <p><?=$data_row['kecamatan']?>, <?=$data_row['kota']?></p>
      </div>
      <div class="row">
        <div class="col-md-12">
          <ul class="list-group">
            <li class="list-group-item"><a href="http://www.beritasatu.com/megapolitan/347294-gagal-menyalip-bus-pengendara-motor-tewas-terlindas-truk.html">Gagal menyalip bus, pengendara motor tewas terlindas  </a></li>
            <li class="list-group-item"><a href="http://news.okezone.com/read/2017/04/08/338/1662135/gubrak-avanza-terbalik-di-gandaria-jaksel">Gubrak...Avanza Terbalik di Gandaria Jaksel </a></li>
            <li class="list-group-item"><a href="http://news.liputan6.com/read/2612567/jembatan-cacing-jakut-licin-pengendara-motor-tewas-dihantam-truk?source=search">Jembatan Cacing Jakut Licin, Pengendara Motor Tewas Dihantam Truk </a></li>
            <li class="list-group-item"><a href="http://news.liputan6.com/read/2591145/dilindas-mobil-ibu-rumah-tangga-tewas-di-jalan-kapuk?source=search">Dilindas Mobil, Ibu Rumah Tangga Tewas di Jalan Kapuk </a></li>
          </ul>
        </div>
      </div>
    </div>





    <hr>
    <br><br><br><br>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript">
      var map;
      var directionsDisplay;

      function initMap() {
        // Create a map object and specify the DOM element for display.
        map = new google.maps.Map(document.getElementById('map-canvas'), {
          center: {lat: -6.2072205, lng: 106.8320071},
          scrollwheel: false,
          zoom: 14
        });

        sun_is_rises();
        itsabeautifulday();
      }

      function sun_is_rises() {
        directionsDisplay = new google.maps.DirectionsRenderer({
          map: map,
          polylineOptions: { strokeColor: "#ff0000" }
        });
        directionsDisplay.setOptions({ suppressMarkers: true });
      }

      function you_may_down_but_ill_revive_you() {
        directionsDisplay.setMap(null);
        directionsDisplay = null;

        sun_is_rises();
      }

      function itsabeautifulday() {
        var lat_start = <?=$data_row['lat_start']?>;
        var lng_start = <?=$data_row['lng_start']?>;
        var lat_end = <?=$data_row['lat_end']?>;
        var lng_end = <?=$data_row['lng_end']?>;
        var masuk = new google.maps.LatLng(lat_start, lng_start);
        var keluar = new google.maps.LatLng(lat_end, lng_end);

        var request = {
          destination: keluar,
          origin: masuk,
          travelMode: 'DRIVING'
        };

        // Pass the directions request to the directions service.
        var directionsService = new google.maps.DirectionsService();
        directionsService.route(request, function(response, status) {
          if (status == 'OK') {
            // Display the route on the map.
            directionsDisplay.setDirections(response);
          }
        });
      }

      $(document).ready(function() {
        $("#reset-routes").click(function() {
          you_may_down_but_ill_revive_you();
        });
      });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjArV5PoYqvJ9I-SRnmg6JBAVXHdbeBCQ&callback=initMap" async defer></script>
  </body>
</html>
