<?php
// load_theme_textdomain('musique', get_template_directory() . '/languages');

// Etape 1
require_once locate_template ( '/lib/init.php' ); // Initial theme setup and constants
require_once locate_template ( '/lib/scripts.php' ); // Scripts and stylesheets

// Etape 2
require_once locate_template ( '/lib/custom_types.php' ); // Post Types
require_once locate_template ( '/lib/taxonomies.php' ); // Taxonomies
require_once locate_template ( '/lib/utils.php' ); // Utils methods
require_once locate_template ( '/lib/metaboxes.php' ); // Metaboxes

// Etape 3
require_once locate_template ( '/framework/ReduxCore/framework.php' ); // Options framework
require_once locate_template ( '/framework/options.php' ); // Options framework
require_once locate_template ( '/lib/custom_css.php' ); // Frontend Custom CSS
