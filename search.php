<?php

/**
 * @copyright  Copyright 2010 metaio GmbH. All rights reserved.
 * @link       http://www.metaio.com
 * @author     Frank Angermann
 **/

 require_once '../library/poibuilder.class.php';
 
 
//get the position of the user (see pois/search in the documentation)
if(!empty($_GET['l']))
	$position = explode(",", $_GET['l']);

//use the poiBuilder class
$jPoiBuilder = new JunaioBuilder($position, MAX_DISTANCE);
define ('MAX_DISTANCE', 4000);

//create the xml start
$jPoiBuilder->start();

//Brooklyn Bridge POI:
$poi = new SinglePOI();
$poi = $jPoiBuilder->createVideoLocationBasedPOI(
										"Brooklyn Bridge", //name
										"40.70569,-73.99639,0", //position
										"http://itp.nyu.edu/~hs1571/hiyeblog/wp-content/uploads/2012/04/BrooklynBridgeMPG4_SMALL.mp4", //image Link 
										"Palimpsest of Brooklyn Bridge", //description
										"http://itp.nyu.edu/~hs1571/hiyeblog/wp-content/uploads/2012/04/Georgia_P_Icon.png", //icon
        								"http://itp.nyu.edu/~hs1571/hiyeblog/wp-content/uploads/2012/04/Georgia_P_Thumbnail.png", //thumbnail 
										"BrooklynBridgeClip", //id
										"true" //allow routing
									);
$jPoiBuilder->outputPOI($poi);

//Washington Square Park POI
$poi = new SinglePOI();
$poi = $jPoiBuilder->createVideoLocationBasedPOI(
										"Washington Square Park", //name
										"40.730833,-73.9975,0", //position
										"http://itp.nyu.edu/~hs1571/hiyeblog/wp-content/uploads/2012/04/WashingtonSqParkMPEG4-_SMALL.mp4", //video Link 
										"Palimpsest of Washington Square Park", //description
										"http://itp.nyu.edu/~hs1571/hiyeblog/wp-content/uploads/2012/04/Georgia_P_Icon.png", //icon
        								"http://itp.nyu.edu/~hs1571/hiyeblog/wp-content/uploads/2012/04/Georgia_P_Thumbnail.png", //thumbnail 
										"WSPClip", //id
										"true" //allow routing
									);
									
$jPoiBuilder->outputPOI($poi);

//Cigar Girl POI
$poi = new SinglePOI();
$poi = $jPoiBuilder->createVideoLocationBasedPOI(
										"Beautiful Cigar Girl", //name
										"40.716363,-74.004915,0", //position
										"http://itp.nyu.edu/~hs1571/hiyeblog/wp-content/uploads/2012/04/MARYROGERSMPEG4_SMALL.mp4", //sound Link 
										"Palimpsest of Mary Rogers", //description
										"http://itp.nyu.edu/~hs1571/hiyeblog/wp-content/uploads/2012/04/Georgia_P_Icon.png", //icon
        								"http://itp.nyu.edu/~hs1571/hiyeblog/wp-content/uploads/2012/04/Georgia_P_Thumbnail.png", //thumbnail 
										"CigarClip", //id
										"true" //allow routing
									);
									
$jPoiBuilder->outputPOI($poi);

//Players Club
$poi = new SinglePOI();
$poi = $jPoiBuilder->createVideoLocationBasedPOI(
										"The Players Club", //name
										"40.738348,-73.986268,0", //position
										"http://itp.nyu.edu/~hs1571/hiyeblog/wp-content/uploads/2012/04/EDWINBOOTHMPG4_SMALL.mp4", //video Link 
										"Palimpsest of Edwin Booth", //description
										"http://itp.nyu.edu/~hs1571/hiyeblog/wp-content/uploads/2012/04/Georgia_P_Icon.png", //icon
        								"http://itp.nyu.edu/~hs1571/hiyeblog/wp-content/uploads/2012/04/Georgia_P_Thumbnail.png", //thumbnail 
										"ClubClip", //id
										"true" //allow routing
									);
									
$jPoiBuilder->outputPOI($poi);


//create the end
$jPoiBuilder->end();

exit;