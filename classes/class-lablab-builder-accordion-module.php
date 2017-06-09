<?php

/**
 * The lablab builder accordion module core class.
 *
 * @since     1.0.0
 */

if ( class_exists( 'Lablab_Module_Builder' ) ):

	class Lablab_Builder_Accordion_Module extends Lablab_Module_Builder {

		public function __construct(){

			// The module title.
			$this->title = __( 'Accordion', 'lablab-accordion' );

			// The acf field key of the module.
			$this->key = 'field_lablab_accordion';

			// The acf field name of the module.
			$this->name = 'lablab-accordion';

			// The current version of the module.
			$this->version = '1.0.0';

			// The module-specific acf fields of the module.
			$this->fields = plugin_dir_path( __DIR__ ) . 'fields';

			// The absolute path to a partial template file that both retrieves content data and prints the output.
			$this->template_path = plugin_dir_path( __DIR__ ) . 'template/lablab-accordion.php';

			// The javascript file(s) to be included on public pages, but only when the module is being used.
			$this->public_js = plugin_dir_url( __DIR__ ) . 'js/lablab-accordion.js';

			// The uikit add-on components to be included.
			$this->uikit_addons = array('accordion');

			// The less fragment(s) to be added to the beans uikit less compiler.
			$this->less_fragments = plugin_dir_path( __DIR__ ) . 'less';

		}

	}

endif;