<?php
/*
* Plik: tmpl/default.php
*/
defined('_JEXEC') or die ('brak dostępu');
$swieta=false;
 $bannery = array('1.jpg','3.jpg','4.jpg','8.jpg','9.jpg','10.jpg','11.jpg','12.jpg','13.jpg','14.jpg','15.jpg','16.jpg','17.jpg','18.jpg','19.jpg','20.jpg','21.jpg');
$banner = 'templates/streif/streif_bannery/bm/'.$bannery[rand(0,count($bannery)-1)];
if($swieta==true) $banner = 'http://streif.pl/images/streif2012a.jpg';

?>
<div id="mb">
<img src="<?php //echo $this->baseurl ?><?php echo $banner; ?>" alt="" />
</div>

<div id="maincont">
<div id="mainh3">
<h3>Witamy na stronie <strong>STREIF Baulogistik Polska</strong> - <br />
eksperta w zakresie infrastruktury budowlanej</h3>
</div>
<div id="leftercol" class="maincol">
<?php
foreach ($oferta as $r)
{
?>
<h3><?php echo $r->title; ?></h3>
<?php echo $r->introtext; ?>
<?php } ?>
</div>
<div id="leftcol" class="maincol">
<h3>Nasze Projekty</h3>
<?php
foreach ($res2 as $r)
{
?>
<h4><?php echo $r->title; ?></h4>
<p><?php echo $r->introtext; ?></p>
<a href="projekty-19/<?php echo $r->catid; ?>-aktualne/<?php echo $r->id; ?>-<?php echo $r->alias; ?>.html">więcej</a>
<!--<a href="?option=com_content&view=article&id=<?php echo $r->id; ?>&catid=<?php echo $r->catid; ?>&Itemid=19">więcej</a>-->
<?php

}
?>
</div>

<div id="midcol" class="maincol">
<?php
foreach ($res as $r)
{
?>
<h3><?php echo $r->title; ?></h3>
<?php echo $r->introtext; ?>
<?php } ?>
</div>
<div id="rightcol"  class="maincol">
<h3>STREIF Baulogistik Polska</h3>

			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="210" height="350" id="polska2" align="middle">
				<param name="movie" value="flash/polska2.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="window" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="flash/polska2.swf" width="210" height="350">
					<param name="movie" value="flash/polska2.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ffffff" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="window" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>


<!--
<img src="http://www.streif.pl/www/templates/streif/img/streif_main_mapka.jpg" alt="" />
<p>
            ul. Palisadowa 20/22<br />
            01-940 Warszawa<br />
            tel.: +48 (22) 865 46 48<br />
            fax:  +48 (22) 865 46 52<br />
            KRS: 0000047885, <br/>
            Sąd Rejonowy dla m.st. Warszawy<br/>
            NIP 118-15-78-328<br />

<a href="mailto:sekretariat@streif.pl">sekretariat@streif.pl</a></p>-->
<div style="display:box; margin:3px auto; width=230px; height=75px; padding:3px 2px; font-size:1.28em;"> <img src="http://www.tbb.streif.pl/templates/streif/img/tbb_logo.png" border="0" alt="TBB Serwis" title="TBB Serwis" width="52" height="27" /> <a href="http://www.tbb.streif.pl">Serwis żurawi wieżowych - TBB Serwis</a></div>

</div>

</div>