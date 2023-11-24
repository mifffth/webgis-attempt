<?php
 $wfsUrl =
file_get_contents("http://localhost:8080/geoserver/peribadatan_islam_slmn/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=peribadatan_islam_slmn%3Amasjid_musholla_sleman&outputFormat=application%2Fjson");

 header('Content-type: application/json');
 echo ($wfsUrl);
 # Jika terdapat &maxFeatures=50 pada url wfs geojson, dihapus supaya jumlah feature tidak dibatasi
 ?>