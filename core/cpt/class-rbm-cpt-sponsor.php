<?php

/**
 * Class RBM_CPT_Sponsors
 *
 * Creates the post type.
 *
 * @since 1.0.0
 */
class RBM_CPT_Sponsors extends RBM_CPT {

	public $post_type = 'sponsors';
	public $label_singular = null;
	public $label_plural = null;
	public $labels = array();
	public $icon = 'welcome-write-blog';
	public $post_args = array(
		'hierarchical' => false,
		'supports'     => array( 'title', 'editor', 'author', 'thumbnail' ),
		'has_archive'  => true,
		'rewrite'      => array(
			'slug'       => 'sponsor',
			'with_front' => false,
			'feeds'      => false,
			'pages'      => true
		),
		'capability_type' => 'post',
	);

	/**
	 * RBM_CPT_Sponsors constructor.
	 *
	 * @since 1.0.0
	 */
	function __construct() {

		// This allows us to Localize the Labels
		$this->label_singular = __( 'Sponsor', 'cpt-sponsors' );
		$this->label_plural   = __( 'Sponsors', 'cpt-sponsors' );

		$this->labels = array(
			'menu_name' => __( 'Sponsors', 'cpt-sponsors' ),
			'all_items' => __( 'All Sponsors', 'cpt-sponsors' ),
		);

		parent::__construct();
		
	}
	
}