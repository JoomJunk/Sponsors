<?php
/** 
 * @subpackage     JJ Sponsors
 * @author         JoomJunk
 * @copyright	   2011-2013 JoomJunk. All Rights Reserved
 * @license        http://www.gnu.org/licenses/gpl-3.0.html
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

if ($tab == 0)
{
	$clickfunction = '}).click (function () {'
		. "window.open($(this).find('a').attr('href')); return false;"
	. '});';
}
else
{
	$clickfunction = '}).click (function () {'
		. "window.location = $(this).find('a').attr('href');"
	. '});';
}

$javascript = 'jQuery(document).ready(function($) {'
	// Custom settings
	. "var style_in = '" . $params->get('stylein', 'easeOutBounce') . "';"
	. "var style_out = '" . $params->get('styleout', 'jswing') . "';"
	. 'var speed_in = ' . $params->get('speedin', '1000') . ';'
	. 'var speed_out = ' . $params->get('speedout', '300') . ';'

	// Calculation for corners
	. "var neg = Math.round($('#sponsor" . $id . " .qitem').width() / 2) * (-1);"
	. 'var pos = neg * (-1);'	
	. 'var out = pos * 2;'
	
	. "$('#sponsor" . $id . " .qitem').each(function () {"
		. "url = $(this).find('a').attr('href');"
		. "img = $(this).find('img').attr('src');"
		. "alt = $(this).find('img').attr('img');"

		. "$('img', this).remove();"
		. "$(this).append('<div class=\"topLeft\"></div><div class=\"topRight\"></div><div class=\"bottomLeft\"></div><div class=\"bottomRight\"></div>');"
		. "$(this).children('div').css('background-image','url('+ img + ')');"

		. "$(this).find('div.topLeft').css({top:0, left:0, width:pos , height:pos});"	
		. "$(this).find('div.topRight').css({top:0, left:pos, width:pos , height:pos});"	
		. "$(this).find('div.bottomLeft').css({bottom:0, left:0, width:pos , height:pos});"	
		. "$(this).find('div.bottomRight').css({bottom:0, left:pos, width:pos , height:pos});"	

	. '}).hover(function () {'

		. "$(this).find('div.topLeft').stop(false, true).animate({top:neg, left:neg}, {duration:speed_out, easing:style_out});"	
		. "$(this).find('div.topRight').stop(false, true).animate({top:neg, left:out}, {duration:speed_out, easing:style_out});"	
		. "$(this).find('div.bottomLeft').stop(false, true).animate({bottom:neg, left:neg}, {duration:speed_out, easing:style_out});"	
		. "$(this).find('div.bottomRight').stop(false, true).animate({bottom:neg, left:out}, {duration:speed_out, easing:style_out});"	

	. '},'

	. 'function () {'

		. "$(this).find('div.topLeft').stop(false, true).animate({top:0, left:0}, {duration:speed_in, easing:style_in});"	
		. "$(this).find('div.topRight').stop(false, true).animate({top:0, left:pos}, {duration:speed_in, easing:style_in});"	
		. "$(this).find('div.bottomLeft').stop(false, true).animate({bottom:0, left:0}, {duration:speed_in, easing:style_in});"	
		. "$(this).find('div.bottomRight').stop(false, true).animate({bottom:0, left:pos}, {duration:speed_in, easing:style_in});"	
	. $clickfunction
. '});';

$document = JFactory::getDocument();

if(version_compare(JVERSION,'3.0','ge')) {
	JHtml::_('jquery.framework');
} 
else {
	if(!JFactory::getApplication()->get('jquery')){
		JFactory::getApplication()->set('jquery',true);
		$document->addScript(JURI::root() . "modules/mod_jj_sponsors/js/jquery.js");
	}
}

$document->addScript($module_base . 'js/jquery.easing.1.3.js');
$document->addScriptDeclaration($javascript);

// Add styles
$document->addStyleSheet($module_base . 'css/style.css');

$style ='.qitem {'
			. "background:url('" . JUri::base() . "modules/mod_jj_sponsors/images/" . $background . "') no-repeat;"
			. 'border-top-width:' . $border_width . 'px;'
			. 'border-bottom-width:' . $border_width . 'px;'
			. 'border-left-width:' . $border_width . 'px;'
			. 'border-right-width:' . $border_width . 'px;'
			. 'border-top-color:#' . $border_colour . ';'
			. 'border-bottom-color:#' . $border_colour . ';'
			. 'border-left-color:#' . $border_colour . ';'
			. 'border-right-color:#' . $border_colour . ';'
			. '}'
		. '.qitem .caption {'
			. 'color:#' . $text_colour . ';'
			. '}'
		. '.qitem .caption h4 {'
			. 'color:#' . $header_colour . ';'
			. '}';
$document->addStyleDeclaration($style);
		
?>

<div id ="sponsor<?php echo $id; ?>">
	<?php
	$i = 1;
	$total = 9;

	while ($i <= $total)
	{
		if ($params->get('image' . $i, '1')) : ?>
		<div class="qitem">
			<a href="<?php echo $params->get('image' . $i . 'link'); ?>"><img src="<?php echo $image_base; ?><?php echo $params->get('image' . $i . 'url'); ?>" alt="Image <?php echo $i; ?>" title="" width="126" height="126"/></a>
			<div class="caption"><h4><?php echo $params->get('image' . $i . 'header'); ?></h4><p><?php echo $params->get('image' . $i . 'caption'); ?></p></div>
		</div>
		<?php
		endif;

		if ($i % $row === 0) : ?><div class="clear"></div><?php endif;

		$i++;
	}
	?>
</div>
