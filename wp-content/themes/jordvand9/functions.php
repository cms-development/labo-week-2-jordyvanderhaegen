<?php
/**
 * Proper way to enqueue scripts and styles
 */


function jordvand9_enqueue_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_register_style('Bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    wp_enqueue_style('Bootstrap');
    //wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'jordvand9' ),
        'id' => 'main-sidebar',
     ) );
}
/**
 * Create CPT Recipe
 */
function scratch_register_recipes() {
    $labels = array(
        'name' => __('Recipes','scratch'),
        'singular_name' => __('Recipe','scratch'),
        'all_items' => __('All recipes','scratch'),
        'add_new_item' => __('Add New recipe','scratch'),
        'edit_item' => __('Edit recipe','scratch'),
        'new_item' => __('Add New recipe','scratch'),
        'view_item' => __('View recipe','scratch'),
        'search_item' => __('Search recipe','scratch'),
        'not_found' => __('Recipe not found','scratch'),
        'not_found_in_trash' => __('Recipe not found in the trash','scratch'),
        'parent_item_colon' => __('Parent recipe','scratch'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'recipes'),
        'capability_type' => 'post',
        'hierachical' => false,
        'taxonomies' => array(
            'category',
            'allergeen',
            'difficulty'
        ),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
            'custom-fields'
        ),
    );
    register_post_type('recipe', $args);
}

/**
 * Create all custom taxonomies for recipes
 */
function create_recipe_taxonomies() {
    $labels = array(
		'name'              => _x( 'Allergenen', 'taxonomy general name', 'scratch' ),
		'singular_name'     => _x( 'Allergeen', 'taxonomy singular name', 'scratch' ),
		'search_items'      => __( 'Search Allergenen', 'scratch' ),
		'all_items'         => __( 'All Allergenen', 'scratch' ),
		'parent_item'       => __( 'Parent Allergeen', 'scratch' ),
		'parent_item_colon' => __( 'Parent Allergeen:', 'scratch' ),
		'edit_item'         => __( 'Edit Allergeen', 'scratch' ),
		'update_item'       => __( 'Update Allergeen', 'scratch' ),
		'add_new_item'      => __( 'Add New Allergeen', 'scratch' ),
		'new_item_name'     => __( 'New Allergeen Name', 'scratch' ),
		'menu_name'         => __( 'Allergeen', 'scratch' ),
    );
    $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'allergeen' ),
    );
    register_taxonomy( 'allergeen', array( 'recipe' ), $args );
    $labels = array(
		'name'              => _x( 'Difficulty', 'taxonomy general name', 'scratch' ),
		'singular_name'     => _x( 'Difficulties', 'taxonomy singular name', 'scratch' ),
		'search_items'      => __( 'Search Difficulty', 'scratch' ),
		'all_items'         => __( 'All Difficulties', 'scratch' ),
		'parent_item'       => __( 'Parent Difficulty', 'scratch' ),
		'parent_item_colon' => __( 'Parent Difficulty:', 'scratch' ),
		'edit_item'         => __( 'Edit Difficulty', 'scratch' ),
		'update_item'       => __( 'Update Difficulty', 'scratch' ),
		'add_new_item'      => __( 'Add New Difficulty', 'scratch' ),
		'new_item_name'     => __( 'New Difficulty Name', 'scratch' ),
		'menu_name'         => __( 'Difficulty', 'scratch' ),
    );
    $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'difficulty' ),
    );
    register_taxonomy( 'difficulty', array( 'recipe' ), $args );
}
add_action( 'init', 'create_recipe_taxonomies', 0 );

/**
 * Create CPT Events
 */
function scratch_register_events() {
    $labels = array(
        'name' => __('Events','scratch'),
        'singular_name' => __('Event','scratch'),
        'all_items' => __('All events','scratch'),
        'add_new_item' => __('Add New event','scratch'),
        'edit_item' => __('Edit event','scratch'),
        'new_item' => __('Add New event','scratch'),
        'view_item' => __('View event','scratch'),
        'search_item' => __('Search event','scratch'),
        'not_found' => __('Event not found','scratch'),
        'not_found_in_trash' => __('Event not found in the trash','scratch'),
        'parent_item_colon' => __('Parent event','scratch'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'events'),
        'capability_type' => 'post',
        'hierachical' => false,
        'taxonomies' => array(
            'provincie',
            'post_tag',
            'setting'
        ),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
            'custom-fields'
        ),
    );
    register_post_type('event', $args);
}

/**
 * Create all custom taxonomies for recipes
 */
