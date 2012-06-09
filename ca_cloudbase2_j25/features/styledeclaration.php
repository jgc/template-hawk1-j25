<?php
/**
 * @package     gantry
 * @subpackage  features
 * @version		3.1.7 January 31, 2011
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
class GantryFeatureStyleDeclaration extends GantryFeature {
    var $_feature_name = 'styledeclaration';

    function isEnabled() {
        global $gantry;
        $menu_enabled = $this->get('enabled');

        if (1 == (int)$menu_enabled) return true;
        return false;
    }

	function init() {
        global $gantry;
        
        $patterns = array(
        	'pattern1' 	=> 'url('.$gantry->templateUrl.'/images/patterns/pattern_1.png) left top repeat ',
        	'pattern2' 	=> 'url('.$gantry->templateUrl.'/images/patterns/pattern_2.png) left top repeat-x ',
			'pattern3' 	=> 'url('.$gantry->templateUrl.'/images/patterns/pattern_3.png) center top no-repeat ',	
			'pattern4' 	=> 'url('.$gantry->templateUrl.'/images/patterns/pattern_4.png) center top no-repeat ',
			'pattern5' 	=> 'url('.$gantry->templateUrl.'/images/patterns/pattern_5.png) left top repeat ',
			'pattern6' 	=> 'url('.$gantry->templateUrl.'/images/patterns/pattern_6.png) left top repeat ',
			'pattern7'  => 'url('.$gantry->templateUrl.'/images/patterns/pattern_7.png) left top repeat ',
			'pattern8'  => 'url('.$gantry->templateUrl.'/images/patterns/pattern_8.png) left top repeat ',
			'pattern9'  => 'url('.$gantry->templateUrl.'/images/patterns/pattern_9.png) center top no-repeat ',
			'pattern10' => 'url('.$gantry->templateUrl.'/images/patterns/pattern_10.png) left top repeat ',
			'none' 	=> ' ',
		);
		$backgroundCss = $patterns[$gantry->get('pattern')].$gantry->get('bgcolor');

        $css  = 'body {background: '.$backgroundCss.';}';
        $css .= 'body a, body a:hover {color:'.$gantry->get('linkcolor').';}';
        $css .= '.module-title h2.title{background-color:'.$gantry->get('moduleheadercolor').';}';
        $css .= '.module-title h2.title{ color:'.$gantry->get('moduleheadertextcolor1').';}';
        $css .= '#rt-top h2.title, #rt-content-top h2.title, #rt-content-bottom h2.title, #rt-bottom h2.title{ color:'.$gantry->get('moduleheadertextcolor2').';}';
        $css .= '#rt-footer, #rt-footer a, #rt-footer h2.title, #rt-copyright, #rt-copyright a {color:'.$gantry->get('footercolor').';}';
        $css .= '#rt-footer .menu li {border-bottom: 1px solid '.$gantry->get('footercolor').';}';
        $css .= '.component-content h1, .component-content h2, .component-content h3, .component-content h4, .component-content h5, .component-content h6, .component-content h1 a, .component-content h2 a, .component-content h3 a, .component-content h4 a, .component-content h5 a, .component-content h6 a {color:'.$gantry->get('contentheadercolor').';}';
        $css .= '.button{background-color:'.$gantry->get('buttoncolor').';}';
        $css .= '#rt-menu ul.menu li.active > a, #rt-menu ul.menu li.active a:hover, #rt-menu ul.menu li a:hover, .menutop li.root.active > .item, .menutop li.active > span.item, .menutop li.root.active > .item:hover, .menu-type-splitmenu .menutop li.active .item, .menutop ul li > a.item:hover, .menutop ul li.f-menuparent-itemfocus > a.item, .menutop ul li.f-menuparent-itemfocus > span.item,.menutop li.root > .item:hover, .menutop li.active.root.f-mainparent-itemfocus > .item, .menutop li.root.f-mainparent-itemfocus > .item, .menu-type-splitmenu .menutop li:hover > .item, .menutop .fusion-js-subs ul li.active > a, .menutop li.root > .item, .menu-type-splitmenu .menutop li .item{color:'.$gantry->get('menucolor').';}';
        $css .= '.menutop ul li > .item:hover span, .menutop ul li.f-menuparent-itemfocus > a.item span, .menutop li.active > span.item, .menutop ul li.f-menuparent-itemfocus > span.item, .menutop .fusion-js-subs ul li.active > a span {color:'.$gantry->get('dropdownfontcolor').';}';
        $css .= '.menutop ul li > a.item:hover, .menutop ul li.f-menuparent-itemfocus > a.item, .menutop li.active > span.item, .menutop ul li.f-menuparent-itemfocus > span.item, .menutop .fusion-js-subs ul li.active > a {background-color:'.$gantry->get('dropdownbgcolor').';}';
        
        $gantry->addInlineStyle($css);

	}

}