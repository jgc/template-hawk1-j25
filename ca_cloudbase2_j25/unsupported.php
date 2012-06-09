<?php
/**
 * @package Gantry Template Framework - RocketTheme
 * @version @VERSION@ @BUILD_DATE@
 * @author RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - @COPYRIGHT_YEAR@ RocketTheme, LLC
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */
// no direct access
defined( '_JEXEC' ) or die( 'Restricted index access' );

// load and inititialize gantry class
require_once('lib/gantry/gantry.php');
$gantry->init();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $gantry->language; ?>" lang="<?php echo $gantry->language;?>">
  <head>
    <?php 
        $gantry->displayHead();
        $gantry->addStyles(array('template.css','joomla.css','unsupported.css'));
      ?>
  </head>
  <body <?php echo $gantry->displayBodyTag(); ?>>
    <div id="rt-main-surround">
      <div id="rt-main-overlay">
        <div id="rt-main" class="sa3-mb9">
          <div class="rt-container">
            <div class="rt-grid-8 rt-push-2">
              <div class="rt-block">
                <h1>Unsupported Browser</h1>
                    <p>
                  You are using a browser that is not supported by this website.  That probably means your browser is woefully out of date, insecure, and just generally lacking in standards.  Luckily for you there are literally 10s of modern, standards compatible browsers available to you at no cost.  All you need to do is simply take the time to install one. </p>
                <p>
                We suggest installing the latest version of <a href="http://www.mozilla.com/en-US/firefox/firefox.html">Firefox</a>, <a href="http://www.google.com/chrome">Google Chrome</a>, <a href="http://www.apple.com/safari/download/">Safari</a>, heck, even <a href="http://www.opera.com/">Opera</a> would be a better option.  
                </p>
                
                <p class="note">NOTE: Even though Internet Explorer 8 is an improvement on version 6 and 7, we cannot in good conscience recommend it.  It's a pretty poor browser, with many rendering bugs, and poor JavaScript performance.</p>
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        </div>
      </div>
  </body>
</html>
<?php
$gantry->finalize();
?>

