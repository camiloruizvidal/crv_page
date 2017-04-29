<?php
/**
 * Helper class for Hello World! module
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class ModHelloWorldHelper
{
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */ 
	public function getNotice($CantNotices)
	{
				$ds=DIRECTORY_SEPARATOR;
		$html= '<ul class="rpwe-ul">';
		$con = new JConfig();
		$dbprefix = $con->dbprefix;
		$db = &JFactory::getDBO();
		$sql = "select 
		id, title, alias,introtext, images, state 
		from #__content
		WHERE
		state = 1
		AND
		catid = 10
		ORDER BY
		created DESC
		LIMIT {$CantNotices}";
		$db->setQuery($sql);
		$categorias = $db->loadObjectList();
		$data=$db->loadObjectList();
		foreach($data as $key=>$temp)
		{
			$url=json_decode($temp->images)->image_intro;
			if($url==='')
			{
				$url="templates{$ds}crvtemplate{$ds}img{$ds}logoRetina.png";
			}
			$html.='
				<li class="rpwe-li rpwe-clearfix">
											<a class="rpwe-img" href="' . $temp->alias . '" title="' . $temp->title . ' rel="bookmark">
												<img class="rpwe-alignleft rpwe-thumb" alt="'.$temp->title.'" srcset="'.$url.'">
											</a>
											<h3 class="rpwe-title">
												<a href="' . $temp->title . ' " rel="bookmark">
													' . $temp->title . ' 
												</a>
											</h3>
										</li>
						
							<img width="180" height="180" src="' . $url . '" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="' . $temp->alias . '" srcset="' . $url . '" sizes="(max-width: 180px) 100vw, 180px" />		
							' . $temp->title . '
							<span class="product-title">' . $temp->introtext . '</span>
					 </li>';
		}
		$html.='</ul>';
		return $html;
	}
    public static function getServices($CantServices)
	{
		$ds=DIRECTORY_SEPARATOR;
		$html= '<ul class="product_list_widget">';
		$con = new JConfig();
		$dbprefix = $con->dbprefix;
		$db = &JFactory::getDBO();
		$sql = "select 
		id, title, alias,introtext, images, state 
		from #__content
		WHERE
		state = 1
		AND
		catid = 11
		ORDER BY
		created DESC
		LIMIT {$CantServices}";
		$db->setQuery($sql);
		$categorias = $db->loadObjectList();
		$data=$db->loadObjectList();
		foreach($data as $key=>$temp)
		{
			$url=json_decode($temp->images)->image_intro;
			if($url==='')
			{
				$url="templates{$ds}crvtemplate{$ds}img{$ds}logoRetina.png";
			}
			$html.='<li>
						<a href="' . $temp->alias . '" title="' . $temp->title . '">
							<img width="180" height="180" src="' . $url . '" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="' . $temp->alias . '" srcset="' . $url . '" sizes="(max-width: 180px) 100vw, 180px" />		
							' . $temp->title . '
							<span class="product-title">' . $temp->introtext . '</span>
						</a>
					 </li>';
		}
		$html.='</ul>';
		return $html;
	}
}