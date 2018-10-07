<?php 
// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Enable featured image support in custom theme
add_theme_support('post-thumbnails');

// Proper way to enqueue scripts and styles
add_action( 'wp_enqueue_scripts', 'cedrvanh_enqueue_scripts' );

function cedrvanh_enqueue_scripts() {
    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );    
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

// Register primary navigation menu
add_action('init', 'cedrvanh_register_primary_menu');

function cedrvanh_register_primary_menu() {
  register_nav_menu('cedrvanh_primary_menu', __('Hoofdmenu'));
}

// Register sidebar
add_action( 'widgets_init', 'cedrvanh_register_sidebar' );

function cedrvanh_register_sidebar() {
  $args = array(
    'name'          => 'Cedrvanh Sidebar',
    'id'            => 'cedrvanh-sidebar',
    'description'   => 'Sidebar for the cedrvanh theme',
    'class'         => '',
    'before_widget' => '<p id="%1$s" class="widget %2$s">',
    'after_widget'  => '</p>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' 
  );

  register_sidebar( $args );
}

// Register custom post type Recipe
add_action('init', 'cedrvanh_register_recipes');

function cedrvanh_register_recipes() {
  $labels = array(
    'name' => __('Recipes', 'cedrvanh'),
    'singular' => __('Recipe', 'cedrvanh'),
    'add_new' => __('Add New Recipe', 'cedrvanh'),
    'all_items' => __('All Recipes', 'cedrvanh'),
    'add_new' => __('Add New Recipe', 'cedrvanh'),
    'edit_item' => __('Edit Recipe', 'cedrvanh'),
    'new_item' => __('New Recipe', 'cedrvanh'),
    'view_item' => __('View Recipe', 'cedrvanh'),
    'search_item' => __('Search Recipe', 'cedrvanh'),
    'not_found' => __('Recipe not found', 'cedrvanh'),
    'not_found_in_trash' => __('Recipe not found in the trash', 'cedrvanh'),
    'parent_item_colon' => __('Parent Recipe', 'cedrvanh'),
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
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions',
      'custom-fields'
    ),
    'taxonomies' => array(
      'category',
    ),
    'menu_position' => 5,
    'exclude_from_search' => false
  );

  register_post_type('recipe', $args);
}

// Register custom post type Event
add_action('init', 'cedrvanh_register_events');

function cedrvanh_register_events() {
  $labels = array(
    'name' => __('Events', 'cedrvanh'),
    'singular' => __('Event', 'cedrvanh'),
    'add_new' => __('Add New Event', 'cedrvanh'),
    'all_items' => __('All Events', 'cedrvanh'),
    'add_new' => __('Add New Event', 'cedrvanh'),
    'edit_item' => __('Edit Event', 'cedrvanh'),
    'new_item' => __('New Event', 'cedrvanh'),
    'view_item' => __('View Event', 'cedrvanh'),
    'search_item' => __('Search Event', 'cedrvanh'),
    'not_found' => __('Event not found', 'cedrvanh'),
    'not_found_in_trash' => __('Event not found in the trash', 'cedrvanh'),
    'parent_item_colon' => __('Parent Event', 'cedrvanh'),
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
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions'
    ),
    'taxonomies' => array(
      'category',
    ),
    'menu_position' => 5,
    'exclude_from_search' => false
  );

  register_post_type('event', $args);
}

// Register custom post type Workshop
add_action('init', 'cedrvanh_register_workshops');

function cedrvanh_register_workshops() {
  $labels = array(
    'name' => __('Workshops', 'cedrvanh'),
    'singular' => __('Workshop', 'cedrvanh'),
    'add_new' => __('Add New Workshop', 'cedrvanh'),
    'all_items' => __('All Workshops', 'cedrvanh'),
    'add_new' => __('Add New Workshop', 'cedrvanh'),
    'edit_item' => __('Edit Workshop', 'cedrvanh'),
    'new_item' => __('New Workshop', 'cedrvanh'),
    'view_item' => __('View Workshop', 'cedrvanh'),
    'search_item' => __('Search Workshop', 'cedrvanh'),
    'not_found' => __('Workshop not found', 'cedrvanh'),
    'not_found_in_trash' => __('Workshop not found in the trash', 'cedrvanh'),
    'parent_item_colon' => __('Parent Workshop', 'cedrvanh'),
  );
  
  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'workshops'),
    'capability_type' => 'post',
    'hierachical' => false,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions',
      'custom-fields'
    ),
    'taxonomies' => array(
      'category',
    ),
    'menu_position' => 5,
    'exclude_from_search' => false
  );

  register_post_type('workshop', $args);
}

