<?php
	/**
		* @package Categories list Module
		* @version 1.0.0 - May 2019
		* @author web-eau.net
		* @website www.web-eau.net
		* @copyright (C) 2016-2019- web-eau.net
		* @license GNU/GPL http://www.gnu.org/licenses/gpl-2.0.html
	*/
	
	// no direct access
	defined('_JEXEC') or die;
	use Joomla\CMS\Helper\ModuleHelper;
?>
<ul class="categories-list<?php echo $moduleclass_sfx; ?>">
	<?php
		require JModuleHelper::getLayoutPath('mod_categories_list', $params->get('layout', 'default').'_items');
	?></ul>
		