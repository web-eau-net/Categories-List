<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_categories
 *
 * @copyright   (C) 2010 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Module\CategoriesList\Site\Helper;

\defined('_JEXEC') or die;

use Joomla\CMS\Categories\Categories;

//require_once JPATH_SITE.'/components/com_content/helpers/route.php';
/**
 * Helper for mod_articles_categories
 *
 * @since  1.5
 */
class CategoriesListHelper
	{
		public static function getList(&$params)
		{
			
			$categories = Categories::getInstance('Content');
			$category = $categories->get($params->get('parent', 'root'));
			
			if ($category != null)
			{
				$items = $category->getChildren();
				/*if($params->get('count', 0) > 0 && count($items) > $params->get('count', 0))
				{
					$items = array_slice($items, 0, $params->get('count', 0));
				}*/
            $count = $params->get('count', 0);

			if ($count > 0 && \count($items) > $count)
			{
				$items = \array_slice($items, 0, $count);
			}



				return $items;
			}
		}
		
	}


