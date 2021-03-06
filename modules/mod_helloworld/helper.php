<?php
class ModHelloWorldHelper
{
	public function getClients($CantClient)
	{
		$ds=DIRECTORY_SEPARATOR;
		$con = new JConfig();
		$dbprefix = $con->dbprefix;
		$db = &JFactory::getDBO();
		$sql = "SELECT 
			  concat(`#__categories`.`id`, '-', `#__categories`.`alias`) AS `url_cat`,
			  concat(`#__content`.`id`, '-', `#__content`.`alias`) AS `url_art`,
			  concat(`#__categories`.`id`,'-',`#__categories`.`alias`, '/', `#__content`.`id`,'-',`#__content`.`alias`) AS `url`,
			  `#__content`.`id`,
			  `#__content`.`title`,
			  `#__content`.`alias`,
			  concat(SUBSTRING(`#__content`.`introtext`,1,80),'...' ) AS `introtext`,
			  `#__content`.`images`
			FROM
			  `#__content`
			  INNER JOIN `#__categories` ON (`#__content`.`catid` = `#__categories`.`id`)
		WHERE
		`#__content`.`state` = 1 AND `#__content`.`catid` = 12
		ORDER BY
		rand(),
		`#__content`.`title` ASC
		LIMIT {$CantClient}";
		$db->setQuery($sql);
		$categorias = $db->loadObjectList();
		$data=$db->loadObjectList();
		$html= '<a href="./2-Uncategorised/22-clientes"><h3 class="widget-title">Ellos confian en nosotros</h3></a>
				<hr class="footer-inline-hr" />
				<ul class="rpwe-ul">';
		foreach($data as $key=>$temp)
		{
			$url=json_decode($temp->images)->image_intro;
			$html.='
				<li>
					<a href="' . $temp->url . '" title="' . $temp->title . '" rel="bookmark">
						<img alt="'.$temp->title.'" srcset="'.$url.'">
						' . $temp->title . '
					</a>
				</li>
				<hr class="footer-inline-hr" />';
		}
		$html.='</ul>';
		return $html;
	}
	public function getNotice($CantNotices)
	{
		$ds=DIRECTORY_SEPARATOR;
		$html= '<ul class="rpwe-ul">';
		$con = new JConfig();
		$dbprefix = $con->dbprefix;
		$db = &JFactory::getDBO();
		$sql = "SELECT 
			  concat(`#__categories`.`id`, '-', `#__categories`.`alias`) AS `url_cat`,
			  concat(`#__content`.`id`, '-', `#__content`.`alias`) AS `url_art`,
			  concat(`#__categories`.`id`,'-',`#__categories`.`alias`, '/', `#__content`.`id`,'-',`#__content`.`alias`) AS `url`,
			  `#__content`.`id`,
			  `#__content`.`title`,
			  `#__content`.`alias`,
			  concat(SUBSTRING(`#__content`.`introtext`,1,80),'...' ) AS `introtext`,
			  `#__content`.`images`
			FROM
			  `#__content`
			  INNER JOIN `#__categories` ON (`#__content`.`catid` = `#__categories`.`id`)
		WHERE
		`#__content`.`state` = 1 AND `#__content`.`catid` = 10
		ORDER BY
		`#__content`.`created` DESC
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
						' . strip_tags($temp->introtext) . '
					</a>
				</li>';
		}
		$html.='</ul>';
		return $html;
	}
	public static function getEnlaces()
	{
		$sql="SELECT 
		concat(`#__categories`.`id`,'-',`#__categories`.`alias`, '/', `#__content`.`id`,'-',`#__content`.`alias`) AS `url`,
		`#__content`.`title`
			FROM
			  `#__content`
			  INNER JOIN `#__categories` ON (`#__content`.`catid` = `#__categories`.`id`)
		WHERE
		`#__content`.`state` = 1 AND `#__content`.`catid` = 9
		ORDER BY
		`#__content`.`title` ASC";
		$html='<h3 class="widget-title">Enlaces </h3>
				<hr class="footer-inline-hr" />
				<div class="textwidget">';
						$con = new JConfig();
		$dbprefix = $con->dbprefix;
		$db = &JFactory::getDBO();
		$db->setQuery($sql);
		$categorias = $db->loadObjectList();
		$data=$db->loadObjectList();
		foreach($data as $key=>$temp)
		{
			$html.='<a href="'.$temp->url.'">'.$temp->title.'</a> <br />';
		}
		$html.='</div>';
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
			  concat(`#__categories`.`id`, '-', `#__categories`.`alias`) AS `url_cat`,
			  concat(`#__content`.`id`, '-', `#__content`.`alias`) AS `url_art`,
			  concat(`#__categories`.`id`,'-',`#__categories`.`alias`, '/', `#__content`.`id`,'-',`#__content`.`alias`) AS `url`,
			  `#__content`.`id`,
			  `#__content`.`title`,
			  `#__content`.`alias`,
			  concat(SUBSTRING(`#__content`.`introtext`,1,80),'...' ) AS `introtext`,
			  `#__content`.`images`
			FROM
			  `#__content`
			  INNER JOIN `#__categories` ON (`#__content`.`catid` = `#__categories`.`id`)
		WHERE
		`#__content`.`state` = 1 AND `#__content`.`catid` = 11
		ORDER BY
		`#__content`.`created` DESC
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
							<span class="product-title">' . strip_tags($temp->introtext) . '</span>
						</a>
					 </li>';
		}
		$html.='</ul>';
		return $html;
	}
	public function getServicesall()
	{
		$ds=DIRECTORY_SEPARATOR;
		$html= '';
		$con = new JConfig();
		$dbprefix = $con->dbprefix;
		$db = &JFactory::getDBO();
		$sql = "SELECT 
			  concat(`#__categories`.`id`, '-', `#__categories`.`alias`) AS `url_cat`,
			  concat(`#__content`.`id`, '-', `#__content`.`alias`) AS `url_art`,
			  concat(`#__categories`.`id`,'-',`#__categories`.`alias`, '/', `#__content`.`id`,'-',`#__content`.`alias`) AS `url`,
			  `#__content`.`id`,
			  `#__content`.`title`,
			  `#__content`.`alias`,
			  `#__content`.`introtext` AS `introtext`,
			  `#__content`.`images`
			FROM
			  `#__content`
			  INNER JOIN `#__categories` ON (`#__content`.`catid` = `#__categories`.`id`)
		WHERE
		`#__content`.`state` = 1 AND `#__content`.`catid` = 8
		ORDER BY
		`#__content`.`title` ASC";
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
<div class="large-4 columns">
	<div class="boxed-layout boxed-colors padding">
		<div class="rock-iconictext-container row rock-icon-top">
			<div class="large-12 columns rockicon-container-column padding">
				<div class="rockicon-container  rockicon-quasar-box" style="background: rgb(79, 88, 100); color: rgb(68, 68, 68); width: 80px; height: 80px; line-height: 36px;" icon-color="#444444" icon-hover-color="#ffffff" bg-color="#4f5864" bg-hover-color="#00aae8">
					<div class="quasar-style-dot"></div>
					<i class="fa-flask icon-3"></i>
				</div>
			</div>
			<div class="large-12 columns">
					<div class="rock-iconictext-header-title"><strong>' . $temp->title . '</strong></div>
					<br>
			</div>
			<div class="clear"></div>
			<div class="hr-shadow-mask" style="width:75%; margin:0px auto;">
					<hr class="hr-shadow active shadow-effect curve curve-hz-1">
			</div>
			<div class="large-12 columns">
					<div class="rock-iconictext-content">
						<p>' . substr(trim(strip_tags($temp->introtext)),0,200) . '...</p>
					</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<a href="' . $temp->url . '" style=" display:block;" class="escapea button button-primary button-small">
		<i class="fa-share-square-o "></i> 
		Ver mas detalles...
	</a>
	<div>
		<p style="text-align: center;"></p>
		<div class="rockthemes-divider">
			<span class="divider-line">
				<span class="divider-symbol"></span>
			</span>
		</div>
		<p></p>
	</div>
</div>';
		}
		return $html;
	}
}