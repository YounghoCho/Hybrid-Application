<?
@session_start();
?>
<html>
<head>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function loadMap(){
    var option={
        center:new google.maps.LatLng(37.209176, 126.976462),
        zoom:17,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map= new google.maps.Map(document.getElementById("sample"), option);
}
    </script>    
</head>
<img src="map.png" width="100%" height="50%">
<body onload="loadMap()">
<div id="sample" style="width:100%; height:50%;"></div>
    </body></html>
