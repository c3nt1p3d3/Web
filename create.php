<?php
require('login.php');
?>

<html>
<style type="text/css">
        #tb {height:100px; width:200px; }
        input {width: 250px; }
    </style>

<form enctype="multipart/form-data" method="post" action="add.php">

Titulo:<br><textarea rows="2" cols="80" name="titulo" /></textarea><br><br>

<!--Localidad:<input type="text" name="localidad" /><br><br>-->

Localidad:<select name="localidad">
<option value="Torrevieja">Torrevieja</option>
<option value="Guardamar">Guardamar</option>
<option value="Orihuela Costa">Orihuela Costa</option>
<option value="Pilar de la Horadada">Pilar de la Horadada</option>
<option value="San Javier">San Javier</option>
<option value="Los Alcazares">Los Alcazares</option>
<option value="Mil Palmeras">Mil Palmeras</option>
<option value="Pinar de Campoverde">Pinar de Campoverde</option>
<option value="Torrepacheco">Torrepacheco</option>
<option value="Dehesa de Campoamor">Dehesa de Campoamor</option>
</select>

Precio:<input type="text" name="precio" /><br><br>

Zona:<input type="text" name="zona" /><br><br>

Provincia:<input type="text" name="provincia" /><br><br>

Busqueda en el mapa:<input type="text" name="map_search" id="map_search" /><br><br>

Caracteristica 1:<input type="text" name="carac1" /><br>
Caracteristica 2:<input type="text" name="carac2" /><br>
Caracteristica 3:<input type="text" name="carac3" /><br>
Caracteristica 4:<input type="text" name="carac4" /><br>

Sea views: <input type="checkbox" name="sea_views" value="1" style="width:1em!important;">

<br><br>

Gasto de Comunidad: <input type="text" name="comunidad" /><br><br>

IBI (SUMA): <input type="text" name="ibi" /><br><br>

m2 construidos: <input type="text" name="m_const" /><br><br>

m2 parcela: <input type="text" name="m_parcela" /><br><br>

Year contruccion: <input type="text" name="year" /><br><br>

Reformado: <input type="text" name="reformado" /><br><br>

A/C & Heating: <input type="text" name="heating" /><br><br>

Piscina: <input type="text" name="pool" /><br><br>

Parking: <input type="text" name="parking" /><br><br>

Descripcion English:<br><textarea rows="10" cols="80" name="desc_eng" /></textarea><br><br>

<?php

include 'connect.php';

mysql_select_db("db435736022", $db);

$max_T = mysql_result(mysql_query("SELECT max(ref) FROM `Casas` WHERE `localidad` LIKE 'Torrevieja'"),ref);
$max_T_colab = mysql_result(mysql_query("SELECT max(ref) FROM `Casas` WHERE `localidad` LIKE 'Torrevieja' AND `colab` LIKE '1'"),ref);
$max_G = mysql_result(mysql_query("SELECT max(ref) FROM `Casas` WHERE `localidad` LIKE 'Guardamar'"),ref);
$max_G_colab = mysql_result(mysql_query("SELECT max(ref) FROM `Casas` WHERE `localidad` LIKE 'Guardamar' AND `colab` LIKE '1'"),ref);
$max_O = mysql_result(mysql_query("SELECT max(ref) FROM `Casas` WHERE `localidad` LIKE 'Orihuela Costa'"),ref);
$max_O_colab = mysql_result(mysql_query("SELECT max(ref) FROM `Casas` WHERE `localidad` LIKE 'Orihuela Costa' AND `colab` LIKE '1'"),ref);
$max_P = mysql_result(mysql_query("SELECT max(ref) FROM `Casas` WHERE `localidad` LIKE 'Pilar de la Horadada' OR `localidad` LIKE 'Mil Palmeras' OR `localidad` LIKE 'Torre de la Horadada'"),ref);
$max_P_colab = mysql_result(mysql_query("SELECT max(ref) FROM `Casas` WHERE `localidad` LIKE 'Pilar de la Horadada' OR `localidad` LIKE 'Mil Palmeras' OR `localidad` LIKE 'Torre de la Horadada' AND `colab` LIKE '1'"),ref);
$max_M = mysql_result(mysql_query("SELECT max(ref) FROM `Casas` WHERE `localidad` LIKE 'San Javier' OR `localidad` LIKE 'Torrepacheco'"),ref);
?>


