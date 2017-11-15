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
<img style="width: 100%" src="<?php //echo $this->baseurl ?><?php echo $banner; ?>" alt="" />
</div>

<div class="row" id="mainh3">
<!--<div id="mainh3"></br>-->
<div class="col-md-3 col-xs-1"><hr></div>
<div class="col-md-6 col-xs-10"><h2 class="text-center">Witamy na stronie <strong>TRINAC Polska</strong></h2></div>
<div class="col-md-3 col-xs-1"><hr></div>
<!--</div>-->
</div>

<div class="row">
<div id="leftcol" class="col-md-4 visible-md visible-lg">

    <div class="map-container">
        <div class="map-cities map-poz">Poznań</div>
        <div class="map-cities map-waw">Warszawa</div>
        <div class="map-cities map-kra">Kraków</div>
        
        <div class="map-citi-desc desc-poz"><span class="desc-close">x</span>
            <h5>Oddział Zachód</h5>
            <p>ul. Dziadoszańska 10<br/>
                61-248 Poznań<br />
                tel: +48 61 8734981<br />
                tel: +48 61 8734981</p>
            <h5>Żurawie Wieżowe</h5>
            <p>tel. kom: +48 601 573 526<br />
                email: <a href="mailto:piotr.tribus@trinac.pl">piotr.tribus@trinac.pl</a>
            </p>
        </div>
        <div class="map-citi-desc desc-waw"><span class="desc-close">x</span>
            <h5>Centrala i Oddział Centralny</h5>
            <p>ul. Palisadowa 20/22<br/>
                01-940 Warszawa<br />
                tel: +48 22 865 46 48<br />
                tel: +48 22 865 46 52</p>
            <h5>Żurawie Wieżowe</h5>
            <p>tel. kom: +48 609 038 560<br />
                email: <a href="mailto:pawel.rojek@trinac.pl">pawel.rojek@trinac.pl</a>
            </p>
        </div>
        <div class="map-citi-desc desc-kra"><span class="desc-close">x</span>
            <h5>Oddział Południe</h5>
            <p>ul. Pułkownika Dąbka 2<br/>
                30-832 Kraków<br />
                tel: +48 12 653 66 30<br />
                tel: +48 12 653 66 30</p>
            <h5>Żurawie Wieżowe</h5>
            <p>tel. kom: +48 605 555 531<br />
                email: <a href="mailto:michal.kurczynski@trinac.pl">michal.kurczynski@trinac.pl</a>
            </p>
        </div>
        

    </div>
    
   <?php /* 
<!--<img src="/images/trinac-map.png" alt="" />-->
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="250" height="310" id="polska_v1" align="middle">
				<param name="movie" value="flash/polska_v1.swf">
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
				<object type="application/x-shockwave-flash" data="flash/polska_v1.swf" width="250" height="310">
					<param name="movie" value="flash/polska_v1.swf">
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
*/ ?>

</div>

<div id="midcol" class="col-md-8 col-sm-12">
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


