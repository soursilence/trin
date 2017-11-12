<?php
/*
* Plik: tmpl/default.php
*/
defined('_JEXEC') or die ('brak dostępu');
$swieta=false;
 //$bannery = array('1.jpg','3.jpg','4.jpg','8.jpg','9.jpg','10.jpg','11.jpg','12.jpg','13.jpg','14.jpg','15.jpg','16.jpg','17.jpg','18.jpg','19.jpg','20.jpg','21.jpg','22.jpg');
 
  $nr = rand(1,22);
 $bannery =  "n_".str_pad($nr, 2, "0", STR_PAD_LEFT).".jpg";
$banner = 'templates/trinac/trinac_bannery/'.$bannery;
if($swieta==true) $banner = 'http://trinac.pl/images/TRINAC-e-kartka.jpg';

?>
<div id="mb">
<img src="<?php //echo $this->baseurl ?><?php echo $banner; ?>" alt="" />
</div>

<div id="maincont">
<div id="mainh3"></br>
<h3>Witamy na stronie <strong>TRINAC Polska</strong></h3>
</div>

<div id="leftcol" class="maincol">

<!--<img src="/images/trinac-map.png" alt="" />-->
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="250" height="310" id="polska_v1" align="middle">
				<param name="movie" value="/flash/polska_v1.swf">
				<param name="quality" value="high">
				<param name="bgcolor" value="#ffffff">
				<param name="play" value="true">
				<param name="loop" value="true">
				<param name="wmode" value="window">
				<param name="scale" value="showall">
				<param name="menu" value="true">
				<param name="devicefont" value="false">
				<param name="salign" value="">
				<param name="allowScriptAccess" value="sameDomain">
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="/flash/polska_v1.swf" width="250" height="310">
					<param name="movie" value="/flash/polska_v1.swf">
					<param name="quality" value="high">
					<param name="bgcolor" value="#ffffff">
					<param name="play" value="true">
					<param name="loop" value="true">
					<param name="wmode" value="window">
					<param name="scale" value="showall">
					<param name="menu" value="true">
					<param name="devicefont" value="false">
					<param name="salign" value="">
					<param name="allowScriptAccess" value="sameDomain">
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player">
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>


</div>

<div id="midcol" class="maincol">
<h3>Doświadczenie i wiedza podstawą sukcesu inwestycji</h3>
<div id="midcol2">
<?php
foreach ($res as $r)
{
?>

<?php echo $r->introtext; ?>
<?php } ?>
</div>
</div>
<!--<div id="rightcol"  class="maincol">
</div>-->

</div>
