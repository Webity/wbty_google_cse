<?php
/**
 * @version     1.0.0
 * @package     com_wbty_google_cse
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Webity <david@makethewebwork.com> - http://www.makethewebwork.com
 */

// No direct access.
defined('_JEXEC') or die;

/**
 * Wbty_google_cse model.
 */
class Wbty_google_cseModelResults extends JModelLegacy
{
	/**
	 * @var		string	The prefix to use with controller messages.
	 * @since	1.6
	 */
	protected $text_prefix = 'com_wbty_google_cse';
	
	public function getForms($forms = array()) {
		foreach ($forms as $form) {
			JForm::addFieldPath(JPATH_COMPONENT . '/models/fields');
			if (JFolder::exists(JPATH_BASE . '/libraries/wbty_components/models/fields')) {
				JForm::addFieldPath(JPATH_BASE . '/libraries/wbty_components/models/fields');
			}
			JForm::addFormPath(JPATH_COMPONENT . '/models/forms');
			
			$this->forms[$form] = JForm::getInstance($form, $form, array('control'=>substr($form, 0, -7)));
		}
		return $this->forms;
	}
}