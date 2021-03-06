<?php
/**
 * Plugin Name: BlastCaster
 * Description: Keep all your content marketing streams relevant by quickly
 * and easily create engaging posts for content you've curated
 * Version:     1.0.0
 * Author:      Terescode, LLC
 * Author URI:  http://www.terescode.com
 * Text Domain: blastcaster
 * Domain Path: /languages
 * @package BlastCaster
 */

require_once 'includes/constants.php';

if ( ! \Terescode\BlastCaster\is_wpinc_defined() ) {
	return -1;
}

require_once BC_PLUGIN_DIR . 'includes/blastcaster-plugin.php';

$blastcaster_plugin = Terescode\BlastCaster\create_plugin();
$blastcaster_plugin->init();
