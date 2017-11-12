<?php
die();
/*
*
*/
defined('_JEXEC');


$tytuly= array('Żurawie Wieżowe','Dźwigi samojezdne','Kontenery - Twoje biuro budowy');
$tresci= array('Jesteśmy wiodącą firmą w Polsce, oferującą między innymi wynajem żurawi wieżowych. Posiadamy sprzęt światowej klasy producentów takich jak Liebherr, Wolff Kran czy Potain. <br>
W naszej ofercie znajduje się ponad 180 żurawi wieżowych w zakresie od 30 – 630 tm i długości wysięgnika od 20 – 80 m.', 'Świadczymy usługi najwyższej jakości w zakresie wynajmu dźwigów samojezdnych a także doradztwa technicznego w zakresie technologii montażu i doboru sprzętu. Obecnie dysponujemy kilkudziesięcioma dźwigami takich marek jak Demag, Liebherr, Grove. <br>
Do Państwa dyspozycji posiadamy dźwigi samojezdne o udźwigach do 300 ton.','Dostarczamy i wykonujemy kontenery jako pomieszczenia wolnostojące lub zaplecze kontenerowe na budowie. Dysponujemy kontenerami biurowymi, socjalnymi, sanitarnymi i morskimi.');
$nr=1;
if(isset($_GET['nr'])) $nr=(int)$_GET['nr']-1;
$tytul = $tytuly[$nr];
$tresc = $tresci[$nr];

?>
<div>
<h6><?php echo $tytul; ?></h6>
<p><?php echo $tresc; ?></p>
</div>