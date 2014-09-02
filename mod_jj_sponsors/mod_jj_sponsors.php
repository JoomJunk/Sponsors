<?php
/** 
 * @subpackage     JJ Sponsors
 * @author         JoomJunk
 * @copyright	   2011-2014 JoomJunk. All Rights Reserved
 * @license        http://www.gnu.org/licenses/gpl-3.0.html
 */
 
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Get the module wide params
$row = $params->get('row');
$header_colour = $params->get('header_colour');
$text_colour = $params->get('text_colour');
$background = $params->get('background');
$border_width = $params->get('border_width');
$border_colour = $params->get('border_colour');
$tab = $params->get('tab', '1');

// Define the base paths
$module_base = JUri::base() . 'modules/mod_jj_sponsors/';
$image_base = $module_base . 'images/';

// Define a unique id for the js
$id = $module->id;

//Include the layout file
require(JModuleHelper::getLayoutPath('mod_jj_sponsors'));
