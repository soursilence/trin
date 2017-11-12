<?php
/**
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

$document =& JFactory::getDocument();
$mainframe = JFactory::getApplication();
if($document->title!=$mainframe->getCfg('sitename'))
$document->setTitle($document->title. " - " . $mainframe->getCfg('sitename'));
else $document->setTitle('Usługi dźwigowe - dźwigi - żurawie wieżowe - TRINAC Polska');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
  <head>
  	<title><?php echo $document->title; //Usługi dźwigowe – dźwigi – żurawie wieżowe - TRINAC Polska ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/trinac/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/trinac/css/jqueryslidemenu.css" />
    <!--[if lte IE 7]>
<style type="text/css">
html .jqueryslidemenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>
<![endif]-->

<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/trinac/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/trinac/js/jqueryslidemenu.js"></script>
<link href="/www/templates/trinac/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/trinac/css/style_tv.css" />
    <jdoc:include type="head" />
<script>
/* tv-js */
 $(document).ready(function(){
      $('.tvright').load('<?php echo $this->baseurl ?>/modules/mod_mainpage/tv_content.php?nr=1');
      var fakethis = $('#pos1 ul li:eq(0)');
      
      $('#pos1 ul li a').click(function(){
        fakethis = $(this).parent()
        tvclick (fakethis); 
        return false;
      });
      
      $('#pos1 ul li').click(function(){
        fakethis = $(this);
        tvclick (fakethis);
      });
      
      function tvclick(fakethis) {
        $(fakethis).siblings().removeClass('active').end().addClass('active') 
         i = fakethis.index();
         var rtvh = $('a', fakethis).attr('href')
         var rtvc = 'url("<?php echo $this->baseurl ?>/templates/trinac/img/img' + $(fakethis).index() + '.jpg")' 
         $('#pos1').css('background-image', rtvc) 
         $('.tvright').load(rtvh);
        return false; 
         
      }
     
      var i = 1
      var petla = $('#pos1 ul li').size() -1;
      
      function nextfake(i) {
        fakethis = $('#pos1 ul li:eq('+i+')')
        tvclick(fakethis)
      }
      
      setInterval(function () {
        if (i<=petla)
        {
        nextfake(i);
        }
        else {i=0;nextfake(i);}
        ++i;
        }, 4000);  
       
   });   
</script>
<script type="text/javascript" src="lightbox/js/prototype.js"></script>
<script type="text/javascript" src="lightbox/js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="lightbox/js/lightbox.js"></script>  
<link rel="stylesheet" href="lightbox/css/lightbox.css" type="text/css" media="screen" />
</head>
<body>
<div id="wszystko">
  <div id="top_menu">
    <h2><a href="/">Trinac POLSKA</a></h2>
    <ul>
      <li><a href="?option=com_content&view=article&id=42&Itemid=38">Kontakt</a></li>
      <li><span>|</span></li>
      <li><a href="?option=com_xmap">Mapa Strony</a></li>
      
    </ul>
  </div>
  <jdoc:include type="modules" name="menu" style="rounded" />
<div class="search_form">
       	  	<form action="" method="get"  id="form1">
   	      	<span id="search">
   	       		<input name="searchword" id="searchfield" type="text" class="input" accesskey="s" tabindex="1" value="" />
   	       	<input type="hidden" name="ordering" value="newest" /><input type="hidden" name="searchphrase" value="any" /><input type="hidden" name="option" value="com_search" />
            </span>
            <input name="" type="submit" class="ok" value="OK" />
          </form>
    	</div>

 <?php if($this->countModules('mainpage')){ ?>

     <jdoc:include type="modules" name="mainpage" style="rounded" />
   
   <?php } else { 
   
  //$bannery = array('n_01.jpg','n_02.jpg','n_03.jpg','n_04.jpg','n_05.jpg','n_06.jpg','n_08.jpg','n_09.jpg','n_10.jpg','n_11.jpg','n_12.jpg','n_13.jpg','n_14.jpg','n_15.jpg','n_16.jpg','n_17.jpg','n_18.jpg','n_19.jpg','n_20.jpg');
      
   
   $nr = rand(1,20);
   $ban = "m_".str_pad($nr, 2, "0", STR_PAD_LEFT).".jpg";
   
   $ban = '/templates/trinac/trinac_bannery/'.$ban;

   

   ?>

  <div id="bb">
  <img src="<?php echo $this->baseurl ?><?php echo $ban; ?>" alt="Trinac" />
  </div>
  <div id="lewemenu"><jdoc:include type="modules" name="left" style="rounded" /></div>
  <div id="tresc">
    <jdoc:include type="component" />
  </div>
<?php } ?>

<div id="stopka">
<P style="font-size: small; color: #000; text-align:right;"><jdoc:include type="modules" name="footer" style="rounded" /><a href="http://www.trinac.de">TRINAC GmbH </a></p>Copyright &copy; <?php echo date("Y"); ?>  TRINAC Polska </div>

</div>
<!-- start AlienSTATS code -->

<script language="javascript">

<!--

var alienPath='http://stats.trinac.pl';

var alienPageDescr='<?php echo urldecode(substr($_SERVER['REQUEST_URI'],1)); ?>';

//alienPageDescr='trinac';



document.write('<scr'+'ipt language="JavaScript" src="'+alienPath+'/astat.js?alienPageDescr='+alienPageDescr+'"><\/scr' + 'ipt>');

//-->

</script>

<!-- end AlienSTATS code -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29169438-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>