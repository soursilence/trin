<?php
/*
* File: helper.php
*/

defined('_JEXEC') or die ('Brak dostępu');

class modLewemenuHelper
{
	public $_parent;
	public static $parents = array();
	
	function getParent(){
	global $parents;
	  return $parents;
	}
	function getSomething($params)
	{
	  $db =& JFactory::getDBO();
	  $r = null;
	  global $parents; global $_parent;
	  $_parent = (int)$_GET['Itemid'];
	  $parents[] = (int)$_GET['Itemid'];
	  $start = true;
	  
	  while($start){
	  $zap = "SELECT parent_id FROM #__menu WHERE menutype = 'mainmenu' AND published=1 and id = ".$_parent."";
	    $db->setQuery($zap);
	    $parent_new = $db->loadResult();
	    if($parent_new ==1){
	      $start = false;
	    }
	    else{ $_parent = $parent_new; $parents[] = $parent_new;}
	  }
	  
	  $query = "SELECT title,link,id,parent_id,alias FROM #__menu WHERE menutype = 'mainmenu' AND 
	   parent_id = ".$_parent." AND published=1
	   ORDER BY parent_id,ordering";
	  $db->setQuery($query);
	  $r = $db->loadObjectList();
	 // echo $_parent;
	  return $r;
	}


	function getContentList($params,$secid)
	{
	  $db =& JFactory::getDBO();
	  $r = null;

	  $_parent = (int)$_GET['Itemid'];
	  $ile = (int)$params->get('ilepozycji');
	  
	  if($ile!=0) $iles = " LIMIT $ile";
	  $query = "SELECT title,id,alias,catid FROM #__content WHERE state = 1 AND catid in (select id from #__categories where parent_id= $secid) ORDER BY created desc $iles";
	  $db->setQuery($query);
	  $r = $db->loadObjectList();
	  
	  return $r;
	  
	}


}
?>