<?php
/*
* File: mod_lewemenu.php
*/

defined('_JEXEC') or die ('Brak dostępu');

require_once( dirname(__FILE__).'/helper.php');
$aktu = modLewemenuHelper::getContentList($params,33);
$projekty = modLewemenuHelper::getContentList($params,32);

$res = modLewemenuHelper::getSomething($params);
$parent = modLewemenuHelper::getParent();
require_once( JModuleHelper::getLayoutPath('mod_lewemenu'));

?>