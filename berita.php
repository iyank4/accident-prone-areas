<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="favicon.ico">

    <title>Accident-prone Areas</title>

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
    <form class="form-horizontal">
      <div id="map-canvas"></div>
      <hr>

      <div class="form-group">
        <label class="col-md-2 control-label">Nama Jalan</label>
        <div class="col-md-4">
          <input type="text" class="form-control" name="nama_jalan">
        </div>
      </div>
    </form>


    <h2>Berita</h2>
    <form class="form-horizontal">

      <div class="form-group">
        <label class="col-md-2 control-label">Berita</label>
        <div class="col-md-4">
          <input type="text" class="form-control" name="nama_jalan">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Link</label>
        <div class="col-md-4">
          <input type="text" class="form-control" name="nama_jalan">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Parameter</label>
        <div class="col-md-4">
          <input type="text" class="form-control" name="nama_jalan">
        </div>
      </div>

    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript">
      function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
          center: {lat: -6.2072205, lng: 106.8320071},
          scrollwheel: false,
          zoom: 12
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjArV5PoYqvJ9I-SRnmg6JBAVXHdbeBCQ&callback=initMap" async defer></script>
  </body>
</html>
