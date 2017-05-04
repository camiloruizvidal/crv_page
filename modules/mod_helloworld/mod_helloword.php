<?php
defined( '_JEXEC' ) or die( 'Restricted access' ); 
require_once( dirname(__FILE__).'/helper.php' ); 
$hello = modHelloWorldHelper::getServicesall();
require JModuleHelper::getLayoutPath('mod_helloworld');
?>