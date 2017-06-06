<?php
/*
 * Plugin Name:       Lablab Builder Accordion Module
 * Plugin URI:        https://github.com/team-ok/lablab-builder-accordion
 * Description:       Adds an accordion module to lablab builder.
 * Version:           1.0.0
 * Author:            Timo Klemm
 * Author URI:        https://github.com/team-ok
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       lablab-accordion
 * Domain Path:		  /languages
 */

if ( class_exists( 'Lablab_Module_Builder' ) ):

	class Lablab_Builder_Accordion_Module extends Lablab_Module_Builder {

		public function __construct(){

			// The module title.
			$this->title = 'Accordion';

			// The acf field key of the module.
			$this->key = 'field_lablab_accordion';

			// The acf field name of the module.
			$this->name = 'lablab-accordion';

			// The current version of the module.
			$this->version = '1.0';

			// The module-specific acf fields of the module.
			$this->fields = plugin_dir_path( __FILE__ ) . 'fields';

			// The absolute path to a partial template file that both retrieves content data and prints the output.
			$this->template_path = plugin_dir_path( __FILE__ ) . 'template/lablab-accordion.php';

			// The javascript file(s) to be included on public pages, but only when the module is being used.
			$this->public_js = plugin_dir_url( __FILE__ ) . 'js/lablab-accordion.js';

			// The uikit add-on components to be included.
			$this->uikit_addons = array('accordion');

			// The less fragment(s) to be added to the beans uikit less compiler.
			$this->less_fragments = plugin_dir_path( __FILE__ ) . 'less';

			// The text domain used for translation
			$this->text_domain = $this->name;

			// Relative path to WP_PLUGIN_DIR where the .mo file resides
			$this->domain_path = dirname( plugin_basename( __FILE__ ) ) . '/languages';
		}

	}

endif;

// register this module with lablab builder
add_filter( 'lablab_builder_modules', array( 'Lablab_Builder_Accordion_Module', 'register' ) );