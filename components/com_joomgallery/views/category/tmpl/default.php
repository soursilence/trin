<?php defined('_JEXEC') or die('Direct Access to this location is not allowed.');
if ($this->_config->get('jg_showcatdescriptionincat') == 1):
    ?>
    <div class="jg_catdescr" style="text-align: left;">
        <?php echo JHTML::_('joomgallery.text', $this->category->description); ?>
    </div>
    <?php
endif;
echo '<link rel="stylesheet" href="media/joomgallery/css/joom_settings.css">'; 
echo '<link rel="stylesheet" href="media/joomgallery/css/joomgallery.css">'; 

echo $this->loadTemplate('header');

if(count($this->categories)):
  echo $this->loadTemplate('subcategories');
endif;

if(count($this->images)):
  echo $this->loadTemplate('head');
  echo $this->loadTemplate('images');
endif;

echo $this->loadTemplate('footer');