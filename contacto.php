<?php
session_start();
include 'translator.php';
if ($_GET['lang']=='es') {
  header("Content-Type: text/html; charset=ISO-8859-1");
} else {
  header("Content-Type: text/html; charset=UTF-8");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" />
<meta name="google-translate-customization" content="f834267014ca7c94-fa3692548ecc1728-g752fbb026f2b6e43-13"></meta>
<title>CMproperties - Contact</title>
<meta name="keywords" content="cmproperties, casas, inmuebles, houses, property, sell, rent" />
<meta name="description" content="CMproperties" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
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
	  
      swfobject.embedSWF('piecemaker.swf', 'piecemaker', '940', '420', '10', null, flashvars,    
      params, null);
    
</script>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
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
				<a href="index.php"><img src="images/logo.png" height="95px" width="245px" alt="logo" /><span><img src="images/properties.png" height="53px" width="223px" alt="properties" /></span></a>        </div> <!-- end of site_title -->
        <div id="templatemo_menu" class="notranslate">
            <ul>
                <li><a href="index.php?lang=<?php print($_SESSION['lang']); ?>">Home</a></li>
                <li><a href="search_result.php?lang=<?php print($_SESSION['lang']); ?>">For Sale</a></li>
                <li><a href="search_result_rent.php?lang=<?php print($_SESSION['lang']); ?>">For Rent</a></li>

<!--                 <li><a href="portfolio.html">Portfolio</a></li> -->
                <li><a href="contacto.php?lang=<?php print($_SESSION['lang']); ?>" class="current">Contact</a></li>
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

    <div id="templatemo_flash" align="center">
   		<div id="piecemaker">
        	<p>This is a placeholder of 3D Flash Slider. Feel free to put in any alternative content here.</p>
        </div>
    </div> <!-- end of flash -->
    
    <div id="templatemo_content">
    	<div id="templatemo_main_content">
        
        	<div class="content_box">
                <h1 align="center"><cmprop><?php echo Translate('Contact us',''); ?></cmprop></h1>



<!-- *******************************************************************************************************************- -->              
              <p align="center"><contact_p>
   <!--
   Póngase en contacto con nosotros llamando </br> al <b>608 498 985</b> o enviando un email a <b>info@cmproperties.es</b>
   <br>
   <br>
   -->
   <?php echo Translate('Contact us calling',''); echo' <b>608 498 985</b> '; echo Translate('or sending us an email to',''); echo' <b>info@cmproperties.es</b>'; ?>
</contact_p>
</p>

<!-- ******************************************************************************************************************** -->              

			</div>
            
        </div>
        
        <div id="templatemo_sidebar">
			<div class="image_wrapper image_fl"><img src="images/casa_02.jpg" alt="image" height="135px" width="155px" /></div>
<!--         
        	<div id="news_box">
                
                <h2>Latest Updates</h2>
                        
                <ul>
                	<li>
                        <h6><a href="#">Lorem ipsum dolor sit amet</a></h6>
                        <p>You may validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a> for this page. Maecenas tellus erat, dictum vel semper, dapibus ac elit.</p>
                    </li>
                    
                    <li>
                        <h6><a href="#">Nunc porttitor feugiat elit</a></h6>
                        <p>Nunc porttitor feugiat elit, ac tristique turpis condimentum in. Sed eleifend odio eget massa venenatis elementum.</p>
                    </li>
                    
                    <li class="last">
                        <h6><a href="#">Pellentesque mauris ligula</a></h6>
                        <p>Integer tempus consectetur risus, id congue justo fringilla vel. Curabitur vestibulum vulputate consectetur. </p>
                    </li>
                    
                </ul>
                <div class="btn_more"><a href="#"><span>+</span> View All Posts</a></div>
                <div class="cleaner"></div>     
            </div>
            
            <div class="sidebar_box">
            	<h2>Testimonial</h2>
                <blockquote>
                    <p align="justify">Quisque sit amet adipiscing libero. Donec et tellus vitae velit pharetra lobortis. Ut commodo, nulla eu pellentesque mollis, odio ante condimentum augue, eget facilisis dui magna ut ligula.</p>
                    
                    <cite>David - <span><a href="portfolio.html">Marketing Specialist</a></span></cite>
                </blockquote>
            </div>
 -->            
        </div>
        
        <div class="cleaner"></div>
    </div>
    <div id="templatemo_content_bottom"></div>
    
    <div id="templatemo_footer">

        Copyright &copy; 2048 <a href="#">CMproperties</a>
    
    </div> <!-- end of templatemo_footer -->
     
</div> <!-- end of wrapper -->
</body>
</html>

