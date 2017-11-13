<?php
/*
* File: helper.php
*/

defined('_JEXEC') or die ('Brak dostępu');

class modMainpageHelper
{
	public static function getSomething($params,$id)
	{
	  $db =& JFactory::getDBO();
	  $r = null;
	  $ile = 2;
	  $kat = 64;
	  
	  $query = "SELECT title,id,introtext,catid FROM #__content WHERE id=$id ORDER BY created DESC LIMIT ".$ile;
	  $db->setQuery($query);
	  $r = $db->loadObjectList();
	  return $r;
	}
	public static function getSomethingElse($params)
	{//Nasze Projekty
	  $db =& JFactory::getDBO();
	  $r = null;
	  $ile = 2;
	  $cat = 52;
	  $parent_cat = null;//32;
	  $where = ($parent_cat==null)?$cat:"select id from #__categories where parent_id= $parent_cat";
	  
	  $query = "SELECT title,id,introtext,catid,alias FROM #__content WHERE catid in ($where) ORDER BY created DESC LIMIT ".$ile;
	  $db->setQuery($query);
	  $r = $db->loadObjectList();
	  return $r;
	}
}
?>