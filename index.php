<?php
/**
 * @copyright  Copyright 2010 metaio GmbH. All rights reserved.
 * @link       http://www.metaio.com
 * @author     Frank Angermann
 * 
 * @version		1.0.1
 * 
 * This package shows a way of using classes to creating junaio POIs instead of writing xml. A basic library of with classes is presented and the usage shown
 **/

require_once '../config/config.php';
require_once '../library/junaio.class.php';

// Check junaio authentication header
// Settings for the authentication can be found in config.php
if (!Junaio::checkAuthentication()) {
	header('HTTP/1.0 401 Unauthorized');
	exit;
}

//if issues occur with htaccess, also the path variable can be used
//
//htaccess rewrite enabled:
//Callback URL: http://www.callbackURL.com
//
//htacces disabled:
//Callback URL: http://www.callbackURL.com/?path=
 
if(isset($_GET['path']))
	$path = $_GET['path'];
else
	$path = $_SERVER['REQUEST_URI'];
	
$aUrl = explode('/', $path);

// Include xml generation file, depending on the request
// pois/search -> search.php
// pois/event -> event.php
// pois/visualsearch

if(in_array('pois', $aUrl))
{
	if(in_array_substr('visualsearch', $aUrl))
	{
		//we could get an image from the user here and create a tracking xml based on that. Or do more server side image recognition with that, but not needed here ;)
		exit;
	}
	else if(in_array_substr('search', $aUrl))
	{
		//the search return needs to be provided
		include '../src/search.php';
		exit;
	}
	else if(in_array_substr('event', $aUrl))
	{
		//if I want to react to a user clicking a POI, I would return changes here
		//include '../src/event.php';
		exit;
	}
}	

// Wrong url
header('HTTP/1.0 404 Not found');

function in_array_substr($needle, $haystack)
{
	foreach($haystack as $value)
	{
		if(strpos($value, $needle) !== false)
			return true;
	}
	
	return false;	
}
