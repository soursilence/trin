<?php
/*
* File: mod_mainpage.php
*/

defined('_JEXEC') or die ('Brak dostępu');

require_once( dirname(__FILE__).DS.'helper.php');

$res = modMainpageHelper::getSomething($params,64);
$res2 = modMainpageHelper::getSomethingElse($params);
$oferta = modMainpageHelper::getSomething($params,131);
require_once( JModuleHelper::getLayoutPath('mod_mainpage'));

?>