Colaborador <input type="checkbox" value="1" name="colab" style="width:1em!important;" /><br><br>


Referencias ultimas: <p style="background-color: blue; color: white;">
<?php
if (!isset($max_T)){
	echo "T1XX";
}else{echo $max_T;}

echo "<br>";

if (!isset($max_T_colab)){
	echo "T*1XX";
}else{echo $max_T_colab;}

echo "<br>";

if (!isset($max_O)){
	echo "O3XX";
}else{echo $max_O;}

echo "<br>";

if (!isset($max_O_colab)){
	echo "T*1XX";
}else{echo $max_O_colab;}

echo "<br>";

if (!isset($max_P)){
	echo "P5XX";
}else{echo $max_P;}

echo "<br>";

if (!isset($max_P_colab)){
	echo "P*5XX";
}else{echo $max_P_colab;}

echo "<br>";

if (!isset($max_M)){
	echo "M7XX";
}else{echo $max_M;}

echo "<br>";

if (!isset($max_M_colab)){
	echo "M*7XX";
}else{echo $max_M_colab;}

echo "<br>";

if (!isset($max_G)){
	echo "G8XX";
}else{echo $max_G;}
?>
</p>

Referencia:<input type="text" name="ref" /><br><br>

Tipo de Vivienda:
<select name="cat">
<option value="Apartment">Apartment</option>
<option value="Penthouse">Penthouse</option>
<option value="Studio">Studio</option>
<option value="Bungalow">Bungalow</option>
<option value="Town house">Town house</option>
<option value="Duplex">Duplex</option>
<option value="Villa">Villa</option>
<option value="Finca">Finca</option>
<option value="Plot">Plot</option>
</select><br><br>

Habitaciones:
<select name="hab">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
</select><br><br>

Banos:
<select name="wc">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select><br><br>


Imagenes: <input type="file" name="fileToUpload[]" multiple="" /><br><br>


<input type="submit" name="upload" value="Add">


</form>
















<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
//<![CDATA[
// Latitude and Longitude math routines are from: http://www.fcc.gov/mb/audio/bickel/DDDMMSS-decimal.html

var map = null;
var latsgn = 1;
var lgsgn = 1;
var marker = null;
var posset = 0;
var ls='';
var lm='';
var ld='';
var lgs='';
var lgm='';
var lgd='';
var mrks = {mvcMarkers: new google.maps.MVCArray()};
var iw;
var drag=false;

function xz() {
ll = new google.maps.LatLng(20.0, -10.0);
zoom=2;
var mO = {
scaleControl:true,
zoom:zoom,
zoomControl:true,
zoomControlOptions: {style:google.maps.ZoomControlStyle.LARGE},
center: ll,
disableDoubleClickZoom:true,
mapTypeId: google.maps.MapTypeId.ROADMAP
};
map = new google.maps.Map(document.getElementById("map"), mO);
map.setTilt(0);
map.panTo(ll);
marker = new google.maps.Marker({position:ll,map:map,draggable:true,title:'Marker is Draggable'});   

google.maps.event.addListener(marker, 'click', function(mll) {
gC(mll.latLng);
var html= "<div style='color:#000;background-color:#fff;padding:5px;width:150px;'><p>Latitude - Longitude:<br />" + String(mll.latLng.toUrlValue()) + "<br /><br />Lat: " + ls +  "&#176; " + lm +  "&#39; "  + ld + "&#34;<br />Long: " + lgs +  "&#176; " + lgm +  "&#39; " + lgd + "&#34;</p></div>";
iw = new google.maps.InfoWindow({content:html});
iw.open(map,marker);
});
google.maps.event.addListener(marker, 'dragstart', function() {if (iw){iw.close();}});

google.maps.event.addListener(marker, 'dragend', function(event) {
posset = 1;
if (map.getZoom() < 10){map.setZoom(10);}
map.setCenter(event.latLng);
computepos(event.latLng);
drag=true;
setTimeout(function(){drag=false;},250);
});

google.maps.event.addListener(map, 'click', function(event) {
if (drag){return;}
posset = 1;
fc(event.latLng) ;
if (map.getZoom() < 10){map.setZoom(10);}
map.panTo(event.latLng);
computepos(event.latLng);
});

}

