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
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
  <head>
    <title> STREIF Baulogistik Polska  </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/streif/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/streif/css/jqueryslidemenu.css" />
    <!--[if lte IE 7]>
<style type="text/css">
html .jqueryslidemenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>
<![endif]-->

<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/streif/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/streif/js/jqueryslidemenu.js"></script>
<link href="/www/templates/streif/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/streif/css/style_tv.css" />
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
         var rtvc = 'url("<?php echo $this->baseurl ?>/templates/streif/img/img' + $(fakethis).index() + '.jpg")' 
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
  <div id="top_bb">
    <h1><a href="index.php">Streif</a></h1>
  </div>
  <div id="top_menu">
    <h2><a href="index.php">Baulogistik</a></h2>
    <ul>
      <li><a href="index.php">Home</a></li> 
      <li><span>|</span></li>
      <li><a href="?option=com_content&view=article&id=42&Itemid=38">Kontakt</a></li>
      <li><span>|</span></li>
      <li><a href="?option=com_xmap">Mapa Strony</a></li>
      
    </ul>
  </div>
  <jdoc:include type="modules" name="menu" style="rounded" />
<div class="search">
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
   
   //$bannery = array('_head_4_2.jpg','_head_5_2.jpg','_head_6_2.jpg','_head_7_2.jpg','_head_8_2.jpg','_head_20_2.jpg','_head_23_2.jpg','_head_24_2.jpg','_head_30_2.jpg','_head_40_2.jpg','_head_41_2.jpg','_head_43_2.jpg','_head_120_2.jpg');
   $itid = 2;
   $bz = array('zurawie/_head_5_2.jpg','zurawie/male7.jpg','zurawie/male8.jpg');
   $bc = array('kontenery/_head_20_2.jpg','kontenery/male10.jpg');
   $bk = array('kontakt/_head_4_2.jpg','kontakt/male1.jpg');
   $bd = array('dzwigi/male3.jpg','dzwigi/male4.jpg');
   $b = array('_head_6_2.jpg','_head_7_2.jpg','_head_8_2.jpg','_head_24_2.jpg','male6.jpg','male9.jpg','male11.jpg','male12.jpg','male13.jpg','male14.jpg');	
   
   $ba = $result = array_merge($b,$bz,$bc,$bk,$bd);
   
   
   if (isset($_GET['Itemid']))
   $itid =(int) $_GET['Itemid'];
   $ban = "";
   if($itid==22) //�urawie
   $ban = $bz[rand(0,count($bz)-1)];
   else if($itid==27) //Dzwigi
   $ban = $bd[rand(0,count($bd)-1)];
   else if($itid==32) //Kontenery
   $ban = $bc[rand(0,count($bc)-1)];
   else if($itid==38) //Kontakt
   $ban = $bk[rand(0,count($bk)-1)];
   else 
     $ban = $ba[rand(0,count($ba)-1)];
   
   $ban = '/templates/streif/streif_bannery/male/'.$ban;

   ?>

  <div id="bb">
  <img src="<?php echo $this->baseurl ?><?php echo $ban; ?>" alt="Streif" />
  </div>
  <div id="lewemenu"><jdoc:include type="modules" name="left" style="rounded" /></div>
  <div id="tresc">
    <jdoc:include type="component" />
  </div>
<?php } ?>

<div id="stopka"> <a href="http://www.streif-baulogistik.de">STREIF Baulogistik Niemcy </a> I <a href="http://www.streif.kiev.ua/" target="_blank">STREIF Baulogistik Ukraina </a> I STREIF Baulogistik Polska |  Copyright &copy; <?php echo date("Y"); ?>  STREIF Baulogistik Polska </div>

</div>
</body>
</html>