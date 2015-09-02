<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_workteam
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * WorkTeam Model
 *
 * @since  0.0.1
 */
class WorkTeamModelWorkTeam extends JModelList
{
	/**
	 * Method to build an SQL query to load the list data.
	 *
	 * @return      string  An SQL query
	 */
	protected function getListQuery()
	{
		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);

		// Create the base select statement.
		$query->select('a.*, c.title')
                ->from($db->quoteName('#__workteam').'AS a');
					 //->join('LEFT', '#__categories AS c ON c.id = a.catid');

		$query->where('a.published = 1');
      // $query->order('c.title asc');

		return $query;
	}
}