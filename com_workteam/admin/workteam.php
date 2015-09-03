<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_workteam
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Require helper file
JLoader::register('WorkTeamHelper', JPATH_COMPONENT . '/helpers/workteam.php');

// Get an instance of the controller prefixed by WorkTeam
$controller = JControllerLegacy::getInstance('WorkTeam');

/// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
