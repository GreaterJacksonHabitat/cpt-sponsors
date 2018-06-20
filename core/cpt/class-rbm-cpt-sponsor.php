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
		'supports'     => array( 'title', 'author', 'thumbnail' ),
		'has_archive'  => false,
		'public'		=> false,
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
		
		add_action( 'add_meta_boxes', array( $this, 'add_sponsor_metabox' ) );
		
	}
	
	/**
	 * Create Metaboxes for Sponsors
	 * 
	 * @since       1.0.0
	 * @return      void
	 */
	public function add_sponsor_metabox() {

		add_meta_box(
			'sponsor-meta',
			__( 'Sponsor Meta', 'cpt-sponsors' ),
			array( $this, 'metabox_content' ),
			'sponsors',
			'normal'
		);

	}
	
	/**
	 * Sponsors Metabox Content
	 * 
	 * @since       1.0.0
	 * @return      void
	 */
	public function metabox_content() {
		
		rbm_cpts_do_field_text( array(
			'name' => 'gjh_sponsor_website',
			'label' => __( 'Sponsor Website', 'cpt-sponsors' ),
			'group' => 'gjh_sponsor',
			'input_atts' => array(
				'style' => 'width: 100%',
			),
		) );
	
		rbm_cpts_init_field_group( 'gjh_sponsor' );
		
	}
	
}