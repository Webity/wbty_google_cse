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

jimport('joomla.application.component.helper');

$cx = JComponentHelper::getParams('com_wbty_google_cse')->get('cx', 0);
?>

<?php if (!$cx) : ?>

<p>Custom Search requires configuration.</p>

<?php else : ?>

<!-- Put the following javascript before the closing  tag. -->
<script>
(function() {
  var cx = '<?php echo $cx; ?>'; // Insert your own Custom Search engine ID here
  var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
  gcse.src = (document.location.protocol == 'https' ? 'https:' : 'http:') +
      '//www.google.com/cse/cse.js?cx=' + cx;
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
})();
</script>

<!-- Place this tag where you want both of the search box and the search results to render -->
<gcse:search refinementStyle="link" queryParameterName="gcse_search" enableHistory="true" autoCompleteMaxCompletions="5" autoCompleteMatchType='any'>

<?php endif; ?>