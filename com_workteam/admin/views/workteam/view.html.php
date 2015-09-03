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
 * WorkTeam View
 *
 * @since  0.0.1
 */
class WorkTeamViewWorkTeam extends JViewLegacy
{
	/**
	 * View form
	 *
	 * @var         form
	 */
	protected $form = null;

	/**
	 * Display the Work Team view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	public function display($tpl = null)
	{
		// Get the Data
		$this->form = $this->get('Form');
		$this->item = $this->get('Item');
		$this->script = $this->get('Script');

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));

			return false;
		}

		// Set the toolbar
		$this->addToolBar();

		// Display the template
		parent::display($tpl);

		// Set the document
		$this->setDocument();
	}

	/**
	 * Add the page title and toolbar.
	 *
	 * @return  void
	 *
	 * @since   1.6
	 */
	protected function addToolBar()
	{
		$input = JFactory::getApplication()->input;

		// Hide Joomla Administrator Main menu
		$input->set('hidemainmenu', true);

		$isNew = ($this->item->id == 0);

		if ($isNew)
		{
			JToolBarHelper::title(JText::_('COM_WORKTEAM_MANAGER_WORKTEAM_NEW'));
		}
		else
		{
			JToolBarHelper::title(JText::_('COM_WORKTEAM_MANAGER_WORKTEAM_EDIT'));
		}

		// JToolBarHelper::title($title, 'workteam');
		JToolBarHelper::apply('workteam.apply');
		JToolBarHelper::save('workteam.save');
		JToolBarHelper::save2new('workteam.save2new');
		JToolBarHelper::cancel(
			'workteam.cancel',
			$isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE'
		);
	}

	/**
	 * Method to set up the document properties
	 *
	 * @return void
	 */
	protected function setDocument()
	{
		$isNew = ($this->item->id < 1);
		$document = JFactory::getDocument();
		$document->setTitle($isNew ? JText::_('COM_WORKTEAM_WORKTEAM_CREATING') :
                JText::_('COM_WORKTEAM_WORKTEAM_EDITING'));
					 $document->addScript(JURI::root() . $this->script);
		$document->addScript(JURI::root() . "/administrator/components/com_workteam"
		                                  . "/views/workteam/submitbutton.js");
		JText::script('COM_WORKTEAM_WORKTEAM_ERROR_UNACCEPTABLE');
	}
}
