<?php
/*
Plugin Name: OneClick Installer
Plugin URI: http://anirudhsanjeev.org/projects/oneclick/
Description: *** <strong>This plugin is deprecated. Use the <a href='http://w-shadow.com/blog/2007/10/19/one-click-plugin-updater/'>One Click Plugin Updater</a> instead!</strong> ***
Version: 0.9.9
Author: Anirudh Sanjeev
Author URI: http://anirudhsanjeev.org/
*/

if (!class_exists('ws_oneclick_pup')) {
	require_once('oneclick-plugin-updater.php');
	$GLOBALS['ws_pup'] = $ws_pup;
}

$oneclick_transformation_run = false;

/** Transform this specially crafted 'plugin' into One Click Plugin Updater **/
function oneclick_transformation(){
	global $ws_pup, $oneclick_transformation_run;
	if ($oneclick_transformation_run) return false; //only run once per pageload
	$oneclick_transformation_run = true;
	
	$mydir = dirname(__FILE__);
	
	if (file_exists(ABSPATH.PLUGINDIR.'/one-click-plugin-updater/oneclick-plugin-updater.php')) {
		//One click plugin updater is already installed. Only add a notice in that case.
		//Note : need to make sure the add_permanent_notice method is present. 
		if (method_exists($ws_pup, 'add_permanent_notice'))
			$ws_pup->add_permanent_notice(
				"<strong>OneClick Installer</strong> is deprecated. Use the 
				new <strong>One Click Plugin Updater</strong> instead. ",
				'oneclick_transformation');
		return false;
	} else {
		//Transform!
		
		//First, rename this directory
		if (rename($mydir, ABSPATH.PLUGINDIR.'/one-click-plugin-updater')){
			$mydir = ABSPATH.PLUGINDIR.'/one-click-plugin-updater';
		}
		
		//Activate the new plugin
		$plugin = plugin_basename($mydir.'/oneclick-plugin-updater.php');
		$current = get_option('active_plugins');
		if ( !in_array($plugin, $current) ) {
			$current[] = $plugin;
			sort($current);
			update_option('active_plugins', $current);
		}
		
		//Ensure the miniguide will be shown. Must be done before activation() because that 
		//hook will merge in other defaults and save the options.
		$ws_pup->options['show_miniguide'] = true;
				
		//Call the activation hook directly 
		$ws_pup->activation();
		
		//Let the user know what I did
		$ws_pup->add_permanent_notice(
			"<strong>OneClick Installer</strong> is deprecated. It was automatically 
			converted to the new <strong>One Click Plugin Updater</strong> which has more features and is 
			more secure. <a href='index.php?page=one_click_miniguide'>More...</a> ",
			'oneclick_transformation');
		
		//Finally, remove files related to OneClick Installer 		
		@unlink($mydir.'/purgatory.php');
		@unlink($mydir.'/happy.png');
		@unlink($mydir.'/sad.png');
		//selfdestruct :)
		@unlink($mydir.'/oneclick.php');
	}
}
//*
//Depending on installation/upgrade method either of these hooks will run  
add_action('activate_'.plugin_basename(__FILE__), 'oneclick_transformation');
add_action('plugins_loaded', 'oneclick_transformation');

//Make sure this wrapper file stays deactivated
$plugin = plugin_basename(__FILE__);
$current = get_option('active_plugins');
if (in_array($plugin, $current)){
	array_splice($current, array_search( $plugin, $current), 1 ); // Remove!
	update_option('active_plugins', $current);
}
//*/

 
/** Kill them with fire! **/

?>