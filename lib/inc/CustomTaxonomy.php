<?php

namespace jumpstart;

/**
 * Automagically create a Custom Taxonomy.
 *
 * @link https://gist.github.com/dobbyloo/6478616 Original class that this class is based on.
 * @link https://www.youtube.com/watch?v=Vetzgkv_eb8 Video instructions on using this class.
 */
class CustomTaxonomy
{

    protected $textdomain;
    protected $taxonomies;

    public function __construct($textdomain)
    {
        // Initialize text domain
        $this->textdomain = $textdomain;

        $this->taxonomies = array();

        add_action('init', array(&$this, 'register_taxonomy'));
    }

    public function make($type, $singular_label, $plural_label, $post_types, $settings = array())
    {

        $default_settings = array(
            'labels' => array(
                'name' => __($plural_label, $this->textdomain),
                'singular_name' => __($singular_label, $this->textdomain),
                'add_new_item' => __('New ' . $singular_label . ' Name', $this->textdomain),
                'separate_items_with_commas' => __('Separate ' . strtolower($plural_label) . ' with commas', $this->textdomain),
                'new_item_name' => __('Add New ' . $singular_label, $this->textdomain),
                'edit_item' => __('Edit ' . $singular_label, $this->textdomain),
                'update_item' => __('Update ' . $singular_label, $this->textdomain),
                'add_or_remove_items' => __('Add or remove ' . strtolower($plural_label), $this->textdomain),
                'search_items' => __('Search ' . $plural_label, $this->textdomain),
                'popular_items' => __('Popular ' . $plural_label, $this->textdomain),
                'all_items' => __('All ' . $plural_label, $this->textdomain),
                'parent_item' => __('Parent ' . $singular_label, $this->textdomain),
                'choose_from_most_used' => __('Choose from the most used ' . strtolower($plural_label), $this->textdomain),
                'parent_item_colon' => __('Parent ' . $singular_label, $this->textdomain),
            ),
            'public' => true,
            'rewrite' => array(
                'slug' => sanitize_title_with_dashes($plural_label)
            )
        );

        $this->taxonomies[$type]['post_types'] = $post_types;
        $this->taxonomies[$type]['args'] = array_merge($default_settings, $settings);
    }

    public function register_taxonomy()
    {
        foreach ($this->taxonomies as $key => $value) {
            register_taxonomy($key, $value['post_types'], $value['args']);
        }
    }

}
