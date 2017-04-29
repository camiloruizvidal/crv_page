<?php
class ModHelloWorldHelper
{
	public function getNotice($CantNotices)
	{
				$ds=DIRECTORY_SEPARATOR;
		$html= '<ul class="rpwe-ul">';
		$con = new JConfig();
		$dbprefix = $con->dbprefix;
		$db = &JFactory::getDBO();
		$sql = "SELECT 
			  concat(`l5nty_categories`.`id`, '-', `l5nty_categories`.`alias`) AS `url_cat`,
			  concat(`l5nty_content`.`id`, '-', `l5nty_content`.`alias`) AS `url_art`,
			  concat(`l5nty_categories`.`id`, '-', `l5nty_categories`.`alias`, '/', `l5nty_content`.`id`, '-', `l5nty_content`.`alias`) AS `url`,
			  `l5nty_content`.`id`,
			  `l5nty_content`.`title`,
			  `l5nty_content`.`alias`,
			  concat(SUBSTRING(`l5nty_content`.`introtext`,1,80),'...' ) AS `introtext`,
			  `l5nty_content`.`images`
			FROM
			  `l5nty_content`
			  INNER JOIN `l5nty_categories` ON (`l5nty_content`.`catid` = `l5nty_categories`.`id`)
		WHERE
		`l5nty_content`.`state` = 1 AND `l5nty_content`.`catid` = 10
		ORDER BY
		`l5nty_content`.`created` DESC
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
					<h3 class="rpwe-title">
						<a href="' . $temp->url . ' " rel="bookmark">
							' . $temp->title . ' 
						</a>
					</h3>
					<a class="rpwe-img" href="' . $temp->url . '" title="' . $temp->title . '" rel="bookmark">
						<img class="rpwe-alignleft rpwe-thumb" alt="'.$temp->title.'" srcset="'.$url.'">
						' . $temp->introtext . '
					</a>
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
		$sql = "SELECT 
			  concat(`l5nty_categories`.`id`, '-', `l5nty_categories`.`alias`) AS `url_cat`,
			  concat(`l5nty_content`.`id`, '-', `l5nty_content`.`alias`) AS `url_art`,
			  concat(`l5nty_categories`.`id`, '-', `l5nty_categories`.`alias`, '/', `l5nty_content`.`id`, '-', `l5nty_content`.`alias`) AS `url`,
			  `l5nty_content`.`id`,
			  `l5nty_content`.`title`,
			  `l5nty_content`.`alias`,
			  concat(SUBSTRING(`l5nty_content`.`introtext`,1,80),'...' ) AS `introtext`,
			  `l5nty_content`.`images`
			FROM
			  `l5nty_content`
			  INNER JOIN `l5nty_categories` ON (`l5nty_content`.`catid` = `l5nty_categories`.`id`)
		WHERE
		`l5nty_content`.`state` = 1 AND `l5nty_content`.`catid` = 11
		ORDER BY
		`l5nty_content`.`created` DESC
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
						<a href="' . $temp->url . '" title="' . $temp->title . '">
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