function computepos (point)
{
var latA = Math.abs(Math.round(point.lat() * 1000000.));
var lonA = Math.abs(Math.round(point.lng() * 1000000.));
if(point.lat() < 0)
{
	var ls = '-' + Math.floor((latA / 1000000)).toString();
}
else
{
	var ls = Math.floor((latA / 1000000)).toString();
}
var lm = Math.floor(((latA/1000000) - Math.floor(latA/1000000)) * 60).toString();
var ld = ( Math.floor(((((latA/1000000) - Math.floor(latA/1000000)) * 60) - Math.floor(((latA/1000000) - Math.floor(latA/1000000)) * 60)) * 100000) *60/100000 ).toString();
if(point.lng() < 0)
{
  var lgs = '-' + Math.floor((lonA / 1000000)).toString();
}
else
{
	var lgs = Math.floor((lonA / 1000000)).toString();
}
var lgm = Math.floor(((lonA/1000000) - Math.floor(lonA/1000000)) * 60).toString();
var lgd = ( Math.floor(((((lonA/1000000) - Math.floor(lonA/1000000)) * 60) - Math.floor(((lonA/1000000) - Math.floor(lonA/1000000)) * 60)) * 100000) *60/100000 ).toString();
document.getElementById("map_search").value=point.lat().toFixed(6)+", "+point.lng().toFixed(6);
document.getElementById("latboxm").value=ls;
document.getElementById("latboxmd").value=lm;
document.getElementById("latboxms").value=ld;
document.getElementById("lonbox").value=point.lng().toFixed(6);
document.getElementById("lonboxm").value=lgs;
document.getElementById("lonboxmd").value=lgm;
document.getElementById("lonboxms").value=lgd;
}


function showLatLong(latitude, longitude) {
if (isNaN(latitude)) {alert(' Latitude must be a number. e.g. Use +/- instead of N/S'); return false;}
if (isNaN(longitude)) {alert(' Longitude must be a number.  e.g. Use +/- instead of E/W'); return false;}

latitude1 = Math.abs( Math.round(latitude * 1000000.));
if(latitude1 > (90 * 1000000)) { alert(' Latitude must be between -90 to 90. ');  document.getElementById("latbox1").value=''; return;}
longitude1 = Math.abs( Math.round(longitude * 1000000.));
if(longitude1 > (180 * 1000000)) { alert(' Longitude must be between -180 to 180. ');  document.getElementById("lonbox1").value='';  return;}

var point = new google.maps.LatLng(latitude,longitude);
posset = 1;
if (map.getZoom() < 7){map.setZoom(7);}else{}
map.setMapTypeId(google.maps.MapTypeId.HYBRID);
map.setCenter(point);
fc(point);
computepos(point);
}


function streetview()
{
if (posset == 0)
{
	alert("Position Not Set.  Please click on the spot on the map to set the street view point.");
	return;
}

var point = map.getCenter();
var t1 = String(point);
t1 = t1.replace(/[() ]+/g,"");
var str = "http://www.satelliteview.co/?e=" + t1 + ":0:Latitude-Longitude Point:sv:0";
var popup = window.open(str, "llwindow");
popup.focus();
}

function googleearth()
{
if (posset == 0)
{
	alert("Position Not Set.  Please click on the spot on the map to set the Google Earth map point.");
	return;
}
var point = map.getCenter();
var gearth_str = "/?r=googleearth&mt=Latitude-Longitude Point&ml=" + point.lat() + "&mg=" + point.lng();
var popup = window.open(gearth_str, "llwindow");
popup.focus();
}

function pictures()
{
if (posset == 0)
{
	alert("Position Not Set.  Please click on the spot on the map to set the photograph point.");
	return;
}
var point = map.getCenter();
var pictures_str = "http://www.picturepastime.com?r=pictures&mt=Latitude-Longitude Point&ml=" + point.lat() + "&mg=" + point.lng();
var popup = window.open(pictures_str, "llwindow");
popup.focus();
}

function lotsize()
{
if (posset == 0)
{
	alert("Position Not Set.  Please click on the spot on the map to set the lot size map point.");
	return;
}
var point = map.getCenter();
var t1 = String(point);
t1 = t1.replace(/[() ]+/g,"");
var lotsize_str = "http://www.satelliteview.co/?e=" + t1 + ":0:Latitude-Longitude Point:measure:0";
var popup = window.open(lotsize_str, "llwindow");
popup.focus();
}

