<?php
/**
 * @package     gantry
 * @subpackage  features
 * @version		3.1.8 February 14, 2011
 * @author		RocketTheme http://www.rockettheme.com
 * @copyright 	Copyright (C) 2007 - 2011 RocketTheme, LLC
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */

defined('JPATH_BASE') or die();

gantry_import('core.gantryfeature');

/**
 * @package     gantry
 * @subpackage  features
 */
class GantryFeaturelogo extends GantryFeature {
	var $_feature_name = 'logo';
    var $_autosize = false;

    
	function render($position="") {
        global $gantry;

	$blogger_e = $gantry->get('blogger-enabled');
	$blogger_c = $gantry->get('blogger-code');

        // default location for custom icon is {template}/images/logo/logo.png, with 'perstyle' it's
        // located in {template}/images/logo/styleX/logo.png
#        if ($gantry->get("logo-autosize")) {

            jimport ('joomla.filesystem.file');

            $path = $gantry->templatePath.DS.'images'.DS.'logo';
            $logocss = $gantry->get('logo-css','body #rt-logo');

            // get proper path to logo
            $path = (intval($gantry->get("logo-perstyle",0))===1) ? $path.DS : $path.DS;
            // append logo file
            // $path .= 'logo.png';
	    $path = '/templates/ca_cloudbase2_j25/custom/rotate.php';
	
		//	$userPath="/images/logo/logo.png";
			$userPath="/templates/ca_cloudbase2_j25/custom/rotate.php)";
			if(JFile::exists(JPATH_ROOT.DS.$userPath)) $path=JPATH_ROOT.DS.$userPath;
			

            // if the logo exists, get it's dimentions and add them inline
            if (JFile::exists($path)) {
                $logosize = getimagesize($path);
                if (isset($logosize[0]) && isset($logosize[1])) {
                	
                	// jc_hawk1: debug force size
			// $injectCSS=$logocss.' {width:'.$logosize[0].'px;height:'.$logosize[1].'px;';
			$injectCSS=$logocss.' {width:100%;height:200px;';
                	if(JFile::exists(JPATH_ROOT.$userPath)) $injectCSS.='background: transparent url(\''.$userPath.'\')';
                	$injectCSS.='}';
                    
                    $gantry->addInlineStyle($injectCSS);
                }
            } 
         #}

	    ob_start();
	    ?>
		<div class="rt-block">
		<table border="0" align="right">
			<tr align="right">
			<td align="left">
				<a href="<?php echo $gantry->baseUrl; ?>" style="font-family: 'Times New Roman';font-size:36pt; font-style: italic; color:red; filter:Glow(color=red, strength=12)">
				<div style="font-size: large" ><?php $config =& JFactory::getConfig(); echo $config->getValue( 'config.sitename' ); ?>
				<?php // echo ' web site'; ?></a>
			</td>
			<td align="right" colspan="4">	
				<jdoc:include type="modules" name="position-0"/>
			</td></tr>
			<tr align="right">
			<td width="100%">
			</td>
			<td width="89px" align="center">
				<?php echo '<a target="_blank" href="' . $gantry->get('youtube-code') . '">'; ?>
				<img align="center" width="89" height="35" border="0" alt="You tube" src="templates/ca_cloudbase2_j25/images/social/youtube.png"></a>
			</td>
			<td width="40px" align="center">
				<?php echo '<a target="_blank" href="' . $gantry->get('facebook-code') . '">'; ?>
				<img align="center" width="35" height="35" border="0" padding="10" margin="10" alt="Facebook" src="templates/ca_cloudbase2_j25/images/social/facebook.png"></a>
			</td>
			<td width="40px" align="center">
				<?php echo '<a target="_blank" href="' . $gantry->get('blogger-code') . '">'; ?>
				<img align="center" width="35" height="35" border="0" padding="10" margin="10" alt="Blogger" src="templates/ca_cloudbase2_j25/images/social/blogger.png"></a>
			</td>
			</tr>
			<tr><td>
				<div style="font-family: 'Times New Roman';font-size:12pt; font-style: italic; color:green; filter:Glow(color=green, strength=12)">
			<jdoc:include type="modules" name="position-1"/>
			</div>	
			</td></tr></table><br/>
    		</div>
	    <?php
	    return ob_get_clean();
	}
}