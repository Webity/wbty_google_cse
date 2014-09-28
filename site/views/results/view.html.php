<?php
/**
 * @version     1.0.0
 * @package     com_wbty_google_cse
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Webity <david@makethewebwork.com> - http://www.makethewebwork.com
 */

// No direct access
defined('_JEXEC') or die;

/**
 * View for the control panel
 */
class Wbty_google_cseViewResults extends JViewLegacy
{
	protected $state;
	protected $item;
	protected $form;

	/**
	 * Display the view
	 */
	public function display($tpl = null)
	{
		$this->state	= $this->get('State');

		parent::display($tpl);
	}
}
