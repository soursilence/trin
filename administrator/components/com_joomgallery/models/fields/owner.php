<?php
// $HeadURL: https://joomgallery.org/svn/joomgallery/JG-2.0/JG/trunk/administrator/components/com_joomgallery/models/fields/owner.php $
// $Id: owner.php 4013 2012-12-09 19:08:00Z chraneco $
/****************************************************************************************\
**   JoomGallery 2                                                                      **
**   By: JoomGallery::ProjectTeam                                                       **
**   Copyright (C) 2008 - 2012  JoomGallery::ProjectTeam                                **
**   Based on: JoomGallery 1.0.0 by JoomGallery::ProjectTeam                            **
**   Released under GNU GPL Public License                                              **
**   License: http://www.gnu.org/copyleft/gpl.html or have a look                       **
**   at administrator/components/com_joomgallery/LICENSE.TXT                            **
\****************************************************************************************/

defined('_JEXEC') or die( 'Restricted access' );

/**
 * Renders an owner select box form field
 *
 * @package JoomGallery
 * @since   2.0
 */
class JFormFieldOwner extends JFormField
{
  /**
   * The form field type.
   *
   * @var     string
   * @since   2.0
   */
  protected $type = 'Owner';

  /**
   * Returns the HTML for an owner select box form field.
   *
   * @return  object    The owner select box form field.
   * @since   2.0
   */
  protected function getInput()
  {
    return JHTML::_('joomselect.users', $this->name, $this->value, true, array(), null, 0, $this->id);
  }
}