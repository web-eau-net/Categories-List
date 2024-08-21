<?php
	/**
		* @package Categories list Module
		* @version 1.1.0 - May 2020
		* @author web-eau.net
		* @website www.web-eau.net
		* @copyright (C) 2016-2019- web-eau.net
		* @license GNU/GPL http://www.gnu.org/licenses/gpl-2.0.html
	*/
	
	
	// no direct access
	defined('_JEXEC') or die;

	/*// Include the helper functions only once
	require_once dirname(__FILE__).'/helper.php';
	
	$list = modCategoriesListHelper::getList($params);
	if (!empty($list)) {
		$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
		$startLevel = reset($list)->getParent()->level;
		require JModuleHelper::getLayoutPath('mod_categories_list', $params->get('layout', 'default'));
	}*/


use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Module\CategoriesList\Site\Helper\CategoriesListHelper;

$list       = CategoriesListHelper::getList($params);

if (!empty($list)) {
require ModuleHelper::getLayoutPath('mod_categories_list', $params->get('layout', 'default'));
}


