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

JFormHelper::loadFieldClass('list');

/**
 * WorkTeam Form Field class for the WorkTeam component
 *
 * @since  0.0.1
 */
class JFormFieldWorkTeam extends JFormFieldList
{
	/**
	 * The field type.
	 *
	 * @var         string
	 */
	protected $type = 'WorkTeam';

	/**
	 * Method to get a list of options for a list input.
	 *
	 * @return  array  An array of JHtml options.
	 */
	protected function getOptions()
	{
		$db    = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id, title');
		$query->from('#__categories');
      $query->where('extension = "com_workteam"');
		$db->setQuery((string) $query);
		$categories = $db->loadObjectList();
		$options  = array();

		if ($categories)
		{
			foreach ($categories as $category)
			{
				$options[] = JHtml::_('select.option', $category->id, $category->title);
			}
		}

		$options = array_merge(parent::getOptions(), $options);

		return $options;
	}
}