function getaddress()
{
if (posset == 0)
{
	alert("Position Not Set.  Please click on the spot on the map to set the get address map point.");
	return;
}
var point = map.getCenter();
var t1 = String(point);
t1 = t1.replace(/[() ]+/g,"");
var getaddr_str = "http://www.satelliteview.co/?e=" + t1 + ":0:Latitude-Longitude Point:map:0";
var popup = window.open(getaddr_str, "llwindow");
popup.focus();
}

function fc(point)
{
gC(point);
var html= "<div style='color:#000;background-color:#fff;padding:3px;width:150px;'><p>Latitude - Longitude:<br />" + String(point.toUrlValue()) + "<br /><br />Lat: " + ls +  "&#176; " + lm +  "&#39; "  + ld + "&#34;<br />Long: " + lgs +  "&#176; " + lgm +  "&#39; " + lgd + "&#34;</p></div>";
var iw = new google.maps.InfoWindow({content:html});
var marker = new google.maps.Marker({position:point,map:map,icon:'/i/blue-dot.png',draggable:true});
mrks.mvcMarkers.push(marker);
google.maps.event.addListener(marker, 'click', function(event) {
gC(event.latLng);
var html= "<div style='color:#000;background-color:#fff;padding:3px;width:150px;'><p>Latitude - Longitude:<br />" + String(event.latLng.toUrlValue()) + "<br /><br />Lat: " + ls +  "&#176; " + lm +  "&#39; "  + ld + "&#34;<br />Long: " + lgs +  "&#176; " + lgm +  "&#39; " + lgd + "&#34;</p></div>";
var iw = new google.maps.InfoWindow({content:html});
iw.open(map,marker);
computepos(event.latLng);
});
}


function gC(ll){
var latA = Math.abs(Math.round(ll.lat() * 1000000.));
var lonA = Math.abs(Math.round(ll.lng() * 1000000.));
if(ll.lat() < 0)
{
	var tls = '-' + Math.floor((latA / 1000000)).toString();
}
else
{
	var tls = Math.floor((latA / 1000000)).toString();
}
var tlm = Math.floor(((latA/1000000) - Math.floor(latA/1000000)) * 60).toString();
var tld = ( Math.floor(((((latA/1000000) - Math.floor(latA/1000000)) * 60) - Math.floor(((latA/1000000) - Math.floor(latA/1000000)) * 60)) * 100000) *60/100000 ).toString();
ls = tls.toString();
lm = tlm.toString();
ld = tld.toString();

if(ll.lng() < 0)
{
  var tlgs = '-' + Math.floor((lonA / 1000000)).toString();
}
else
{
	var tlgs = Math.floor((lonA / 1000000)).toString();
}
var tlgm = Math.floor(((lonA/1000000) - Math.floor(lonA/1000000)) * 60).toString();
var tlgd = ( Math.floor(((((lonA/1000000) - Math.floor(lonA/1000000)) * 60) - Math.floor(((lonA/1000000) - Math.floor(lonA/1000000)) * 60)) * 100000) *60/100000 ).toString();
lgs = tlgs.toString();
lgm = tlgm.toString();
lgd = tlgd.toString();
}

function reset() {
mrks.mvcMarkers.forEach(function(elem, index) {elem.setMap(null);});
mrks.mvcMarkers.clear();
document.getElementById("map_search").value='';
document.getElementById("latboxm").value='';
document.getElementById("latboxmd").value='';
document.getElementById("latboxms").value='';
document.getElementById("lonbox").value='';
document.getElementById("lonboxm").value='';
document.getElementById("lonboxmd").value='';
document.getElementById("lonboxms").value='';
marker.setPosition(map.getCenter());
}

function reset1() {
marker.setPosition(map.getCenter());
computepos (map.getCenter());
}

//]]>
</script>

<body onload="xz()">
<center>

<div id="h0"></div>
<div id="o">

<div id="content">
<table cellpadding="4" cellspacing="0" width="100%">
<tr valign="top">
<td class="cs" width="100%">

<h1>Latitude and Longitude of a Point</h1>
<div id="wrapper" style="margin:5px"><div id="map" style="width: 800px; height: 450px"></div></div>
<table cellpadding="5" cellspacing="0" border="1">
<tr>
<td width="50%" valign="top">
<center><input type="button" value="Clear / Reset" id="reset" onclick="reset()">&nbsp;&nbsp;<input type="button" value="Center Red Marker" id="reset1" onclick="reset1()"></center>
</td>

</tr>
</table>
</td>














<?php

phpinfo();

?>


</html>
