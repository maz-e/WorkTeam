<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>

<h1 class="teal-text"><?php echo JText::_('COM_WORKTEAM_WORKTEAM_VIEW'); ?></h1>

<?php if (empty($this->items)) : ?>
	<div class="card-panel alert-success animated bounceIn">
		<div class="valign-wrapper">
			<i class="large material-icons">info_outline</i>&nbsp;<?php echo JText::_('JGLOBAL_NO_MATCHING_RESULTS');?>
		</div>
	</div>
<?php else : ?>
   <?php foreach ($this->items as $row) : ?>
   	<div class="row">
   	   <div class="col s6">
   	      <p><?php echo $row->name; ?></p>
   	   </div>
   	</div>
   <?php endforeach ?>
<?php endif ?>
