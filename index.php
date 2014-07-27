<?php
session_start();
include 'translator.php';

header("Content-Type: text/html; charset=UTF-8");

if (!isset($_SESSION['lang'])){
    $_SESSION['lang']='en';
}

if ($_GET['lang']=='es') {
    header("Content-Type: text/html; charset=ISO-8859-1");
} else {
    header("Content-Type: text/html; charset=UTF-8");
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/logo.ico" >
<meta http-equiv="Content-Type" content="text/html" />
<meta name="google-translate-customization" content="f834267014ca7c94-fa3692548ecc1728-g752fbb026f2b6e43-13"></meta>
<title>Cmproperties - Sale and Rent properties in Costa Blanca</title>
<!-- <title>Cmproperties properties for sale and rent in Spain, Torrevieja, Orihuela Costa, Campoamor, Mil Palmeras, La Mata</title> -->
<meta name="keywords" content="cmproperties, casas, inmuebles, houses, property, sell, rent" />
<meta name="description" content="Cmproperties properties for sale and rent in Spain, Torrevieja, Orihuela Costa, Campoamor, Mil Palmeras, La Mata" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<!--
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript">

var flashvars = {};
flashvars.cssSource = "piecemaker.css";
flashvars.xmlSource = "photo_list.xml";

var params = {};
params.play = "true";
params.menu = "false";
params.scale = "showall";
params.wmode = "transparent";
params.allowfullscreen = "true";
params.allowscriptaccess = "always";
params.allownetworking = "all";

swfobject.embedSWF('piecemaker.swf', 'piecemaker', '1190', '420', '10', null, flashvars,    
    params, null);

</script>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
--!>


</head>


<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ TRANSLATOR +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<div id="translate_element2">

<a href="<?php print($_SERVER['PHP_SELF']."?".$qs); ?>&lang=en" style="display:inline; border:none;" ><img style="height:26px; width:38px;" src="images/flags/english.png"></a>
<a href="<?php print($_SERVER['PHP_SELF']."?".$qs); ?>&lang=no" style="display:inline; border:none;" ><img style="height:26px; width:38px;" src="images/flags/norwegian.png;"></a>
<a href="<?php print($_SERVER['PHP_SELF']."?".$qs); ?>&lang=sv" style="display:inline; border:none;" ><img style="height:26px; width:38px;" src="images/flags/swedish.png;"></a>
<a href="<?php print($_SERVER['PHP_SELF']."?".$qs); ?>&lang=fi" style="display:inline; border:none;" ><img style="height:26px; width:38px;" src="images/flags/finland.jpg;"></a>
<a href="<?php print($_SERVER['PHP_SELF']."?".$qs); ?>&lang=ru" style="display:inline; border:none;" ><img style="height:26px; width:38px;" src="images/flags/russian.png;"></a>
<a href="<?php print($_SERVER['PHP_SELF']."?".$qs); ?>&lang=de" style="display:inline; border:none;" ><img style="height:26px; width:38px;" src="images/flags/german.png;"></a>
<a href="<?php print($_SERVER['PHP_SELF']."?".$qs); ?>&lang=zh-CN" style="display:inline; border:none;" ><img style="height:26px; width:38px;" src="images/flags/chinese.jpg;"></a>
<a href="<?php print($_SERVER['PHP_SELF']."?".$qs); ?>&lang=fr" style="display:inline; border:none;" ><img style="height:26px; width:38px;" src="images/flags/french.jpeg;"></a>
<a href="<?php print($_SERVER['PHP_SELF']."?".$qs); ?>&lang=es" style="display:inline; border:none;" ><img style="height:26px; width:38px;" src="images/flags/spanish.png;"></a>
</div>

<?php

$_SESSION['lang'] = $_GET['lang'];

?>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ /TRANSLATOR +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


<body>
<div id="templatemo_header_wrapper">
    <div id="templatemo_header">
        <div id="site_title">
                <a href="index.php"><img name="cmproperties" src="images/logo.png" height="95px" width="245px" alt="cmproperties" /><span><img src="images/properties.png" height="53px" width="223px" alt="properties" /></span></a>        </div> <!-- end of site_title -->
        <div id="templatemo_menu" class="notranslate">
            <ul>
                <li><a href="index.php?lang=<?php print($_SESSION['lang']); ?>" class="current">Home</a></li>
                <li><a href="search_result.php?lang=<?php print($_SESSION['lang']); ?>">For Sale</a></li>
                <li><a href="search_result_rent.php?lang=<?php print($_SESSION['lang']); ?>">For Rent</a></li>
                <li><a href="contacto.php?lang=<?php print($_SESSION['lang']); ?>">Contact</a></li>
<!--                 <li class="last"><a href="contact.html">Contact</a></li> -->
            </ul>

<!--             <div id="search_box">
                <form action="#" method="post">
                    <input type="text" value="Search on this website" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                    <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
                </form>
            </div> -->
            <div class="cleaner"></div>    	
        </div>
        <div class="cleaner"></div>
    </div> <!-- end of header -->
    <div class="cleaner"></div>
</div>

<div id="templatemo_wrapper">

    <div id="templatemo_flash">
        <div id="piecemaker">
            <p>This is a placeholder of 3D Flash Slider. Feel free to put in any alternative content here.</p>
        </div>
    </div> <!-- end of flash -->




<!--
<div id="templatemo_content_top"></div>
-->
    <div id="templatemo_content">
      <div id="templatemo_main_content2">

          <div class="search_result_holder">







<!-- *************************************************************************************************************************************************************- -->
<!-- <p align="center">
<welcome><?php print(Translate('WELCOME','')); ?></welcome>
<img src="images/door.png" height="100px" width="91px" alt="door" style="margin: 0 0 -25px 25px;" />
</p>
<br/> -->

<!-- *************************************************************************************************************************************************************- -->

<p style="background: url(/images/templatemo_hr_divider.jpg) repeat-x bottom; font-size: 10px;" ></p>
<!-- *************************************************************************************************************************************************************- -->




<table align="center" cellspacing="20" style="margin-top: -5px;">
<tr>
<td style="text-align: center; font-size: 15px; color: black; font-weight: bold;">
<a href="house.php?ref=M702&lang=<?php print($_SESSION['lang']); ?>"><img style='border-radius: 10px; margin-bottom: 5px; border: 2px solid white;' src='/images/index/finca.jpg' width='150px' height='115px' alt=''/><a><br/>
<b style="background: white; border-radius: 5px;">&nbsp <?php print(Translate('Fincas','')); ?> &nbsp</b>
</td>

<td style="text-align: center; font-size: 15px; color: black;
  font-weight: bold;"><a href="house.php?ref=T104&lang=<?php print($_SESSION['lang']); ?>"><img style='border-radius: 10px; margin-bottom: 5px; border: 2px solid white;' src='/images/index/mar_azul.jpg'
  width='150px' height='115px' alt=''/></a><br/>
<b style="background: white; border-radius: 5px;">&nbsp <?php print(Translate('Apartments','')); ?> &nbsp</b>
</td>

<form action="search_result.php?lang=<?php print($_SESSION['lang']); ?>" method="post">
<input type="text" name="sea_views" value="1" style="visibility: hidden;">
<td style="text-align: center; font-size: 15px; color: black; font-weight: bold;">
<input type="image" style='border-radius: 10px; margin-bottom: 5px; border: 2px solid white;' src='/images/index/playa_la_mata.jpg' width='150px' height='115px' alt='kek'><br>
<b style="background: white; border-radius: 5px;">&nbsp <?php print(Translate('Sea Views','')); ?> &nbsp</b>
</td>
</form>

<td style="text-align: center; font-size: 15px; color: black; font-weight: bold;">
<a href="house.php?ref=P504&lang=<?php print($_SESSION['lang']); ?>"><img style='border-radius: 10px; margin-bottom: 5px; border: 2px solid white;' src='/images/index/chalet.jpg' width='150px' height='115px' alt=''/></a><br/>
<b style="background: white; border-radius: 5px;">&nbsp <?php print(Translate('Villas','')); ?> &nbsp</b>
</td>

<td style="text-align: center; font-size: 15px; color: black; font-weight: bold;">
<a href="house.php?ref=T105&lang=<?php print($_SESSION['lang']); ?>"><img style='border-radius: 10px; margin-bottom: 5px; border: 2px solid white;' src='/images/index/bungalow.jpg' width='150px' height='115px' alt=''/></a><br/>
<b style="background: white; border-radius: 5px;">&nbsp <?php print(Translate('Bungalows','')); ?> &nbsp</b>
</td>

</tr>
</table>

<!-- *************************************************************************************************************************************************************- -->

<p style="background: url(/images/templatemo_hr_divider.jpg) repeat-x bottom; font-size: 10px;" ><br></p> 

<!-- *************************************************************************************************************************************************************- -->

<form action="search_result.php?lang=<?php print($_SESSION['lang']); ?>" method="post" style="text-align: center; margin-top: 35px; padding-left: 15px; padding-right: 15px; font-size: 12px; ">

<b>
<?php print(Translate('Location:','')); ?><select name="localidad" class="search">
<option value="%" <?php echo($_POST['localidad'] == "%" ? ' selected="selected"' : null) ?> >Any</option>
<option value="Torrevieja" <?php echo($_POST['localidad'] == "Torrevieja" ? ' selected="selected"' : null) ?> >Torrevieja</option>
<option value="Guardamar" <?php echo($_POST['localidad'] == "Guardamar" ? ' selected="selected"' : null) ?> >Guardamar</option>
<option value="Valle_del_sol" <?php echo($_POST['localidad'] == "Valle_del_sol" ? ' selected="selected"' : null) ?> >Valle del Sol</option>
<option value="Orihuela Costa" <?php echo($_POST['localidad'] == "Orihuela Costa" ? ' selected="selected"' : null) ?> >Orihuela Costa</option>
<option value="Pilar de la Horadada" <?php echo($_POST['localidad'] == "Pilar de la Horadada" ? ' selected="selected"' : null) ?> >Pilar de la Horadada</option>
<option value="San Javier" <?php echo($_POST['localidad'] == "San Javier" ? ' selected="selected"' : null) ?> >San Javier</option>
<option value="Los Alcazares" <?php echo($_POST['localidad'] == "Los Alcazares" ? ' selected="selected"' : null) ?> >Los Alcazares</option>
<option value="Mil Palmeras" <?php echo($_POST['localidad'] == "Mil Palmeras" ? ' selected="selected"' : null) ?> >Mil Palmeras</option>
<option value="Pinar de Campoverde" <?php echo($_POST['localidad'] == "Pinar de Campoverde" ? ' selected="selected"' : null) ?> >Pinar de Campoverde</option>
<option value="Torrepacheco" <?php echo($_POST['localidad'] == "Torrepacheco" ? ' selected="selected"' : null) ?> >Torrepacheco</option>
<option value="Dehesa de Campoamor" <?php echo($_POST['localidad'] == "Dehesa de Campoamor" ? ' selected="selected"' : null) ?> >Dehesa de Campoamor</option>
</select>

<?php print(Translate('Area:','')); ?>
<input type="text" name="zona" value="<?php echo $_POST['zona'] ?>" style="width: 10em; " class="search">

<?php print(Translate('Type:','')); ?>
<select name="cat" class="search">
<option value="%" <?php echo($_POST['cat'] == "%" ? ' selected="selected"' : null) ?> >Any</option>
<option value="Apartment" <?php echo($_POST['cat'] == "Apartment" ? ' selected="selected"' : null) ?> >Apartment</option>
<option value="Bungalow" <?php echo($_POST['cat'] == "Bungalow" ? ' selected="selected"' : null) ?> >Bungalow</option>
<option value="Town house" <?php echo($_POST['cat'] == "Town house" ? ' selected="selected"' : null) ?> >Town house</option>
<option value="Duplex" <?php echo($_POST['cat'] == "Duplex" ? ' selected="selected"' : null) ?> >Duplex</option>
<option value="Villa" <?php echo($_POST['cat'] == "Villa" ? ' selected="selected"' : null) ?> >Villa</option>
<option value="Finca" <?php echo($_POST['cat'] == "Finca" ? ' selected="selected"' : null) ?> >Finca</option>
<option value="Plot" <?php echo($_POST['cat'] == "Plot" ? ' selected="selected"' : null) ?> >Plot</option>
</select>

<?php print(Translate('Bedrooms:','')); ?>
<select name="hab" class="search">
<option value="%" <?php echo($_POST['hab'] == "%" ? ' selected="selected"' : null) ?> >Any</option>
<option value="1" <?php echo($_POST['hab'] == "1" ? ' selected="selected"' : null) ?> >1</option>
<option value="2" <?php echo($_POST['hab'] == "2" ? ' selected="selected"' : null) ?> >2</option>
<option value="3" <?php echo($_POST['hab'] == "3" ? ' selected="selected"' : null) ?> >3</option>
<option value="4" <?php echo($_POST['hab'] == "4" ? ' selected="selected"' : null) ?> >4</option>
<option value="5" <?php echo($_POST['hab'] == "5" ? ' selected="selected"' : null) ?> >5</option>
<option value="6" <?php echo($_POST['hab'] == "6" ? ' selected="selected"' : null) ?> >6</option>
<option value="7" <?php echo($_POST['hab'] == "7" ? ' selected="selected"' : null) ?> >7</option>
</select>

<?php print(Translate('Bathrooms:','')); ?>
<select name="wc" class="search">
<option value="%" <?php echo($_POST['wc'] == "%" ? ' selected="selected"' : null) ?> >Any</option>
<option value="1" <?php echo($_POST['wc'] == "1" ? ' selected="selected"' : null) ?> >1</option>
<option value="2" <?php echo($_POST['wc'] == "2" ? ' selected="selected"' : null) ?> >2</option>
<option value="3" <?php echo($_POST['wc'] == "3" ? ' selected="selected"' : null) ?> >3</option>
<option value="4" <?php echo($_POST['wc'] == "4" ? ' selected="selected"' : null) ?> >4</option>
</select>

<br>
<br>

<?php print(Translate('Order by:','')); ?>
<select name="order_by" class="search">
<option value="precio ASC" <?php echo($_POST['order_by'] == "precio ASC" ? ' selected="selected"' : null) ?> >Price asc</option>
<option value="precio DESC" <?php echo($_POST['order_by'] == "precio DESC" ? ' selected="selected"' : null) ?> >Price desc</option>
<option value="wc" <?php echo($_POST['order_by'] == "wc" ? ' selected="selected"' : null) ?> >Bathrooms</option>
<option value="hab" <?php echo($_POST['order_by'] == "hab" ? ' selected="selected"' : null) ?> >Bedrooms</option>
</select>

<?php print(Translate('Max','')); ?>&nbsp&euro;:
<input type="text" name="precio_max" style="width: 5em; " class="search">


<?php print(Translate('Reference:','')); ?>
<input type="text" name="ref" value="<?php echo $_POST['ref'] ?>" class="search">
</b>


</br>
</br>
<div class="button">
<input type="submit" value="<?php print(Translate('Search','')); ?>" style="color: #000000; text-align: center; font-size: 14px; width: 7em; height: 1.7em; font-weight: bold; border-radius: 5px; background-color: #ff9539;" align="middle">
</div>
</form>
</br>

<!-- *************************************************************************************************************************************************************- -->

<p style="margin-top: -15px; margin-bottom: 25px; background: url(/images/templatemo_hr_divider.jpg) repeat-x bottom; font-size: 10px;" ><br></p> 


<!-- *************************************************************************************************************************************************************- -->

<p align="center" style="margin-bottom: -15px;">
<b style="font-size: 23px; color: #ec7014; text-shadow: #000000 -1px 2px 9px;" >&#x260e;</b><b style="font-size: 20px; line-height: 29px;"> 608 498 985</b>
<br>
<b style="font-size: 20px; line-height: 29px;">Ctra. a San Miguel Km, 1 - La Regia</b>
<br>
<b style="font-size: 23px; color: #ec7014;" ><!--&#9993;--></b><b style="font-size: 20px; line-height: 29px;"> info@cmproperties.es</b>
</p>


<!-- *************************************************************************************************************************************************************- -->

      </div>
      </div>

        <div class="cleaner"></div>
    </div>
    <div id="templatemo_content_bottom"></div>

    <div id="templatemo_footer">

        Copyright &copy; 2048 Cmapas

    </div> <!-- end of templatemo_footer -->

</div> <!-- end of wrapper -->
</body>
</html>






<?php


// --------------------------------------------------SCRIPT TO WRITE TO LOG-------------------------------------------------------

// +++++++++++ GET CLIENT IP +++++++++++++++++
if (getenv("HTTP_CLIENT_IP")){
    $ip = getenv("HTTP_CLIENT_IP");
}
else if(getenv("HTTP_X_FORWARDED_FOR")){
    $ip = getenv("HTTP_X_FORWARDED_FOR");
}
else if(getenv("REMOTE_ADDR")){
    $ip = getenv("REMOTE_ADDR");
}else{
    $ip = "UNKNOWN";
}
// +++++++++++ GET CLIENT IP +++++++++++++++++


$fopen = fopen("Log/log.txt", "a");

$write = date('d.m.Y') . "  ||  " . date('H.i.s') . "  ||  " . $ip . "\r\n";



fwrite($fopen, $write);
fclose($fopen);

session_write_close();

// --------------------------------------------------SCRIPT TO WRITE TO LOG-------------------------------------------------------
?>
