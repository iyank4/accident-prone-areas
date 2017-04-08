<?php
include 'functions.php';

if (! empty($_POST)) {
  $lat_start  = $_POST['lat_start'];
  $lng_start  = $_POST['lng_start'];
  $lat_end    = $_POST['lat_end'];
  $lng_end    = $_POST['lng_end'];
  $nama_jalan = $_POST['nama_jalan'];
  $kecamatan  = $_POST['kecamatan'];
  $kota       = $_POST['kota'];

  $sql = "INSERT INTO areas (lat_start, lng_start, lat_end, lng_end, nama_jalan, kecamatan, kota)
  VALUES ('$lat_start', '$lng_start', '$lat_end', '$lng_end', '$nama_jalan', '$kecamatan', '$kota')";

  open_sesame($sql);
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

    <h2>Area</h2>
    <form action="" method="post" class="form-horizontal">
      <div id="map-canvas"></div>
      <hr>

      <div class="container">
        <div class="form-group">
          <label class="col-md-2 control-label"></label>
          <div class="col-md-4">
            <input type="button" class="btn btn-default" id="reset-routes" value="Reset Map">
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-offset-2 col-md-10">
            <input type="text" class="form-control" name="lat_start" id="lat_start" style="max-width:140px;display:inline;margin-right:10px;">
            <input type="text" class="form-control" name="lng_start" id="lng_start" style="max-width:140px;display:inline;margin-right:10px;">
            <input type="text" class="form-control" name="lat_end" id="lat_end" style="max-width:140px;display:inline;margin-right:10px;">
            <input type="text" class="form-control" name="lng_end" id="lng_end" style="max-width:140px;display:inline;margin-right:10px;">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Nama Jalan</label>
          <div class="col-md-4">
            <input type="text" class="form-control" name="nama_jalan">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Kecamatan</label>
          <div class="col-md-4">
            <input type="text" class="form-control" name="kecamatan">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Kota</label>
          <div class="col-md-4">
            <input type="text" class="form-control" name="kota">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label"></label>
          <div class="col-md-4">
            <input type="submit" class="btn btn-primary" value="Simpan">
          </div>
        </div>
      </div>
    </form>

    <?php
    $areas = open_sesame('select * from areas');
    if (mysqli_num_rows($areas) > 0) {
    ?>
    <hr>
    <h2>Data</h2>

    <table class="table table-bordered">
      <thead>
        <tr>
          <td>ID</td>
          <td>Jalan</td>
          <td>Kecamatan</td>
          <td>Kota</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($areas as $item) { ?>
          <tr>
            <td><?=$item['id']?></td>
            <td><?=$item['nama_jalan']?></td>
            <td><?=$item['kecamatan']?></td>
            <td><?=$item['kota']?></td>
          </tr>
        <?php } // foreach ?>
      </tbody>

    <?php } // if areas ?>

    <hr>
    <br><br><br><br>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript">
      var pairs = 0;
      var lat_start = 0;
      var lng_start = 0;
      var lat_end = 0;
      var lng_end = 0;

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

        map.addListener('click', function(e) {
          if (pairs == 2) {
            pairs = 0;
          }

          switch (pairs) {
            case 0:
              // start
              lat_start = e.latLng.lat();
              lng_start = e.latLng.lng();
              $("#lat_start").val(lat_start);
              $("#lng_start").val(lng_start);
              break;
            case 1:
              // end
              lat_end = e.latLng.lat();
              lng_end = e.latLng.lng();
              $("#lat_end").val(lat_end);
              $("#lng_end").val(lng_end);
              itsabeautifulday();
              break;
          }

          pairs++;
        });
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
