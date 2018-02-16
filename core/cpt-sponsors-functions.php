<?php
/**
 * Provides helper functions.
 *
 * @since	  1.0.0
 *
 * @package	CPT_Sponsors
 * @subpackage CPT_Sponsors/core
 */
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Returns the main plugin object
 *
 * @since		1.0.0
 *
 * @return		CPT_Sponsors
 */
function CPTSPONSORS() {
	return CPT_Sponsors::instance();
}