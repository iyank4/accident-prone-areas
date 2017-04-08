<?php include('functions.php'); ?><!DOCTYPE html>
<html lang="en">
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
        height: 600px;
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
          <h1>Traffic Accidents Area</h1>
        </div>
    </div>

    <div id="map-canvas"></div>
    <hr>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Berita</h2>
          <ul class="list-group">
            <li class="list-group-item"><a href="http://www.beritasatu.com/megapolitan/347294-gagal-menyalip-bus-pengendara-motor-tewas-terlindas-truk.html">Gagal menyalip bus, pengendara motor tewas terlindas  </a></li>
            <li class="list-group-item"><a href="http://news.okezone.com/read/2017/04/08/338/1662135/gubrak-avanza-terbalik-di-gandaria-jaksel">Gubrak...Avanza Terbalik di Gandaria Jaksel </a></li>
            <li class="list-group-item"><a href="http://news.liputan6.com/read/2612567/jembatan-cacing-jakut-licin-pengendara-motor-tewas-dihantam-truk?source=search">Jembatan Cacing Jakut Licin, Pengendara Motor Tewas Dihantam Truk </a></li>
            <li class="list-group-item"><a href="http://news.liputan6.com/read/2591145/dilindas-mobil-ibu-rumah-tangga-tewas-di-jalan-kapuk?source=search">Dilindas Mobil, Ibu Rumah Tangga Tewas di Jalan Kapuk </a></li>
            <li class="list-group-item"><a href="http://news.liputan6.com/read/2515478/transjakarta-vs-kereta-di-jakut-2-penjaga-palang-pintu-tersangka?source=search">Transjakarta Vs Kereta di Jakut, 2 Penjaga Palang Pintu Tersangka </a></li>
            <li class="list-group-item"><a href="https://news.detik.com/berita/d-3466425/ada-kecelakaan-truk-tol-jorr-pasar-minggu-ke-cilandak-macet-10-km">Ada Kecelakaan Truk, Tol JORR Pasar Minggu ke Cilandak Macet 10 Km  </a></li>
            <li class="list-group-item"><a href="https://news.detik.com/berita/d-3425716/kecelakaan-sepeda-motor-tewaskan-satu-wanita-di-jakarta-utara">Kecelakaan Sepeda Motor Tewaskan Satu Wanita di Jakarta Utara </a></li>
            <li class="list-group-item"><a href="https://news.detik.com/berita/d-3422110/pasutri-ditabrak-kontainer-di-penjaringan-1-orang-tewas">Pasutri Ditabrak Kontainer di Penjaringan, 1 Orang Tewas  </a></li>
            <li class="list-group-item"><a href="https://news.detik.com/berita/d-3450313/kecelakaan-bus-di-tol-jakarta-merak-3-orang-tewas-termasuk-sopir">Kecelakaan Bus di Tol Jakarta-Merak, 3 Orang Tewas Termasuk Sopir"  </a></li>
            <li class="list-group-item"><a href="http://news.liputan6.com/read/2454871/anak-gubernur-banten-diduga-tabrak-taksi-di-bandara-soetta?source=search">Anak Gubernur Banten Diduga Tabrak Taksi di Bandara Soetta  </a></li>
            <li class="list-group-item"><a href="http://wartakota.tribunnews.com/2017/02/15/jalan-licin-akibatkan-ika-lastika-seketika-tewas-terbentur-roda-kiri-kontainer">Jalan Licin Akibatkan Ika Lastika Seketika Tewas Terbentur Roda Kiri Kontainer  </a></li>
            <li class="list-group-item"><a href="http://wartakota.tribunnews.com/2013/11/24/biker-korban-tabrak-lari-di-jakarta-utara">Biker Korban Tabrak Lari di Jakarta Utara </a></li>
            <li class="list-group-item"><a href="https://news.detik.com/berita/d-3425716/kecelakaan-sepeda-motor-tewaskan-satu-wanita-di-jakarta-utara">Kecelakaan Sepeda Motor Tewaskan Satu Wanita di Jakarta Utara </a></li>
            <li class="list-group-item"><a href="http://news.detik.com/berita/d-3322961/ditabrak-truk-kontainer-pemotor-tewas-di-cakung">Ditabrak Truk Kontainer, Pemotor Tewas di Cakung  </a></li>
            <li class="list-group-item"><a href="http://wartakota.tribunnews.com/2016/09/27/pengendara-motor-tewas-terlindas-container-di-jalan-raya-cacing">Pengendara Motor Tewas Terlindas Container di Jalan Raya Cacing </a></li>
            <li class="list-group-item"><a href="http://www.beritasatu.com/megapolitan/362322-tersenggol-sepeda-motor-lain-dua-perempuan-tewas-di-jalan-cacing.html">Tersenggol Sepeda Motor Lain, Dua Perempuan Tewas di Jalan Cacing </a></li>
            <li class="list-group-item"><a href="http://www.beritajakarta.com/read/37283/Pengendara_Motor_Tewas_Terlindas_Truk_di_Jl_Penggilingan">Pengendara Motor Tewas Terlindas Truk di Jl Penggilingan  </a></li>
            <li class="list-group-item"><a href="http://www.beritajakarta.com/read/581/Jalan_Berlubang_Truk_Kontainer_Terguling">Jalan Berlubang, Truk Kontainer Terguling </a></li>
            <li class="list-group-item"><a href="https://news.detik.com/berita/d-3417481/driver-go-jek-tewas-akibat-tabrak-lari-di-gunung-sahari">Driver Go-Jek Tewas Akibat Tabrak Lari di Gunung Sahari </a></li>
            <li class="list-group-item"><a href="http://news.metrotvnews.com/peristiwa/ybJeowwN-tiga-mobil-kecelakaan-di-jalanan-jakarta-sejak-malam-tadi">Tiga Mobil Kecelakaan di Jalanan Jakarta Sejak Malam Tadi </a></li>
            <li class="list-group-item"><a href="http://news.metrotvnews.com/peristiwa/ybJeowwN-tiga-mobil-kecelakaan-di-jalanan-jakarta-sejak-malam-tadi">Tiga Mobil Kecelakaan di Jalanan Jakarta Sejak Malam Tadi </a></li>
          </ul>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript">
      var directionDisplay;
      var directionsService;
      var map;

      function initMap() {
        directionsService = new google.maps.DirectionsService();
        var start = new google.maps.LatLng(-6.2072205,106.8320071);
        var myOptions = {
          zoom:11,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          center: start
        }
        map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);

        setupThat();
      }

      function addMarkerToTheMap(myLat, myLng, titleMarker, thId) {
        var myLatlng = {lat: myLat, lng: myLng };
        var marker = new google.maps.Marker({
            position: myLatlng,
            title:titleMarker
        });
        marker.setMap(map);

        marker.addListener('click', function() {
          location.href = 'detail.php?id=' + thId;
        });
      }

      function setupThat() {
        <?php
        $data = open_sesame('SELECT * FROM areas');
        foreach ($data as $item) {
          echo 'addMarkerToTheMap('.$item['lat_start'].','.$item['lng_start'].', \''.$item['nama_jalan'].'\', '.$item['id'].');'."\r\n";
        }
        ?>
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjArV5PoYqvJ9I-SRnmg6JBAVXHdbeBCQ&callback=initMap" async defer></script>
  </body>
</html>
