<?php
/**
 * @version   1.10 January 24, 2012
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2012 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
 
class RokInstallerEvents extends JPlugin {
 	public function onExtensionAfterInstall($installer, $eid)
	{
        $lang = JFactory::getLanguage();
        $lang->load('install_override',dirname(__FILE__), $lang->getTag(), true);
	}
}
