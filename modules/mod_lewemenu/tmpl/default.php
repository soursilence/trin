<?php
/*
 * Plik: tmpl/default.php
 */
defined('_JEXEC') or die('brak dostępu');
$id = (int) $_GET['Itemid'];
$idd = (int) $_GET['id'];
$aaaa = array();
$db = & JFactory::getDBO();

if ($id == 19 || $id == 40) {
    ?>
    <ul class="lm">
        <?php
        /*
          foreach ($projekty as $r)
          {
          ?>

          <li><a href="projekty-19/<?php echo $r->catid; ?>-aktualne/<?php echo $r->id; ?>-<?php echo $r->alias; ?>.html"  <?php if($r->id==$idd ) { ?> style="font-weight: bold;"<?php } ?>><?php echo $r->title; ?></a></li>

          <?php
          }
          ?> </ul>
          <br /><br /><a href="projekty-19.html">wszystkie projekty</a>
          <?php */
    }
    if ($id == 2 || $id == 41) {
        ?>
        <ul class="lm">
            <?php
            foreach ($aktu as $r) {
                ?>
                <li><a href="aktualnosci/<?php echo $r->catid; ?>-aktualne/<?php echo $r->id; ?>-<?php echo $r->alias; ?>.html"  <?php if ($r->id == $idd) { ?> style="font-weight: bold;"<?php } ?>><?php echo $r->title; ?></a></li>

                <?php
            }
            ?> </ul>
        <br /><br /><a href="aktualnosci.html">wszystkie aktualności</a>
        <?php
    }
    if ($res != null) {
        ?>
        <ul class="lm">
            <?php
            foreach ($res as $r) {
                ?>
                <!-- <li><a href="<?php echo $r->alias; ?>.html"  <?php if ($r->id == $id) { ?> style="font-weight: bold;"<?php } ?>><?php echo $r->title; ?></a>	  -->
                <li><a href="<?php
                    if ($r->link == 'http://www.streif.pl/')
                        echo $r->link;
                    else {
                        echo $r->link;
                        if ($r->link == 'index.php')
                            echo '?';
                        ?>&amp;Itemid=<?php echo $r->id;
           }
                    ?>"  <?php if ($r->id == $id) {
                        ?> style="font-weight: bold;"<?php } ?>><?php echo $r->title; ?></a>
                       <?php
                       if (in_array($r->id, $parent)) {
                           $zap = "SELECT title,link,id,alias FROM #__menu WHERE menutype = 'mainmenu' AND
	   parent_id = " . $r->id . " AND published=1
	   ORDER BY parent_id,ordering";
                           $db->setQuery($zap);
                           $rr = null;
                           $rr = $db->loadObjectList();
                           if ($rr != null) {
                               echo '<ul>';
                               foreach ($rr as $rrr) {
                                   ?>
                                                <!--<li><a href="<?php echo $r->palias; ?>/<?php echo $r->alias; ?>/<?php echo $rrr->alias; ?>.html"  <?php if ($rrr->id == $id) { ?> style="font-weight: bold;"<?php } ?>><?php echo $rrr->title; ?></a></li>-->

                            <li><a href="<?php echo $rrr->link;
                    if ($rrr->link == 'index.php' || $rrr->link == 'http://www.streif.pl/')
                        echo '?';
                    ?>&amp;Itemid=<?php echo $rrr->id; ?>"  <?php if ($rrr->id == $id) { ?> style="font-weight: bold;"<?php } ?>><?php echo $rrr->title; ?></a></li>
                            <?php
                        } echo '</ul>';
                    }
                }
                ?>

                </li>

    <?php } ?>

        </ul>
<?php } ?>
