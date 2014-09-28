<?php
/**
 * @version     1.0.0
 * @package     com_wbty_google_cse
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Webity <david@makethewebwork.com> - http://www.makethewebwork.com
 */

// no direct access
defined('_JEXEC') or die;

JHtml::_('behavior.tooltip');

?>

<div class="cpanel">
	<h2>Introduction</h2>
    <p>Welcome to WBTY Google Custom Search! We hope to get Google Custom Search working on your site quickly, but there are a few steps!</p>
    <p>First! Be sure to go to <a href="http://www.google.com/cse/all" target="_blank">http://www.google.com/cse/all</a> and create a new search engine. Creating it should be quick and simple, though if you edit it, there are lots of options.</p>
    <h3>Get the Code!</h3>
    <p>When you see the code pop up on Google's site, look for the line that starts with `var cx=`. Get the value out of the quotes on that line and be sure to enter that in the options in the upper right hand corner. There are some other fun options up there that you can set!</p>
    <h3>Finally...</h3>
    <p>Got to the module manager and add the module where you would like the custom search to display.</p>
    <p>Also be sure to create a menu item for the search box that will be where the results are displayed (otherwise you will get a lame URL).</p>
</div>