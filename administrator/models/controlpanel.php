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

jimport('legacy.model.legacy');

// check for Joomla 2.5
if (!class_exists('JViewLegacy')) {
	jimport('joomla.application.component.model');
	class JModelLegacy extends JModel {}
}

/**
 * Wbty_google_cse model.
 */
class Wbty_google_cseModelControlpanel extends JModelLegacy
{
	/**
	 * @var		string	The prefix to use with controller messages.
	 * @since	1.6
	 */
	protected $text_prefix = 'com_wbty_google_cse';
	

}