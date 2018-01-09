<?php
/**
 *
 * @package vitae
 * @since vitae 1.0.0
 * @license GPL 2.0
 * 
 */

# ------------------------------------------------------------------------
# Theme definitions
# ------------------------------------------------------------------------

define( 'vitae_theme_version' , '1.0.0' );  				# Theme version
if ( ! isset( $content_width ) ) $content_width = 640;  	# Content Width

# ------------------------------------------------------------------------
# Theme incudes
# ------------------------------------------------------------------------

require_once( get_template_directory() . '/backend/functions-clean-up.php'			); 	# WordPress Head Clean-up
require_once( get_template_directory() . '/backend/functions-indent-head.php'		); 	# Ultra Geeky wp_head indentation
require_once( get_template_directory() . '/backend/functions-enqueue.php'			); 	# Enqueue Scripts and Styles
require_once( get_template_directory() . '/backend/functions-tgm.php'               );  # Recommended Plugins
require_once( get_template_directory() . '/backend/functions-welcome-widget.php'	); 	# Welcome Widget + Instructions
require_once( get_template_directory() . '/backend/functions-update-system.php'		); 	# Theme Update System