// Register Recipe Taxonomies
add_action('init', 'cedrvanh_register_recipes_taxonomies');

function cedrvanh_register_recipes_taxonomies() {
  // Allergens taxonomy
  register_taxonomy('allergens', array('recipe'), array(
    'name' => __('Allergenen'),
    'singular_name' => __('Allergeen'),
    'labels' => array(
      'name' => __('Allergenen'),
    ),
    'query_var' => true,
    'hierarchical' => true,
    'public' => true,
  ));

  // Difficulty taxonomy
  register_taxonomy('difficulty', array('recipe'), array(
    'name' => __('Moeilijkheid'),
    'labels' => array(
      'name' => __('Moeilijkheid'),
    ),
    'query_var' => true,
    'hierarchical' => true,
    'public' => true,
  ));
}

// Register Event Taxonomies
add_action('init', 'cedrvanh_register_events_taxonomies');

function cedrvanh_register_events_taxonomies() {
  // Province taxonomy
  register_taxonomy('province', array('event'), array(
    'name' => __('Provincie'),
    'labels' => array(
      'name' => __('Provincie'),
    ),
    'query_var' => true,
    'hierarchical' => true,
    'public' => true,
  ));

  // Setting taxonomy
  register_taxonomy('setting', array('event'), array(
    'name' => __('Setting'),
    'labels' => array(
      'name' => __('Setting'),
    ),
    'query_var' => true,
    'hierarchical' => true,
    'public' => true,
  ));
}

add_action('add_meta_boxes', 'cedrvanh_add_recipe_box');

function cedrvanh_add_recipe_box() {
  add_meta_box('subtitle_box', __('Subtitle', 'cedrvanh'), 'cedrvanh_recipe_meta_boxes', 'recipe');
}

function cedrvanh_recipe_meta_boxes($post) {

  wp_nonce_field('recipe_save_box_data', 'recipe_meta_box_nonce');

  $subtitle = get_post_meta($post->ID, '_recipe_subtitle', true);
  $ingredients = get_post_meta($post->ID, '_recipe_ingredients', true);

  echo '<label for="recipe_subtitle">' . __('Subtitle', 'cedrvanh') . '</label>';
  echo '<input name="recipe_subtitle" id="recipe_subtitle" type="text" 
        class="custom_meta_box" placeholder="Subtitle" value="' . $subtitle . '" size="255" style="width: 100%;">';

  echo '<label for="recipe_ingredients">' . __('Ingrediënten', 'cedrvanh') . '</label>';
  echo '<textarea name="recipe_ingredients" id="recipe_ingredients" style="width: 100%;"></textarea>';
}

add_action('save_post', 'cedrvanh_save_recipe_data');

function cedrvanh_save_recipe_data($post_id)
{

  // Security checks
  if (!isset($_POST['recipe_meta_box_nonce'])) {
    return;
  }

  if(!wp_verify_nonce($_POST['recipe_meta_box_nonce'], 'recipe_save_box_data')) {
    return;
  }

  if(define('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  } 

  if(!current_user_can('edit_post', $post_id)) {
    return;
  }

  if(!isset($_POST['recipe_subtitle']) && !isset($_POST['recipe_ingredients'])) {
    return;
  }

  // Subtitle & Ingredients uit de post halen
  $subtitle = sanitize_text_field($_POST['recipe_subtitle']);
  $ingredients = sanitize_text_field($_POST['recipe_ingredients']);

  // Post meta data updaten
  update_post_meta($post_id, '_recipe_subtitle', $subtitle);
  update_post_meta($post_id, '_recipe_ingredients', $ingredients);
}
