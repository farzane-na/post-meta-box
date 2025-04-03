<?php
/*
 * Plugin Name:       Post extra Meta Box
 * Plugin URI:        https://github.com/farzane-na/post-meta-box
 * Description:       Adds a custom meta box to posts, allowing authors to enter an additional title and text. Perfect for adding extra details, summaries, or notes.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Farzane Nazmabadi
 * Author URI:        https://farzanenazmabadi.ir
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       extra-meta-box
 * Domain Path:       /languages
 */

 define("PLUGIN_DIR_PATH",plugin_dir_path( __FILE__ ));
 define("PLUGIN_DIR_URL",plugin_dir_url( __FILE__ ));
 define("META_PLUGIN_VERSION","1.0.0");

 if ( !defined( 'ABSPATH' ) ) {
    exit;
};

require_once PLUGIN_DIR_PATH."includes/admin.php";