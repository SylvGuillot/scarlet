<?php
define ( 'OPTIONS_PATH', get_template_directory_uri () . '/framework/options/' );
/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */
if (! class_exists ( 'Redux_Framework_musique_config' )) {
	class Redux_Framework_musique_config {
		public $args = array ();
		public $sections = array ();
		public $theme;
		public $ReduxFramework;
		public $artists;
		public function __construct() {
			if (! class_exists ( 'ReduxFramework' )) {
				return;
			}
			
			// This is needed. Bah WordPress bugs. ;)
			if (true == Redux_Helpers::isTheme ( __FILE__ )) {
				$this->initSettings ();
			} else {
				add_action ( 'plugins_loaded', array (
						$this,
						'initSettings' 
				), 10 );
			}
		}
		public function initSettings() {
			$this->setArguments ();
			$this->setSections ();
			$this->ReduxFramework = new ReduxFramework ( $this->sections, $this->args );
		}

		public function setSections() {
			$this->sections [] = array (
					'title' => __ ( 'Home Settings', 'redux-framework-musique' ),
					'desc' => '',
					'icon' => 'el-icon-home',
					'fields' => array (
							array (
									'id' => 'global_layout',
									'type' => 'image_select',
									'title' => __ ( 'Site Layout Style', 'redux-framework-musique' ),
									'subtitle' => __ ( 'Select Boxed or Wide Site Layout Style', 'virtue' ),
									'options' => array (
											'fluid' => array (
													'alt' => 'Wide Layout',
													'img' => OPTIONS_PATH . 'img/1c.png' 
											),
											'boxed' => array (
													'alt' => 'Boxed Layout',
													'img' => OPTIONS_PATH . 'img/3cm.png' 
											) 
									),
									'default' => 'boxed',
									'hint' => array (
											'title' => 'Hint Title',
											'content' => 'This is a <b>hint</b>' 
									) 
							),
							array (
									'id' => 'logo_options',
									'type' => 'info',
									'desc' => __ ( 'Logo Options', 'redux-framework-musique' ) 
							),
							array (
									'id' => 'logo_layout',
									'type' => 'image_select',
									'title' => __ ( 'Logo Layout', 'redux-framework-musique' ),
									'subtitle' => __ ( 'Choose how you want your logo to be laid out', 'redux-framework-musique' ),
									'options' => array (
											'logoleft' => array (
													'alt' => 'Logo Left Layout',
													'img' => OPTIONS_PATH . 'img/logo_layout_01.png' 
											),
											'logohalf' => array (
													'alt' => 'Logo Half Layout',
													'img' => OPTIONS_PATH . 'img/logo_layout_03.png' 
											) 
									),
									'default' => 'logoleft' 
							),
							array (
									'id' => 'logo_upload',
									'type' => 'media',
									'url' => true,
									'title' => __ ( 'Logo', 'redux-framework-musique' ),
									'subtitle' => __ ( 'Upload your Logo. If left blank theme will use site name.', 'redux-framework-musique' ) 
							) 
					) 
			);
			$this->sections [] = array (
					'title' => __ ( 'Styling', 'redux-framework-musique' ),
					'desc' => '',
					'icon' => 'el-icon-brush',
					'fields' => array (
							array (
									'id' => 'background',
									'type' => 'background',
									'url' => true,
									'title' => __ ( 'Theme Background', 'redux-framework-musique' ),
									'subtitle' => __ ( '', 'redux-framework-musique' ),
									'background-attachment' => 'false',
									'background-size' => 'false',
									'output' => array (
											'body' 
									) 
							),
							array (
									'id'=>'font_h3',
									'type' => 'typography',
									'title' => __('H3 Headings', 'redux-framework-musique'),
									//'compiler'=>true, // Use if you want to hook in your own CSS compiler
									'font-family'=>true,
									'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
									'font-backup'=>false, // Select a backup non-google font in addition to a google font
									'font-style'=>true, // Includes font-style and weight. Can use font-style or font-weight to declare
									'subsets'=>true, // Only appears if google is true and subsets not set to false
									'font-size'=>true,
									'line-height'=>true,
									'text-align' => false,
									//'word-spacing'=>false, // Defaults to false
									//'all_styles' => true,
									'color'=>true,
									'preview'=>true, // Disable the previewer
									'output' => array('h3'),
									'subtitle'=> __("Choose Size and Style for h3", 'redux-framework-musique'),
									'default'=> array(
											'font-family'=>'Lato',
											'color'=>"",
											'font-style'=>'400',
											'font-size'=>'24px',
											'line-height'=>'40px', ),
							),
			 
					) 
			);
			$this->sections [] = array (
					'title' => __ ( "Diaporama Accueil", 'redux-framework-musique' ),
					'desc' => '',
					'icon' => 'el-icon-brush',
					'fields' => array (
							array (
									'id' => 'diaporama_options',
									'type' => 'info',
									'desc' => __ ( "Options du diaporama de page d'accueil", 'redux-framework-musique' ) 
							),
							array (
									'id' => 'diaporama-select',
									'type' => 'select',
									'title' => __ ( "Sélectionner un diaporama pour la page d'accueil", 'redux-framework-musique' ),
									'subtitle' => __ ( "Si vous ne voulez pas de diaporama d'images sur votre page d'accueil, choisissez Aucun.", 'redux-framework-musique' ),
									'options' => array (
											'none' => 'Aucun',
											'meta_slider' => 'Meta Slider',
											'bx_slider' => 'BxSlider',
											'flex_slider' => 'Flex Slider',
											'musique_slider' => 'Musique Slider' 
									),
									'default' => 'none' 
							),
							array (
									'id' => 'diaporama-shortcode',
									'type' => 'text',
									'title' => __ ( "Si diaporama (slider) Meta-slider ou en cas d'utilisation de tout shortcode", 'redux-framework-musique' ),
									'subtitle' => __ ( "Coller le shortcode ici", 'redux-framework-musique' ) 
							),
							array (
									'id' => 'image_diaporama_options',
									'type' => 'info',
									'desc' => __ ( "Images du diaporama de la page d'accueil", 'redux-framework-musique' ) 
							),
							array (
									'id' => 'slides_accueil',
									'type' => 'slides',
									'title' => __ ( "Images du diaporama", 'redux-framework-musique' ),
									'subtitle' => __ ( "Utilisez des images larges pour un meilleur effet", 'redux-framework-musique' ),
									'placeholder' => array (
											'title' => __ ( 'This is a title', 'redux-framework-musique' ),
											'description' => __ ( 'Description Here', 'redux-framework-musique' ),
											'url' => __ ( 'Give us a link!', 'redux-framework-musique' ) 
									) 
							),
							array (
									'id' => 'bxslider_diaporama_options',
									'type' => 'info',
									'desc' => __ ( "Options du diaporama de type BxSlider ou FlexSlider ou Musique de la page d'accueil", 'redux-framework-musique' ) 
							),
							array (
									'id' => 'slider_accueil_size_width',
									'type' => 'slider',
									'title' => __ ( 'Slider Max Width', 'redux-framework-musique' ),
									'subtitle' => __ ( '', 'redux-framework-musique' ),
									"default" => "400",
									"min" => "100",
									"step" => "10",
									"max" => "600" 
							),
							array (
									'id' => 'slider_accueil_min_slides',
									'type' => 'slider',
									'title' => __ ( 'Slider Min Slides', 'redux-framework-musique' ),
									'subtitle' => __ ( '', 'redux-framework-musique' ),
									"default" => "2",
									"min" => "1",
									"step" => "1",
									"max" => "4" 
							),
							array (
									'id' => 'slider_accueil_max_slides',
									'type' => 'slider',
									'title' => __ ( 'Slider Max Slides', 'redux-framework-musique' ),
									'subtitle' => __ ( '', 'redux-framework-musique' ),
									"default" => "2",
									"min" => "1",
									"step" => "1",
									"max" => "5" 
							),
							array (
									'id' => 'slider_accueil_margin_slides',
									'type' => 'slider',
									'title' => __ ( 'Slider Margin Slides', 'redux-framework-musique' ),
									'subtitle' => __ ( '', 'redux-framework-musique' ),
									"default" => "30",
									"min" => "10",
									"step" => "5",
									"max" => "60" 
							),
							array (
									'id' => 'slider_accueil_pager_slides',
									'type' => 'switch',
									'title' => __ ( 'Slider Pager Slides', 'redux-framework-musique' ),
									'subtitle' => __ ( '', 'redux-framework-musique' ),
									"default" => false 
							),
							array (
									'id' => 'slider_accueil_captions_slides',
									'type' => 'switch',
									'title' => __ ( 'Slider Captions Slides', 'redux-framework-musique' ),
									'subtitle' => __ ( '', 'redux-framework-musique' ),
									"default" => true 
							),
							array (
									'id' => 'slider_accueil_moveslides_slides',
									'type' => 'slider',
									'title' => __ ( 'Slider Move Slides', 'redux-framework-musique' ),
									'subtitle' => __ ( '', 'redux-framework-musique' ),
									"default" => "1",
									"min" => "1",
									"step" => "1",
									"max" => "3" 
							) 
					) 
			);
		}
		/**
		 * All the possible arguments for Redux.
		 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
		 */
		public function setArguments() {
			$theme = wp_get_theme (); // For use with some settings. Not necessary.
			
			$this->args = array (
					
					// TYPICAL -> Change these values as you need/desire
					'opt_name' => 'musique',
					
					// This is where your data is stored in the database and also becomes your global variable name.
					'display_name' => $theme->get ( 'Name' ),
					
					// Name that appears at the top of your panel
					'display_version' => $theme->get ( 'Version' ),
					
					// Version that appears at the top of your panel
					'menu_type' => 'menu',
					
					// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
					'allow_sub_menu' => true,
					
					// Show the sections below the admin menu item or not
					'menu_title' => __ ( 'Theme Options', 'redux-framework-musique' ),
					'page_title' => __ ( 'Theme Options', 'redux-framework-musique' ),
					
					// You will need to generate a Google API key to use this feature.
					// Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
					'google_api_key' => '',
					
					// Set it you want google fonts to update weekly. A google_api_key value is required.
					'google_update_weekly' => false,
					
					// Must be defined to add google fonts to the typography module
					'async_typography' => true,
					
					// Use a asynchronous font on the front end or font string
					// 'disable_google_fonts_link' => true, // Disable this in case you want to create your own google fonts loader
					'admin_bar' => true,
					
					// Show the panel pages on the admin bar
					'admin_bar_icon' => 'dashicons-portfolio',
					
					// Choose an icon for the admin bar menu
					'admin_bar_priority' => 50,
					
					// Choose an priority for the admin bar menu
					'global_variable' => '',
					
					// Set a different name for your global variable other than the opt_name
					'dev_mode' => false,
					
					// Show the time the page took to load, etc
					'update_notice' => true,
					
					// If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
					'customizer' => true,
					
					// Enable basic customizer support
					// 'open_expanded' => true, // Allow you to start the panel in an expanded way initially.
					// 'disable_save_warn' => true, // Disable the save warning when a user changes a field
					
					// OPTIONAL -> Give you extra features
					'page_priority' => null,
					
					// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
					'page_parent' => 'themes.php',
					
					// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
					'page_permissions' => 'manage_options',
					
					// Permissions needed to access the options panel.
					'menu_icon' => '',
					
					// Specify a custom URL to an icon
					'last_tab' => '',
					
					// Force your panel to always open to a specific tab (by id)
					'page_icon' => 'icon-themes',
					
					// Icon displayed in the admin panel next to your menu_title
					'page_slug' => '_options',
					
					// Page slug used to denote the panel
					'save_defaults' => true,
					
					// On load save the defaults to DB before user clicks save or not
					'default_show' => false,
					
					// If true, shows the default value next to each field that is not the default value.
					'default_mark' => '',
					
					// What to print by the field's title if the value shown is default. Suggested: *
					'show_import_export' => true,
					
					// Shows the Import/Export panel when not used as a field.
					
					// CAREFUL -> These options are for advanced use only
					'transient_time' => 60 * MINUTE_IN_SECONDS,
					'output' => true,
					
					// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
					'output_tag' => true,
					
					// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
					// 'footer_credit' => '', // Disable the footer credit of Redux. Please leave if you can help it.
					
					// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
					'database' => '',
					
					// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
					'system_info' => false,
					
					// REMOVE
					
					// HINTS
					'hints' => array (
							'icon' => 'icon-question-sign',
							'icon_position' => 'right',
							'icon_color' => 'lightgray',
							'icon_size' => 'normal',
							'tip_style' => array (
									'color' => 'light',
									'shadow' => true,
									'rounded' => false,
									'style' => '' 
							),
							'tip_position' => array (
									'my' => 'top left',
									'at' => 'bottom right' 
							),
							'tip_effect' => array (
									'show' => array (
											'effect' => 'slide',
											'duration' => '500',
											'event' => 'mouseover' 
									),
									'hide' => array (
											'effect' => 'slide',
											'duration' => '500',
											'event' => 'click mouseleave' 
									) 
							) 
					) 
			);
		}
	}
	
	global $reduxConfig;
	$reduxConfig = new Redux_Framework_musique_config ();
} else {
	echo "The class named Redux_Framework_sample_config has already been called. <strong>Developers, you need to prefix this class with your company name or you'll run into problems!</strong>";
}
