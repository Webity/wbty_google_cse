 <?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_footer
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.helper');

$cx = JComponentHelper::getParams('com_wbty_google_cse')->get('cx', 0);

$document = JFactory::getDocument();
$document->addStyleSheet(JURI::root(true) . "/media/wbty_google_cse/css/wbty_google_cse.css");
?>

<?php if (!$cx) : ?>

<p>Custom Search requires configuration.</p>

<?php else : ?>

<!-- Put the following javascript before the closing  tag. -->
<script>
(function() {
  var cx = '<?php echo $cx; ?>'; // Insert your own Custom Search engine ID here
  var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
  gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
      '//www.google.com/cse/cse.js?cx=' + cx;
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
})();
</script>

<!-- Place this tag where you want both of the search box and the search results to render -->
<gcse:searchbox-only resultsUrl="<?php echo JRoute::_('index.php?option=com_wbty_google_cse&view=results'); ?>" newWindow="false" queryParameterName="gcse_search" enableHistory="true" autoCompleteMaxCompletions="5" autoCompleteMatchType='any'>

<?php endif; ?>