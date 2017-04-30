<?php defined( '_JEXEC' ) or die; 
include_once JPATH_THEMES.'/'.$this->template.'/logic.php';
?><!doctype html>
<html lang="<?php echo $this->language; ?>">
	<head>
		<jdoc:include type="head" />
		<link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="canonical" href="index.php" />
		
		
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
		<meta name="description" content="Agencia Digital | Sitios Web - Desarrollo de Aplicaciones - Estrategia y Marketing Online - Apps - Hosting - Dominios"/>
		<meta property="og:locale" content="es_CO" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="CRV | Soluciones Software" />
		<meta property="og:description" content="Sitios Web - Desarrollo de Aplicaciones - Estrategia y Marketing Online - Apps - Hosting - Dominios" />
		<meta property="og:url" content="index.php" />
		<meta property="og:site_name" content="CRV" />
		<meta property="og:image" content="img/Desarrollo-de-Aplicaciones.jpg" />
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:description" content="Sitios Web - Desarrollo de Aplicaciones - Estrategia y Marketing Online - Apps - Hosting - Dominios" />
		<meta name="twitter:title" content="CRV | SOLUCIONES SOFTWARE" />
		<meta name="twitter:image" content="img/Desarrollo-de-Aplicaciones.jpg" />
		
		
		<link rel='stylesheet' id='validate-engine-css-css'  href='<?php echo $tpath; ?>/css/style.css' type='text/css' media='all' />
		<link rel='stylesheet' id='validate-engine-css-css'  href='<?php echo $tpath; ?>/css/wysija-newsletters/css/validationEngine.jquery206d.css?ver=2.7.5' type='text/css' media='all' />
		<link rel='stylesheet' id='fblb-css-css'  href='<?php echo $tpath; ?>/css/arscode-social-slider/fblb2654.css?ver=384287c8b5f96c1b1ac7e6cff2007dab' type='text/css' media='all' />
		<link rel='stylesheet' id='jquery-lionbars-css'  href='<?php echo $tpath; ?>/css/arscode-social-slider/lionbars/lionbars2654.css?ver=384287c8b5f96c1b1ac7e6cff2007dab' type='text/css' media='all' />
		<link rel='stylesheet' id='prettyphoto-css'  href='<?php echo $tpath; ?>/css/prettyphoto-media/css/prettyPhotoaeb9.css?ver=3.1.4' type='text/css' media='screen' />
		<link rel='stylesheet' id='subscriptio_frontend-css'  href='<?php echo $tpath; ?>/css/subscriptio/assets/css/frontend0ba6.css?ver=1.0.6' type='text/css' media='all' />
		<link rel='stylesheet' id='supreme-pricing-tables-plugin-styles-css'  href='<?php echo $tpath; ?>/css/supreme-pricing-tables/public/assets/css/public8a54.css?ver=1.0.0' type='text/css' media='all' />
		<link rel='stylesheet' id='woocommerce-layout-css'  href='<?php echo $tpath; ?>/css/woocommerce/assets/css/woocommerce-layouta19e.css?ver=2.6.9' type='text/css' media='all' />
		<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='<?php echo $tpath; ?>/css/woocommerce/assets/css/woocommerce-smallscreena19e.css?ver=2.6.9' type='text/css' media='only screen and (max-width: 768px)' />
		<link rel='stylesheet' id='woocommerce-general-css'  href='<?php echo $tpath; ?>/css/woocommerce/assets/css/woocommercea19e.css?ver=2.6.9' type='text/css' media='all' />
		<link rel='stylesheet' id='wp-core-css'  href='<?php echo $tpath; ?>/css/wp-core2654.css?ver=384287c8b5f96c1b1ac7e6cff2007dab' type='text/css' media='all' />
		<link rel='stylesheet' id='foundation-elements-css'  href='<?php echo $tpath; ?>/css/foundation-scss2654.css?ver=384287c8b5f96c1b1ac7e6cff2007dab' type='text/css' media='all' />
		<link rel='stylesheet' id='foundation-ie7-css'  href='<?php echo $tpath; ?>/css/foundation-ie82654.css?ver=384287c8b5f96c1b1ac7e6cff2007dab' type='text/css' media='all' />
		<link rel='stylesheet' id='icomoon-css-css'  href='<?php echo $tpath; ?>/css/icomoon2654.css?ver=384287c8b5f96c1b1ac7e6cff2007dab' type='text/css' media='all' />
		<link rel='stylesheet' id='font-awesome-css-css'  href='<?php echo $tpath; ?>/css/font-awesome.min2654.css?ver=384287c8b5f96c1b1ac7e6cff2007dab' type='text/css' media='all' />
		<link rel='stylesheet' id='quasar-buttons-css'  href='<?php echo $tpath; ?>/css/buttons2654.css?ver=384287c8b5f96c1b1ac7e6cff2007dab' type='text/css' media='all' />
		<link rel='stylesheet' id='quasar-style-css'  href='<?php echo $tpath; ?>/css/style2654.css?ver=384287c8b5f96c1b1ac7e6cff2007dab' type='text/css' media='all' />
		<link rel='stylesheet' id='quasar-menu-style-css'  href='<?php echo $tpath; ?>/css/menu-ltr2654.css?ver=384287c8b5f96c1b1ac7e6cff2007dab' type='text/css' media='all' />
		<link rel='stylesheet' id='quasar-media-queries-css'  href='<?php echo $tpath; ?>/css/media-queries2654.css?ver=384287c8b5f96c1b1ac7e6cff2007dab' type='text/css' media='all' />
		<link rel='stylesheet' id='animate-css-css'  href='<?php echo $tpath; ?>/css/animate2654.css?ver=384287c8b5f96c1b1ac7e6cff2007dab' type='text/css' media='all' />
		<link rel='stylesheet' id='tf-compiled-options-wdc-options-css'  href='<?php echo $tpath; ?>/css/titan-framework-wdc-options-css2654.css?ver=384287c8b5f96c1b1ac7e6cff2007dab' type='text/css' media='all' />
		<link rel='stylesheet' id='wdc-main-styles-css'  href='<?php echo $tpath; ?>/css/wp-domain-checker/assets/style2654.css?ver=384287c8b5f96c1b1ac7e6cff2007dab' type='text/css' media='all' />
		<link rel='stylesheet' id='wdc-styles-extras-css'  href='<?php echo $tpath; ?>/css/wp-domain-checker/assets/bootstrap-flat-extras2654.css?ver=384287c8b5f96c1b1ac7e6cff2007dab' type='text/css' media='all' />
		<link rel='stylesheet' id='wdc-styles-flat-css'  href='<?php echo $tpath; ?>/css/wp-domain-checker/assets/bootstrap-flat2654.css?ver=384287c8b5f96c1b1ac7e6cff2007dab' type='text/css' media='all' />
		
		<script src="<?php echo $tpath; ?>/js/function.js"></script>
		<script type="text/javascript" src="<?php echo $tpath; ?>/js/jquery/jquery.min.js"></script>
		<script src="<?php echo $tpath; ?>/js/toastr.min.js"></script>
		<script src="https://www.google.com/recaptcha/api.js"></script>
		
		
		
		<script src="<?php echo $tpath; ?>/js/site.js"></script>
		<script type='text/javascript' src='<?php echo $tpath; ?>/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
		<script type='text/javascript' src='<?php echo $tpath; ?>/css/arscode-social-slider/js/userscripts2654.js?ver=384287c8b5f96c1b1ac7e6cff2007dab'></script>
		<script type='text/javascript' src='<?php echo $tpath; ?>/css/arscode-social-slider/lionbars/jquery.lionbars.0.3.min2654.js?ver=384287c8b5f96c1b1ac7e6cff2007dab'></script>
		<script type='text/javascript' src='<?php echo $tpath; ?>/css/subscriptio/assets/js/frontend0ba6.js?ver=1.0.6'></script>
		<script type='text/javascript' src='<?php echo $tpath; ?>/css/supreme-pricing-tables/public/assets/js/public8a54.js?ver=1.0.0'></script>
		<script type='text/javascript' src='<?php echo $tpath; ?>/css/wp-retina-2x/js/picturefill.min5b75.js?ver=3.0.2'></script>
		<script type='text/javascript' src='<?php echo $tpath; ?>/css/js/modernizr2654.js?ver=384287c8b5f96c1b1ac7e6cff2007dab'></script>
		<script type='text/javascript' src='<?php echo $tpath; ?>/css/js/jquery-parallax-set.min2654.js?ver=384287c8b5f96c1b1ac7e6cff2007dab'></script>
		<script type='text/javascript' src='<?php echo $tpath; ?>/css/js/rockthemes-parallax.min2654.js?ver=384287c8b5f96c1b1ac7e6cff2007dab'></script>
		<script type='text/javascript' src='<?php echo $tpath; ?>/css/js/quasar.jquery.min2654.js?ver=384287c8b5f96c1b1ac7e6cff2007dab'></script>
		<script type='text/javascript' src='<?php echo $tpath; ?>/css/js/jquery.navgoco.min2654.js?ver=384287c8b5f96c1b1ac7e6cff2007dab'></script>
		<link rel='https://api.w.org/' href='wp-json/index.html' />
		<link rel='shortlink' href='index.php' />
		<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embedcd0c.json?url=http%3A%2F%2Fsolucionescrv.com%2F" />
		<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed1016?url=http%3A%2F%2Fsolucionescrv.com%2F&amp;format=xml" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300|PT+Sans+Narrow:400,700|Pacifico" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" type="image/x-icon" href="img/forma16x16.png" />
		<link href="<?php echo $tpath; ?>/css/toastr.min.css" rel="stylesheet" type="text/css" id="custom-background-css"/>
		<script type='text/javascript' src='<?php echo $tpath; ?>/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
		<link href="<?php echo $tpath; ?>/css/style2.css" rel="stylesheet" type="text/css" id="custom-background-css"/>
		<link rel="stylesheet" href="<?php echo $tpath; ?>/css/style2.css"/>
	</head>  
	<body class="home page page-id-131 page-template-default custom-background <?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>">
		<div id="fb-root"></div>
		  <div class="main-container">
			 <div class="special-cart-overlay-box boxed-layout" style="display:none;">
				<div class="rockthemes-woocommerce-menu-cart padding">
				   <div class="widget woocommerce widget_shopping_cart">
					  <div class="widget_shopping_cart_content"></div>
				   </div>
				</div>
			 </div>
			 <div id="main-nav-bg" class="nav-box nav-margin-vertical header-model-7">
				<div class="row">
				   <div class="large-3 columns centered-text-responsive">
					  <div class="logo-container"><a href="index.php"><img src="<?php echo $tpath; ?>/img/logoRetina.png" alt="CRV SOLUCIONES SOFTWARESV" style="max-width:300px; max-height:48px; width:100%;" /></a></div>
				   </div>
				   <div class="large-9 columns quasar-nav-fixed-ready">
					  <div class="nav-right-desktop">
						 <div id="nav" class="menu-principal-container">
							<ul id="menu-principal" class="nav-menu">
							   <li id="menu-item-1310" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
								  <a href="servicios/index.html">
									 Servicios
									 <div class="desc">Services</div>
								  </a>
								  <ul class="sub-menu">
									 <li id="menu-item-1304" class="menu-item menu-item-type-post_type menu-item-object-page">
										<a href="diseno/index.html">
										   Dise&#208;o
										   <div class="desc"></div>
										</a>
									 </li>
									 <li id="menu-item-1306" class="menu-item menu-item-type-post_type menu-item-object-page">
										<a href="marketing/index.html">
										   Estrategia Digital y Marketing
										   <div class="desc"></div>
										</a>
									 </li>
									 <li id="menu-item-1301" class="menu-item menu-item-type-post_type menu-item-object-page">
										<a href="sitiosweb/index.html">
										   Sitios Web
										   <div class="desc"></div>
										</a>
									 </li>
									 <li id="menu-item-1303" class="menu-item menu-item-type-post_type menu-item-object-page">
										<a href="desarrollo/index.html">
										   Desarrollo de Software
										   <div class="desc"></div>
										</a>
									 </li>
									 <li id="menu-item-1302" class="menu-item menu-item-type-post_type menu-item-object-page">
										<a href="apps/index.html">
										   Apps M&#243;viles
										   <div class="desc"></div>
										</a>
									 </li>
								  </ul>
							   </li>
							   <li id="menu-item-1305" class="menu-item menu-item-type-post_type menu-item-object-page">
								  <a href="dominios/index.html">
									 Dominios
									 <div class="desc">Domains</div>
								  </a>
							   </li>
							   <li id="menu-item-1307" class="menu-item menu-item-type-post_type menu-item-object-page">
								  <a href="cloudhosting/index.html">
									 Alojamiento Web
									 <div class="desc">Dedicated Hosting</div>
								  </a>
							   </li>
							   <li id="menu-item-1013" class="menu-item menu-item-type-post_type menu-item-object-page">
								  <a href="contactenos/index.html">
									 Cont&#225;ctenos
									 <div class="desc">Contact Us</div>
								  </a>
							   </li>
							   <li class="right">
							   </li>
							</ul>
						 </div>
					  </div>
				   </div>
				</div>
			 </div>
			 <div class="nav-shadow-container">
				<div class="shadow-divider-down"><img src="<?php echo $tpath; ?>/images/shadow-divider-down.png" /></div>
			 </div>
			 <div id="toTop">
				<i class="fa fa-chevron-up to_top_icon"></i>
			 </div>
			 <div class="row">
				<div class="large-12 columns"></div>
			 </div>
			 <div class="row"></div>
			 <div class="row">
			 </div>
			 <div  class="rockthemes-parallax" 
				parallax-model="height_specific" 
				parallax-bg-image="<?php echo $tpath; ?>/img/fondo2.jpg" 
				parallax-mask-height="400">
				<div class="row">
				   <div class="large-12 columns rockthemes-animate"  animation-class="fadeInRight" animation-delay-time="0">
					  <hr style="margin:15px 0px; width:100%; height:0px; border-bottom:none; border-top:1px solid #999999;" />
					  <div>
						 <h1 class="MainSection-title title-Main" style="text-align: center;"><span style="color: #ffffff;"><strong>
						 <script>$(function()
						 {
							$('#title').html($('title').text()); 
						 });</script>
						 <div id="title"></div>
						 </strong></span></h1>
						 <p>
						 <div class="rockthemes-divider">
							<span class="divider-line">
							<span class="divider-symbol"></span>
							</span>
						 </div>
						 </p>
					  </div>
				   </div>
				</div>
				<div class="shadow-divider-up"><img src="<?php echo $tpath; ?>/images/shadow-divider-up.png" /></div>
			 </div>
			 <div id="servicios"  class="rockthemes-fullwidth-colored" style="background:#ecf0f1; padding-top:60px; padding-bottom:60px;">
				<div class="row">
				<jdoc:include type="component" />
				</div>
				<hr/>
				<div class="row">
					<div id="primary" class="content-area large-6 column">
						<h1>Nosotros podemos ayudarlo</h1>
						<form enctype="multipart/form-data" id="form-contactar" method="post" action="modules/mod_send_mail/mail.php">
							<div class="row">
								<div class="large-12 columns">
									<div class="rockthemes_fb_element_container">
										<input type="text" data-element-type="text_field" class="rockthemes-fb-element input-element  " title="* Hola, Cual es tu nombre? " id="nombre" name="nombre" placeholder="* Hola, Cual es tu nombre? ">
									</div>
									<div class="rockthemes_fb_element_container">
										<input type="text" data-element-type="text_field" class="rockthemes-fb-element input-element  " title="* Cual es tu telefono? " id="TelefonoRemitente" name="TelefonoRemitente" placeholder="* Cual es tu telefono? ">
									</div>
									<div class="rockthemes_fb_element_container">
										<input type="text" data-element-type="text_field" class="rockthemes-fb-element input-element  " title="* A que correo podemos escribirte? " id="email" name="email" placeholder="* A que correo podemos escribirte? ">
									</div>
									<div class="rockthemes-fb-field-header-title">Marque los servicios de Diseño que desea</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns ">
									<div class="rockthemes_fb_element_container">
										<p>
											<div class="check-box">
												<i>
													<input autocomplete="off" name="rfb_checkbox-1" id="rfb_checkbox-1" type="checkbox" title="Diseño Gráfico " data-element-type="checkbox" class="rockthemes-fb-element input-element checkbox-element" value="true"></i></div> <label for="rfb_checkbox-1" style="position: relative; top: -5px;"> Diseño Gráfico </label></p></div><div class="rockthemes_fb_element_container"><p><div class="check-box"><i><input autocomplete="off" name="rfb_checkbox-3" id="rfb_checkbox-3" type="checkbox" title="Diseño Corporativo " data-element-type="checkbox" class="rockthemes-fb-element input-element checkbox-element" value="true"></i></div> <label for="rfb_checkbox-3" style="position: relative; top: -5px;"> Diseño Corporativo </label></p></div></div><div class="large-4 columns "><div class="rockthemes_fb_element_container"><p><div class="check-box"><i><input autocomplete="off" name="rfb_checkbox-2" id="rfb_checkbox-2" type="checkbox" title="Diseño Impresion" data-element-type="checkbox" class="rockthemes-fb-element input-element checkbox-element" value="true"></i></div> <label for="rfb_checkbox-2" style="position: relative; top: -5px;"> Diseño Impresion</label></p></div><div class="rockthemes_fb_element_container"><p><div class="check-box"><i><input autocomplete="off" name="rfb_checkbox-4" id="rfb_checkbox-4" type="checkbox" title="noniko" data-element-type="checkbox" class="rockthemes-fb-element input-element checkbox-element" value="true"></i></div> <label for="rfb_checkbox-4" style="position: relative; top: -5px;"> Noniko</label></p></div></div><div class="large-4 columns "><div class="rockthemes_fb_element_container"><p><div class="check-box"><i><input autocomplete="off" name="rfb_checkbox-0" id="rfb_checkbox-0" type="checkbox" title="Diseño Web " data-element-type="checkbox" class="rockthemes-fb-element input-element checkbox-element" value="true"></i></div> <label for="rfb_checkbox-0" style="position: relative; top: -5px;"> Diseño Web </label></p></div><div class="rockthemes_fb_element_container"><p><div class="check-box"><i><input autocomplete="off" name="rfb_checkbox-5" id="rfb_checkbox-5" type="checkbox" title="Diseño Multimedia " data-element-type="checkbox" class="rockthemes-fb-element input-element checkbox-element" value="true"></i></div> <label for="rfb_checkbox-5" style="position: relative; top: -5px;"> Diseño Multimedia </label></p></div></div></div><div class="row"><div class="large-12 columns "><div class="rockthemes_fb_element_container">
														<textarea data-element-type="text_area" class="rockthemes-fb-element input-element" title="* Cuéntenos detalladamente lo que necesita" id="mensajeRemitente" name="mensajeRemitente" placeholder="* Cuéntenos detalladamente lo que necesita"></textarea>
													</div>
													</div>
													</div>
							<div class="g-recaptcha" data-sitekey="6LfrPB8UAAAAAI0y6YiTTeCdrvqkDWkjWBRgM-lT"></div>
							<div class="clear"></div><br><br>
							<button type="submit" class="rockthemes-fb-send button button-rounded button-primary">Enviar <i class="sending"></i>
							</button>
							<span class="sending-result"></span></form>
						</form>
					</div>
				</div>
			 </div>
			 <div class="row">
				<div id="primary" class="content-area large-12 column">
				   <div id="content" class="site-content" role="main">
					  <article id="post-131" class="post-131 page type-page status-publish hentry">
						 <div class="entry-content">
							<div class="row">
							   <div class="large-12 columns">
								  <div style="background:url('')  no-repeat; width:100%; margin:15px 0; height:30px;">
								  </div>
							   </div>
							</div>
							<div class="row">
							   <div class="large-3 columns">
								  <div>
									 <h1>Nuestros <strong>Valores</strong></h1>
								  </div>
								  <div>
									 <p>
									 <div class="rockthemes-divider">
										<span class="divider-line-left">
										<span class="divider-symbol-left"></span>
										</span>
									 </div>
									 </p>
								  </div>
								  <div>
									 <ul style="position: relative;">
										<li>
										   <h4>Creatividad</h4>
										</li>
										<li>
										   <h4>Innovaci&#243;n</h4>
										</li>
										<li>
										   <h4>Compromiso</h4>
										</li>
										<li>
										   <h4>Responsabilidad&nbsp;</h4>
										</li>
										<li>
										   <h4>Calidad&nbsp;</h4>
										</li>
									 </ul>
								  </div>
							   </div>
							   <div class="large-4 columns">
								  <div>
									 <h1>Quienes <strong>Somos</strong></h1>
								  </div>
								  <div>
									 <p>
									 <div class="rockthemes-divider">
										<span class="divider-line-left">
										<span class="divider-symbol-left"></span>
										</span>
									 </div>
									 </p>
								  </div>
								  <div>
									 <h3><img class="alignnone wp-image-6 size-full" src="<?php echo $tpath; ?>/img/logoiws.png" alt="logoiws" width="552" height="86"></h3>
									 <h3>Somos una agencia digital...</h3>
									 <p style="text-align: justify;">Implementamos y desarrollamos nuevas tecnolog&#237;as, tendencias y estrategias competitivas que activan marcas.</p>
								  </div>
							   </div>
							   <div class="large-5 columns">
								  <div>
									 <p><img class="alignnone size-large wp-image-963" src="<?php echo $tpath; ?>/img/iws-1024x373.png" alt="iws" width="900" height="328"></p>
								  </div>
								  <div id="rock-toggles-1" class="row rock-toggles-container">
									 <div class="large-12 columns">
										<div class="rock-toggle-header padding" ><i class="fa-star rock-toggle-header-icon"></i>¿Por qu&#233; trabajar con nosotros?<i class="fa fa-chevron-down right main-toggle-icon"></i></div>
										<div class="clear"></div>
										<div class="hr-shadow-mask">
										   <hr class="hr-shadow active shadow-effect curve curve-hz-1">
										</div>
										<div class="rock-toggle-content padding" style="display:none;">
										   <p style="text-align: justify;">Simplemente porque lo que hacemos funciona y al mismo tiempo nos divertimos al hacerlo.</p>
										</div>
									 </div>
									 <div class="large-12 columns">
										<div class="rock-toggle-header padding" ><i class="fa-star rock-toggle-header-icon"></i>Somos Profesionales<i class="fa fa-chevron-down right main-toggle-icon"></i></div>
										<div class="clear"></div>
										<div class="hr-shadow-mask">
										   <hr class="hr-shadow active shadow-effect curve curve-hz-1">
										</div>
										<div class="rock-toggle-content padding" style="display:none;">
										   <p style="text-align: justify;">En <strong>CRV SOLUCIONES SOFTWARE</strong>&nbsp;somos personas trabajando por un bien com&#250;n&nbsp;que busca expandir sus horizontes a las posibilidades que el mundo digital ofrece y le asesoramos en las mejores opciones para su negocio, piense en nosotros como parte de su organizaci&#243;n.</p>
										</div>
									 </div>
									 <div class="large-12 columns">
										<div class="rock-toggle-header padding" ><i class="fa-star rock-toggle-header-icon"></i>Nuestro Trabajo<i class="fa fa-chevron-down right main-toggle-icon"></i></div>
										<div class="clear"></div>
										<div class="hr-shadow-mask">
										   <hr class="hr-shadow active shadow-effect curve curve-hz-1">
										</div>
										<div class="rock-toggle-content padding" style="display:none;">
										   <p style="text-align: justify;">Combinamos nuestras habilidades, conocimiento, experiencia y pasi&#243;n para elevar la competitividad de nuestros clientes mediante soluciones tecnol&#243;gicas efectivas y de &#250;ltima generaci&#243;n.</p>
										</div>
									 </div>
								  </div>
								  <script type="text/javascript">
									 jQuery(document).ready(function(){
										jQuery(document).on("click", "#rock-toggles-1 .rock-toggle-header", function(e){
									 
										if(jQuery(this).parent().hasClass("active")){
											jQuery(this).parent().removeClass("active");
											jQuery(this).parent().find(".rock-toggle-header .main-toggle-icon").removeClass("fa fa-chevron-up");
											jQuery(this).parent().find(".rock-toggle-header .main-toggle-icon").addClass("fa fa-chevron-down");
										}else{
											jQuery(this).parent().addClass("active");
											jQuery(this).parent().find(".rock-toggle-header .main-toggle-icon").removeClass("fa fa-chevron-down");
											jQuery(this).parent().find(".rock-toggle-header .main-toggle-icon").addClass("fa fa-chevron-up");
										}
										jQuery(this).parent().find(".rock-toggle-content").slideToggle(280);
									 
										});
									 });
								  </script>
							   </div>
							</div>
						 </div>
						 
					  </article>
				  </div>
				</div>
				<div class="clear"></div>
				<div></div>
			 </div>
			 <div class="row">
			 </div>
			 <div  class="rockthemes-parallax" 
				parallax-model="height_specific" 
				parallax-bg-image="<?php echo $tpath; ?>/img/new_bg_light1.jpg" 
				parallax-mask-height="250">
				<div class="row">
				   <div class="large-5 columns">
					  <hr style="margin:15px 0px; width:100%; height:0px; border-bottom:none; border-top:1px solid #999999;" />
					  <div>
						 <h2><strong>Apasionados por la tecnolog&#237;a&nbsp;</strong></h2>
						 <p>
						 <div class="rockthemes-divider">
							<span class="divider-line-left">
							<span class="divider-symbol-left"></span>
							</span>
						 </div>
						 </p>
						 <p style="text-align: justify;">Somos un equipo de personas que haremos crecer tu marca, brind&#225;ndote excelentes ideas, aportando ese valor agregado que nos hace diferentes.</p>
					  </div>
				   </div>
				   <div class="large-7 columns">
					  <hr style="margin:15px 0px; width:100%; height:0px; border-bottom:none; border-top:1px solid #999999;" />
					  <div>
						 <p><img class="alignnone wp-image-973 size-full" src="<?php echo $tpath; ?>/img/stage-slide1-portfolio-07-en-content_01.png" alt="stage-slide1-portfolio-07-en-content_01" width="980" height="275"></p>
					  </div>
				   </div>
				</div>
			 </div>
			 <div>
				<div class="row">        </div>
						<?php
						require_once dirname(__FILE__) . '/../../modules/mod_helloworld/helper.php';
						?>
			 </div>
			 <div class="clear"></div>
			 <div id="footer" class="footer">
				<div class="relative-container">
				   <div class="shadow-divider-up"><img src="<?php echo $tpath; ?>/images/shadow-divider-up.png" /></div>
				</div>
				<div class="footer-large">
				   <div class="row">
				   <div class="large-12 columns">
						 <ul class="large-block-grid-3 small-block-grid-1">
							<li>
							   <aside id="text-5" class="widget widget_text">
								  
								  <?php
									$hello = modHelloWorldHelper::getEnlaces();
									require JModuleHelper::getLayoutPath('mod_helloworld');
								?>
								</aside>
								<hr class="footer-inline-hr" />
							   <aside id="wysija-2" class="widget widget_wysija">
								  <h3 class="widget-title">Suscr&#237;bete a nuestro Bolet&#237;n</h3>
								  <hr class="footer-inline-hr" />
								  <div class="widget_wysija_cont">
									 <div id="msg-form-wysija-2" class="wysija-msg ajax"></div>
									 <form id="form-wysija-2" method="post" action="#wysija" class="widget_wysija">
										<p class="wysija-paragraph">
										   <input type="text" name="wysija[user][firstname]" class="wysija-input validate[required]" title="Nombre" placeholder="Nombre" value="" />
										   <span class="abs-req">
										   <input type="text" name="wysija[user][abs][firstname]" class="wysija-input validated[abs][firstname]" value="" />
										   </span>
										</p>
										<p class="wysija-paragraph">
										   <input type="text" name="wysija[user][email]" class="wysija-input validate[required,custom[email]]" title="Correo Electr&#243;nico" placeholder="Correo Electr&#243;nico" value="" />
										   <span class="abs-req">
										   <input type="text" name="wysija[user][abs][email]" class="wysija-input validated[abs][email]" value="" />
										   </span>
										</p>
										<input class="wysija-submit wysija-submit-field" type="submit" value="¡Suscr&#237;bete!" />
										<input type="hidden" name="form_id" value="1" />
										<input type="hidden" name="action" value="save" />
										<input type="hidden" name="controller" value="subscribers" />
										<input type="hidden" value="1" name="wysija-page" />
										<input type="hidden" name="wysija[user_list][list_ids]" value="1" />
									 </form>
								  </div>
							   </aside>
							
							   <aside id="text-9" class="widget widget_text">
							</li>
							
							<li>
							   <style>
								  .rpwe-block ul{list-style:none!important;margin-left:0!important;padding-left:0!important;}.rpwe-block li{border-bottom:1px solid #eee;margin-bottom:10px;padding-bottom:10px;list-style-type: none;}.rpwe-block a{display:inline!important;text-decoration:none;}.rpwe-block h3{background:none!important;clear:none;margin-bottom:0!important;margin-top:0!important;font-weight:400;font-size:12px!important;line-height:1.5em;}.rpwe-thumb{border:1px solid #EEE!important;box-shadow:none!important;margin:2px 10px 2px 0;padding:3px!important;}.rpwe-summary{font-size:12px;}.rpwe-time{color:#bbb;font-size:11px;}.rpwe-comment{color:#bbb;font-size:11px;padding-left:5px;}.rpwe-alignleft{display:inline;float:left;}.rpwe-alignright{display:inline;float:right;}.rpwe-aligncenter{display:block;margin-left: auto;margin-right: auto;}.rpwe-clearfix:before,.rpwe-clearfix:after{content:"";display:table !important;}.rpwe-clearfix:after{clear:both;}.rpwe-clearfix{zoom:1;}
							   </style>
							   <aside id="rpwe_widget-2" class="widget rpwe_widget recent-posts-extended">
								  <h3 class="widget-title">Publicaciones Recientes </h3>
								  <hr class="footer-inline-hr" />
								  <div  class="rpwe-block ">
								<?php
									$hello = modHelloWorldHelper::getNotice(3);
									require JModuleHelper::getLayoutPath('mod_helloworld');
								?>
								
								</div>
							   </aside>
							</li>
							<li>
							   <aside id="woocommerce_products-2" class="widget woocommerce widget_products">
								<?php
									$hello = modHelloWorldHelper::getClients(6);
									require JModuleHelper::getLayoutPath('mod_helloworld');
								?>  
							   </aside>
							</li>
						 </ul>
					  </div>
				   </div>
					</div>
				<div class="footer-bottom">
				   <div class="row">
					  <div class="large-6 medium-6 columns footer-bottom-left centered-text-responsive-small">
						<a href="http://solucionescrv.com">© Copyright - CRV SOLUCIONES Software</a>
					  </div>
					  <div class="large-6 medium-6 columns right-text centered-text-responsive-small">
						 <aside class="footer-bottom-widget">
							<div class="textwidget"></div>
						 </aside>
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
	</body>

</html>