function create_event_taxonomies() {
    $labels = array(
		'name'              => _x( 'Provincie', 'taxonomy general name', 'scratch' ),
		'singular_name'     => _x( 'Provincies', 'taxonomy singular name', 'scratch' ),
		'search_items'      => __( 'Search provincies', 'scratch' ),
		'all_items'         => __( 'All provincies', 'scratch' ),
		'parent_item'       => __( 'Parent provincie', 'scratch' ),
		'parent_item_colon' => __( 'Parent provincie:', 'scratch' ),
		'edit_item'         => __( 'Edit provincie', 'scratch' ),
		'update_item'       => __( 'Update provincie', 'scratch' ),
		'add_new_item'      => __( 'Add New provincie', 'scratch' ),
		'new_item_name'     => __( 'New provincie Name', 'scratch' ),
		'menu_name'         => __( 'Provincie', 'scratch' ),
    );
    $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'provincie' ),
    );
    register_taxonomy( 'provincie', array( 'event' ), $args );
    $labels = array(
		'name'              => _x( 'Setting', 'taxonomy general name', 'scratch' ),
		'singular_name'     => _x( 'Settings', 'taxonomy singular name', 'scratch' ),
		'search_items'      => __( 'Search Setting', 'scratch' ),
		'all_items'         => __( 'All Settings', 'scratch' ),
		'parent_item'       => __( 'Parent Setting', 'scratch' ),
		'parent_item_colon' => __( 'Parent Setting', 'scratch' ),
		'edit_item'         => __( 'Edit Setting', 'scratch' ),
		'update_item'       => __( 'Update Setting', 'scratch' ),
		'add_new_item'      => __( 'Add New Setting', 'scratch' ),
		'new_item_name'     => __( 'New Setting Name', 'scratch' ),
		'menu_name'         => __( 'Setting', 'scratch' ),
    );
    $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'setting' ),
    );
    register_taxonomy( 'setting', array( 'event' ), $args );
}
add_action( 'init', 'create_event_taxonomies', 0 );

function scratch_register_activities() {
    $labels = array();
    $args = array();
    register_post_type('activity', $args);
}

/** register movies CPT **/
function scratch_register_movies() {
    $labels = array(
        /** Dubbele __ voor vertaling **/
        'name' => __('Movies','scratch'),
        'singular_name' => __('Movie','scratch'),
        'all_items' => __('All Movies','scratch'),
        'add_new_item' => __('Add New Movie','scratch'),
        'edit_item' => __('Edit Movie','scratch'),
        'new_item' => __('Add New Movie','scratch'),
        'view_item' => __('View Movie','scratch'),
        'search_item' => __('Search Movie','scratch'),
        'not_found' => __('Movie not found','scratch'),
        'not_found_in_trash' => __('Movie not found in the trash','scratch'),
        'parent_item_colon' => __('Parent movie','scratch'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'videos'),
        'capability_type' => 'post',
        'hierachical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumnail',
            'revisions',
            'custom-fields'
        ),
        'taxonomies' => array(
            'category' => 'post_tag'
        ),
        'menu_position' => 5,
        'exclude_from_search' => false,
            
    );
    register_post_type('movie', $args);
}
/**
 * Add custom field subtitle or recipe
 */
function scratch_add_recipe_box() {
    $screens = array('recipe');
    foreach($screens as $screen) {
        add_meta_box(
            'recipe_box',
            __('Custom Recipe Fields', 'scratch'),
            'scratch_recipe_box_callback',
            $screen
        );
    }
}
function scratch_recipe_box_callback($post) {
    wp_nonce_field('recipe_save_meta_box_data','recipe_meta_box_nonce');
    $subtitle = get_post_meta($post->ID, '_recipe_subtitle', true);
    echo '<label for="recipe_subtitle">' .  __('Subtitle', 'scratch').  '</label>';
    echo '<input style="width:100%; margin: 0;" type="text" id="recipe_subtitle" name="recipe_subtitle" size="255" value="' .  $subtitle . '">';
    $ingredient = get_post_meta($post->ID, '_recipe_ingredient', true);
    echo '<label for="recipe_ingredient">' .  __('Ingredient', 'scratch').  '</label>';
    echo '<input style="width:100%; margin: 0;" type="text" id="recipe_ingredient" name="recipe_ingredient" size="255" value="' .  $ingredient . '">';

}
add_action('add_meta_boxes', 'scratch_add_recipe_box');

function scratch_save_recipe_data($post_id) {
    // controleer voor de veiligheid
    
    if( ! isset( $_POST['recipe_meta_box_nonce'])) { return; }
    if( ! wp_verify_nonce( $_POST['recipe_meta_box_nonce'], 'recipe_save_meta_box_data')) { return; }
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) { return; }
    // heeft huidige user bevoegdheid tot bewerken
    if( ! current_user_can ( 'edit_post', $post_id )) { return; }
    // indien post value niet aanwezig is, return false
    if( ! isset( $_POST['recipe_subtitle']) && ! isset($_POST['recipe_ingredient'])) { return; }
    // subtitle uit post halen
    $subtitle = sanitize_text_field( $_POST['recipe_subtitle'] );
    $ingredient = sanitize_text_field( $_POST['recipe_ingredient'] );
    // post meta updaten
    update_post_meta($post_id, '_recipe_subtitle', $subtitle);
    update_post_meta($post_id, '_recipe_ingredient', $ingredient);

    if ( isset( $_POST['publisher'] ) ) {
        update_post_meta( $post_id, 'publisher', sanitize_text_field( $_POST['publisher'] ) );
    }
}
add_action('save_post','scratch_save_recipe_data');

// function custom_title($title) {
//     return '<span class="awesome-title">' . $title . '</span>';
// }

function scratch_filter_body($classes) {
    $classes = [];
    return $classes;
}

/* Filters */
// add_filter('the_title','custom_title');
add_filter('body_classes','scratch_filter_body');
add_theme_support('post-thumbnails');
/* Actions */
add_action('init','scratch_register_events');
add_action('init','scratch_register_activities');
add_action('init','scratch_register_recipes');
add_action('init','scratch_register_events');
add_action( 'wp_enqueue_scripts', 'jordvand9_enqueue_scripts' );
add_action( 'widgets_init', 'theme_slug_widgets_init');
add_action('init','scratch_register_movies');
?>