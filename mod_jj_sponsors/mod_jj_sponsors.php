<?php
/** 
 * @subpackage     JJ Sponsors
 * @author         JoomJunk
 * @copyright	   2011-2013 JoomJunk. All Rights Reserved
 * @license        http://www.gnu.org/licenses/gpl-3.0.html
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Image Vars 
$image1 = $params->get('image1', '1');
$image2 = $params->get('image2', '1');
$image3 = $params->get('image3', '1');
$image4 = $params->get('image4', '1');
$image5 = $params->get('image5', '1');
$image6 = $params->get('image6', '1');
$image7 = $params->get('image7', '1');
$image8 = $params->get('image8', '1');
$image9 = $params->get('image9', '1');

$image1url = $params->get('image1url');
$image2url = $params->get('image2url');
$image3url = $params->get('image3url');
$image4url = $params->get('image4url');
$image5url = $params->get('image5url');
$image6url = $params->get('image6url');
$image7url = $params->get('image7url');
$image8url = $params->get('image8url');
$image9url = $params->get('image9url');

$image1link = $params->get('image1link');
$image2link = $params->get('image2link');
$image3link = $params->get('image3link');
$image4link = $params->get('image4link');
$image5link = $params->get('image5link');
$image6link = $params->get('image6link');
$image7link = $params->get('image7link');
$image8link = $params->get('image8link');
$image9link = $params->get('image9link');

$image1caption = $params->get('image1caption');
$image2caption = $params->get('image2caption');
$image3caption = $params->get('image3caption');
$image4caption = $params->get('image4caption');
$image5caption = $params->get('image5caption');
$image6caption = $params->get('image6caption');
$image7caption = $params->get('image7caption');
$image8caption = $params->get('image8caption');
$image9caption = $params->get('image9caption');

$image1header = $params->get('image1header');
$image2header = $params->get('image2header');
$image3header = $params->get('image3header');
$image4header = $params->get('image4header');
$image5header = $params->get('image5header');
$image6header = $params->get('image6header');
$image7header = $params->get('image7header');
$image8header = $params->get('image8header');
$image9header = $params->get('image9header');

$row = $params->get('row');
$header_colour = $params->get('header_colour');
$text_colour = $params->get('text_colour');
$background = $params->get('background');
$border_width = $params->get('border_width');
$border_colour = $params->get('border_colour');
$tab = $params->get('tab', '1');

// Bases 
$module_base = JURI::base() . 'modules/mod_jj_sponsors/';
$image_base = JURI::base() . 'modules/mod_jj_sponsors/images/';

//Include the layout file
require(JModuleHelper::getLayoutPath('mod_jj_sponsors'));

