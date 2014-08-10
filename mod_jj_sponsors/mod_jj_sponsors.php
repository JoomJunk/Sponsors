<?php
/** 
 * @subpackage     JJ Sponsors
 * @author         JoomJunk
 * @copyright	   2011-2013 JoomJunk. All Rights Reserved
 * @license        http://www.gnu.org/licenses/gpl-3.0.html
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$row = $params->get('row');
$header_colour = $params->get('header_colour');
$text_colour = $params->get('text_colour');
$background = $params->get('background');
$border_width = $params->get('border_width');
$border_colour = $params->get('border_colour');
$tab = $params->get('tab', '1');

// Bases 
$module_base = JUri::base() . 'modules/mod_jj_sponsors/';
$image_base = JUri::base() . 'modules/mod_jj_sponsors/images/';

//Include the layout file
require(JModuleHelper::getLayoutPath('mod_jj_sponsors'));
