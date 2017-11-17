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
defined('_JEXEC') or die('Restricted access');
/*
  $document =& JFactory::getDocument();
  $mainframe = JFactory::getApplication();
  if($document->title!=$mainframe->getCfg('sitename'))
  $document->setTitle($document->title. " - " . $mainframe->getCfg('sitename'));
  else $document->setTitle('Usługi dźwigowe - dźwigi - żurawie wieżowe - TRINAC Polska'); */
?>
<!doctype html>
<html lang="pl">
    <head>
        <title><?php //$document->title;
echo 'Usługi dźwigowe – dźwigi – żurawie wieżowe - TRINAC Polska';
?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="templates/trinac/css/style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="templates/trinac/js/all.js"></script>  

    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <h2><a href="/"><img style="width:154px; height:72px; " src="templates/trinac/img/Trinac_Polska_072dpi.jpg" alt="Trinac POLSKA"></a></h2>
                </div>
                <div class="col-md-4 hidden-xs">
                    <ul class="nav navbar-nav navbar-right topmenu">
                        <li><a href="/kontakt">Kontakt</a></li>

                        <li><a href="?option=com_xmap">Mapa Strony</a></li>

                    </ul>
                </div>
            </div>
            <div class="row navbar navbar-default">

                <div class="col-md-9 ">
                    <jdoc:include type="modules" name="menu" style="rounded" />
                </div>
                <div class="col-md-3">
                    <div class="input-group search-input-group">
                        <div class="search_form">
                            <form action="" method="get"  id="form1">
                                <span id="search">
                                    <input name="searchword" id="searchfield" type="text" class="form-control" size="10" accesskey="s" tabindex="1" value=""  placeholder="Szukaj" />
                                    <input type="hidden" name="ordering" value="newest" /><input type="hidden" name="searchphrase" value="any" /><input type="hidden" name="option" value="com_search" />
                                </span>
                                <!--            <button type="button" class="btn btn-default">
                                          <span class="glyphicon glyphicon-search"></span> Szukaj
                                        </button>-->
                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                            </form>
                        </div>    </div>

                </div>
            </div>

        </div>



        <div class="container">
            <div id="main" class="row show-grid">

                <div id="container">
                    <?php if ($this->countModules('mainpage')) { ?>

                        <jdoc:include type="modules" name="mainpage" style="rounded" />

                    <?php
                    } else {

                        //$bannery = array('n_01.jpg','n_02.jpg','n_03.jpg','n_04.jpg','n_05.jpg','n_06.jpg','n_08.jpg','n_09.jpg','n_10.jpg','n_11.jpg','n_12.jpg','n_13.jpg','n_14.jpg','n_15.jpg','n_16.jpg','n_17.jpg','n_18.jpg','n_19.jpg','n_20.jpg');


                        $nr = rand(1, 20);
                        $ban = "m_" . str_pad($nr, 2, "0", STR_PAD_LEFT) . ".jpg";

                        $ban = '/templates/trinac/trinac_bannery/' . $ban;
                        ?>

                        <div id="bb">
                            <img style="width: 100%" src="<?php echo $this->baseurl ?><?php echo $ban; ?>" alt="Trinac" />
                        </div>
                        <div class="row">   
                            <div class="col-sm-2">   
                                <jdoc:include type="modules" name="left" style="rounded" /></div>
                            <div class="col-sm-10 main-container">
                                <jdoc:include type="component" />
                            </div>
                        </div>
<?php } ?>

                </div>
            </div>





        </div>
        <div id="stopka" class="container">
            <p style="font-size: small; color: #000; text-align:right;">
            <jdoc:include type="modules" name="footer" style="rounded" />
            <a href="http://www.trinac.de">TRINAC GmbH </a></p>Copyright &copy; <?php echo date("Y"); ?>  TRINAC Polska </div>


    <!-- start AlienSTATS code -->

    <script language="javascript">

    <!--

        var alienPath = 'http://stats.trinac.pl';

        var alienPageDescr = '<?php echo urldecode(substr($_SERVER['REQUEST_URI'], 1)); ?>';

    //alienPageDescr='trinac';



        document.write('<scr' + 'ipt language="JavaScript" src="' + alienPath + '/astat.js?alienPageDescr=' + alienPageDescr + '"><\/scr' + 'ipt>');

    //-->

    </script>

    <!-- end AlienSTATS code -->
    <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-29169438-1']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })()    ;

</script    >

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>

</html>