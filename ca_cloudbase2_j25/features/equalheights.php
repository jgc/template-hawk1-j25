<?php
/**
 * @package     gantry
 * @subpackage  features
 * @version		1.0
 * @author		CloudAccess.net
 * @copyright 	Copyright (C) CloudAccess.net
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
class GantryFeatureEqualHeights extends GantryFeature {
    var $_feature_name = 'equalheights';

	function init() {
		global $gantry, $option;

        if ($this->get('enabled')) {
            $gantry->addScript('equalheights.js');
        }
    }

	function isOrderable() {
		return false;
	}

}