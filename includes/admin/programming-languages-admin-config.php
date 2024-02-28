<?php
class ProgrammingLanguagesAdminConfig
{
    /**
     * Constructor.
     *
     * @date    21/07/22
     * @since   1.0.0
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
        add_action('init', [$this, 'programming_language_cpt']);
    }
    /**
     * Register a custom post type called "book".
     *
     * @see get_post_type_labels() for label keys.
     */
    function programming_language_cpt() {
        $labels = array(
            'name'                  => _x( 'Programming Languages', 'Post type general name', 'textdomain' ),
            'singular_name'         => _x( 'Programming Language', 'Post type singular name', 'textdomain' ),
            'menu_name'             => _x( 'Programming Languages', 'Admin Menu text', 'textdomain' ),
            'name_admin_bar'        => _x( 'Programming Language', 'Add New on Toolbar', 'textdomain' ),
            'add_new'               => __( 'Add New', 'textdomain' ),
            'add_new_item'          => __( 'Add New Programming Language', 'textdomain' ),
            'new_item'              => __( 'New Programming Language', 'textdomain' ),
            'edit_item'             => __( 'Edit Programming Language', 'textdomain' ),
            'view_item'             => __( 'View Programming Language', 'textdomain' ),
            'all_items'             => __( 'All Programming Languages', 'textdomain' ),
            'search_items'          => __( 'Search Programming Languages', 'textdomain' ),
            'parent_item_colon'     => __( 'Parent Programming Languages:', 'textdomain' ),
            'not_found'             => __( 'No programming languages found.', 'textdomain' ),
            'not_found_in_trash'    => __( 'No programming languages found in Trash.', 'textdomain' ),
            'featured_image'        => _x( 'Logo', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'set_featured_image'    => _x( 'Selectionner un logo', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'archives'              => _x( 'Programming Language archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
            'insert_into_item'      => _x( 'Insert into programming language', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
            'uploaded_to_this_item' => _x( 'Uploaded to this programming language', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
            'filter_items_list'     => _x( 'Filter programming languages list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
            'items_list_navigation' => _x( 'Programming Languages list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
            'items_list'            => _x( 'Programming Languages list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
            'item_link_description' => _x( 'Programming Language link description', 'Screen reader text for the “Item” link text. Added in 4.4', 'textdomain' ),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'menu_icon'           => 'dashicons-media-code',
            'rewrite'            => array( 'slug' => 'language' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'thumbnail', 'excerpt' ),
        );

        register_post_type( 'languages', $args );
    }
}
new ProgrammingLanguagesAdminConfig;
