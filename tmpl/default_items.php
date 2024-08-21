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
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Router\Route;
use Joomla\Component\Content\Site\Helper\RouteHelper;

foreach ($list as $item) :

?>
	<li <?php if ($_SERVER['PHP_SELF'] == JRoute::_(ContentHelperRoute::getCategoryRoute($item->id))) echo ' class="active"';?>> <?php $levelup=$item->level-$startLevel -1; ?>
  <h<?php echo $params->get('item_heading')+ $levelup; ?>>
		<a href="<?php echo JRoute::_(ContentHelperRoute::getCategoryRoute($item->id)); ?>">
		<?php echo $item->title;?></a>
   </h<?php echo $params->get('item_heading')+ $levelup; ?>>

		<?php
		if($params->get('show_description', 0))
		{
			echo JHtml::_('content.prepare', $item->description, $item->getParams(), 'mod_categories_list.content');
		}
		if($params->get('show_children', 0) && (($params->get('maxlevel', 0) == 0) || ($params->get('maxlevel') >= ($item->level - $startLevel))) && count($item->getChildren()))
		{

			echo '<ul>';
			$temp = $list;
			$list = $item->getChildren();
			require JModuleHelper::getLayoutPath('mod_categories_list', $params->get('layout', 'default').'_items');
			$list = $temp;
			echo '</ul>';
		}
		?>
 </li>
<?php endforeach; ?>
