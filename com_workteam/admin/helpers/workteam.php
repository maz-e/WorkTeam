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

/**
 * WorkTeam component helper.
 *
 * @param   string  $submenu  The name of the active view.
 *
 * @return  void
 *
 * @since   1.6
 */
abstract class WorkTeamHelper
{
	/**
	 * Configure the Linkbar.
	 *
	 * @return Bool
	 */

	public static function addSubmenu($submenu)
	{
      JHtmlSidebar::addEntry(
			JText::_('COM_WORKTEAM_SUBMENU_TITLE_CONTACT_NAME'),
			'index.php?option=com_workteam',
			$submenu == 'teams'
		);

		JHtmlSidebar::addEntry(
			JText::_('COM_WORKTEAM_SUBMENU_CATEGORIES'),
			'index.php?option=com_categories&view=categories&extension=com_workteam',
			$submenu == 'categories'
		);
	}
}
