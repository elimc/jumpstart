<?php

namespace jumpstart;

/**
 * Automagically create a Custom Post Type (CPT).
 *
 * @link https://gist.github.com/dobbyloo/6188322 Original class that this class is based on.
 * @link https://www.youtube.com/channel/UC-l9uYZ3Os52NBiwi7Y_Yzg Video instructions on using this class.
 */
class CustomPost {

    protected $textdomain;
    protected $posts;

    public function __construct( $textdomain ) {
        // Initialize text domain.
        $this->textdomain = $textdomain;

        // Initialize the posts array.
        $this->posts = array();

        // Add the action hook calling the register_custom_post method.
        add_action( 'init', array( &$this, 'register_custom_post' ) );
    }

    /**
     * Create the Custom Post Type.
     *
     * @param string $type Internal name of CPT.
     * @param string $singular_label CPT Name in singular form.
     * @param string $plural_label CPT Name in plural form.
     * @param mixed $settings Custom user settings to override default CPT values.
     */
    public function make( $type, $singular_label, $plural_label, $settings = array() ) {

        // Define the default settings
        $default_settings = array(
            'labels' => array(
                'name' => __( $plural_label, $this->textdomain ),
                'singular_name' => __( $singular_label, $this->textdomain ),
                'add_new_item' => __( 'Add New ' . $singular_label, $this-> textdomain ),
                'edit_item' => __( 'Edit ' . $singular_label, $this->textdomain ),
                'new_item' => __( 'New ' . $singular_label, $this->textdomain ),
                'view_item' => __( 'View ' . $singular_label, $this->textdomain ),
                'search_items' => __( 'Search ' . $plural_label, $this->textdomain ),
                'not_found' => __( 'No ' . $plural_label . ' found', $this->textdomain ),
                'not_found_in_trash' => __( 'No ' . $plural_label . ' found in trash', $this->textdomain ),
                'parent_item_colon' => __( 'Parent ' . $singular_label, $this->textdomain ),
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 20,
            'menu_icon' => 'dashicons-admin-post',
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ),
            'rewrite' => array(
                'slug' => sanitize_title_with_dashes( $plural_label )
            )
        );

        // Override any settings provided by user and store the settings with the posts array.
        $this->posts[$type] = array_merge( $default_settings, $settings );
    }

    public function register_custom_post() {
        // Loop through the registered posts and register all posts stored in the array.
        foreach ( $this->posts as $key => $value ) {
            register_post_type( $key, $value );
        }
    }

}
