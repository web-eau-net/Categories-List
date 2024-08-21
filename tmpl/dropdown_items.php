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

	$categories = JCategories::getInstance('Content');
	$category = $categories->get($params->get('parent', 'root'));
	
?>
<option value="<?php echo JRoute::_(ContentHelperRoute::getCategoryRoute($category->id)); ?>"><?php echo ucfirst($category->title);?></option>
<?php
	foreach ($list as $item) :
	
?>
<option <?php if ($_SERVER['PHP_SELF'] == JRoute::_(ContentHelperRoute::getCategoryRoute($item->id))) echo ' selected';?> value="<?php echo JRoute::_(ContentHelperRoute::getCategoryRoute($item->id)); ?>"> <?php $levelup=$item->level-$startLevel -1; ?>
	<h<?php echo $params->get('item_heading')+ $levelup; ?>>
		
		<?php echo ucfirst($item->title);?>
	</h<?php echo $params->get('item_heading')+ $levelup; ?>>

</option>
<?php endforeach; ?>
