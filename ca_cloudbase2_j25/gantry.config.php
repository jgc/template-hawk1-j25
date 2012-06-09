<?php
/**
 * @package 	Gantry Template Framework - RocketTheme
 * @version 	3.2.0 March 4, 2011
 * @author 		RocketTheme http://www.rockettheme.com
 * @copyright	Copyright (C) 2007 - 2011 RocketTheme, LLC
 * @license 	http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */
defined('JPATH_BASE') or die();

$gantry_config_mapping = array(
    'belatedPNG' => 'belatedPNG',
	'ie6Warning' => 'ie6Warning'
);

$gantry_presets = array(
    'presets' => array(
        'preset1' => array(
            'name' => 'Preset 1',
			'bgcolor' => '#0e96cf',
			'moduleheadercolor' => '#0e96cf',
			'footercolor' => '#042b3c',
			'linkcolor' => '#2e8fd4',
			'contentheadercolor' => '#0e96cf',
			'pattern' => 'pattern1',
			'moduleheadertextcolor1' => '#ffffff',
			'moduleheadertextcolor2' => '#0e96cf',
			'buttoncolor' => '#0e96cf',
			'menucolor' => '#4696bd',
            'font-family' => 'helvetica'
        ),
        'preset2' => array(
            'name' => 'Preset 2',
			'bgcolor' => '#c32e09',
			'moduleheadercolor' => '#df611c',
			'footercolor' => '#042b3c',
			'linkcolor' => '#d33207',
			'contentheadercolor' => '#f7860d',
			'pattern' => 'pattern2',
			'moduleheadertextcolor1' => '#ffffff',
			'moduleheadertextcolor2' => '#df611c',
			'buttoncolor' => '#bf180a',
			'menucolor' => '#c32e09',
            'font-family' => 'helvetica'
        ),

		'preset3' => array(
            'name' => 'Preset 3',
			'bgcolor' => '#b3ca07',
			'moduleheadercolor' => '#84aa37',
			'footercolor' => '#394004',
			'linkcolor' => '#7f8e0b',
			'contentheadercolor' => '#849313',
			'pattern' => 'pattern4',
			'moduleheadertextcolor1' => '#ffffff',
			'moduleheadertextcolor2' => '#84aa37',
			'buttoncolor' => '#719724',
			'menucolor' => '#84aa37',
            'font-family' => 'helvetica'
        ),

		'preset4' => array(
            'name' => 'Preset 4',
			'bgcolor' => '#dde6e8',
			'moduleheadercolor' => '#4da0d2',
			'footercolor' => '#4c545a',
			'linkcolor' => '#4da0d2',
			'contentheadercolor' => '#4da0d2',
			'pattern' => 'pattern5',
			'moduleheadertextcolor1' => '#ffffff',
			'moduleheadertextcolor2' => '#4da0d2',
			'buttoncolor' => '#97a6b3',
			'menucolor' => '#4c545a',
            'font-family' => 'helvetica'
        ),

		'preset5' => array(
            'name' => 'Preset 5',
			'bgcolor' => '#393939',
			'moduleheadercolor' => '#393939',
			'footercolor' => '#efefef',
			'linkcolor' => '#0a93cb',
			'contentheadercolor' => '#4b4b4b',
			'pattern' => 'pattern7',
			'moduleheadertextcolor1' => '#ffffff',
			'moduleheadertextcolor2' => '#393939',
			'buttoncolor' => '#0891cc',
			'menucolor' => '#1097ce',
            'font-family' => 'helvetica'
        ),

		'preset6' => array(
            'name' => 'Preset 6',
			'bgcolor' => '#e0ded5',
			'moduleheadercolor' => '#aea583',
			'footercolor' => '#494638',
			'linkcolor' => '#7b7250',
			'contentheadercolor' => '#7b7250',
			'pattern' => 'pattern6',
			'moduleheadertextcolor1' => '#ffffff',
			'moduleheadertextcolor2' => '#aea583',
			'buttoncolor' => '#958d6e',
			'menucolor' => '#756f59',
            'font-family' => 'helvetica'
        ),

		'preset7' => array(
            'name' => 'Preset 7',
			'bgcolor' => '#472c53',
			'moduleheadercolor' => '#472c53',
			'footercolor' => '#f5f5f5',
			'linkcolor' => '#5a1f76',
			'contentheadercolor' => '#513161',
			'pattern' => 'pattern9',
			'moduleheadertextcolor1' => '#ffffff',
			'moduleheadertextcolor2' => '#472c53',
			'buttoncolor' => '#584063',
			'menucolor' => '#584063',
            'font-family' => 'helvetica'
        ),

		'preset8' => array(
            'name' => 'Preset 8',
			'bgcolor' => '#e87727',
			'moduleheadercolor' => '#e87727',
			'footercolor' => '#ffffff',
			'linkcolor' => '#e27726',
			'contentheadercolor' => '#e27726',
			'pattern' => 'pattern10',
			'moduleheadertextcolor1' => '#ffffff',
			'moduleheadertextcolor2' => '#472c53',
			'buttoncolor' => '#e27726',
			'menucolor' => '#e87727',
            'font-family' => 'helvetica'
        ),

		'preset9' => array(
            'name' => 'Preset 9',
			'bgcolor' => '#64bcb1',
			'moduleheadercolor' => '#52403b',
			'footercolor' => '#173935',
			'linkcolor' => '#2d897e',
			'contentheadercolor' => '#42948a',
			'pattern' => 'pattern8',
			'moduleheadertextcolor1' => '#ffffff',
			'moduleheadertextcolor2' => '#52403b',
			'buttoncolor' => '#64bcb1',
			'menucolor' => '#52403b',
            'font-family' => 'helvetica'
        ),

		'preset10' => array(
            'name' => 'Preset 10',
			'bgcolor' => '#262626',
			'moduleheadercolor' => '#393939',
			'footercolor' => '#ffffff',
			'linkcolor' => '#656565',
			'contentheadercolor' => '#323232',
			'pattern' => 'pattern3',
			'moduleheadertextcolor1' => '#ffffff',
			'moduleheadertextcolor2' => '#393939',
			'buttoncolor' => '#f3b74c',
			'menucolor' => '#373737',
            'font-family' => 'helvetica'
        ),

		'preset11' => array(
            'name' => 'Preset 11',
			'bgcolor' => '#1b6a95',
			'moduleheadercolor' => '#2472bf',
			'footercolor' => '#ffffff',
			'linkcolor' => '#0891cc',
			'contentheadercolor' => '#2472bf',
			'pattern' => 'pattern10',
			'moduleheadertextcolor1' => '#ffffff',
			'moduleheadertextcolor2' => '#2472bf',
			'buttoncolor' => '#2472bf',
			'menucolor' => '#1b6a95',
            'font-family' => 'helvetica'
        )
    )
);

$gantry_browser_params = array(
    'ie6' => array(
        'backgroundlevel' => 'low',
        'bodylevel' => 'low'
    )
);

$gantry_belatedPNG = array('.png','#rt-logo');

$gantry_ie6Warning = "<h3>IE6 DETECTED: Currently Running in Compatibility Mode</h3><h4>This site is compatible with IE6, however your experience will be enhanced with a newer browser</h4><p>Internet Explorer 6 was released in August of 2001, and the latest version of IE6 was released in August of 2004.  By continuing to run Internet Explorer 6 you are open to any and all security vulnerabilities discovered since that date.  In March of 2009, Microsoft released version 8 of Internet Explorer that, in addition to providing greater security, is faster and more standards compliant than both version 6 and 7 that came before it.</p> <br /><a class='external'  href='http://www.microsoft.com/windows/internet-explorer/?ocid=ie8_s_cfa09975-7416-49a5-9e3a-c7a290a656e2'>Download Internet Explorer 8 NOW!</a>";
