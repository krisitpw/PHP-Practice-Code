/*
* Creating a function to create our CPT
*/
  
function custom_post_type() {
  
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Articles', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'Article', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'Articles', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent Article', 'twentytwentyone' ),
        'all_items'           => __( 'All Articles', 'twentytwentyone' ),
        'view_item'           => __( 'View Articles', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New Articles', 'twentytwentyone' ),
        'add_new'             => __( 'Add New', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit Articles', 'twentytwentyone' ),
        'update_item'         => __( 'Update Articles', 'twentytwentyone' ),
        'search_items'        => __( 'Search Articles', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );
      
// Set other options for Custom Post Type
      
    $args = array(
        'label'               => __( 'articles', 'twentytwentyone' ),
        'description'         => __( 'Articles news of given niche fitness, current affairs, politics, etc', 'twentytwentyone' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'article title', 'article description', 'article categories', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
  
    );
      
    // Registering your Custom Post Type
    register_post_type( 'movies', $args );
  
}
  
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
  
add_action( 'init', 'custom_post_type', 0 );


$args = array(
        'label'                 => __( 'Articles', 'text_domain' ),
        'description'           => __( 'Articles Description', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => false,
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',


        add_shortcode( 'article_frontend_post', 'articles_post_type_frontend_post' );
function articles_post_type_frontend_post() {
    ?>
<div id="postbox">
    <form id="new_post" name="new_post" method="post">

    <p><label for="title">Title</label><br />
        <input type="text" id="title" value="" tabindex="1" size="20" name="title" />
    </p>

    <p>
        <label for="content">Post Content</label><br />
        <textarea id="content" tabindex="3" name="content" cols="50" rows="6"></textarea>
    </p>

    <p><?php wp_dropdown_categories( 'show_option_none=Category&tab_index=4&taxonomy=category' ); ?></p>

    <p><label for="post_tags">Tags</label>

    <input type="text" value="" tabindex="5" size="16" name="post_tags" id="post_tags" /></p>

    <?php wp_nonce_field( 'wps-frontend-post' ); ?>

    <p align="right"><input type="submit" value="Publish" tabindex="6" id="submit" name="submit" /></p>
    
    </form>
</div>
    <?php
}
<!-------------------------------------------------------->
<?php
    
// >> Create Shortcode to Display Movies Post Types
  
function shortcode_articles_post_type(){
  
    $args = array(
                    'post_type'      => 'articles',
                    'posts_per_page' => '10',
                    'publish_status' => 'published',
                 );
  
    $query = new WP_Query($args);
  
    if($query->have_posts()) :
  
        while($query->have_posts()) :
  
            $query->the_post() ;
                      
        $result .=  get_the_title() . '</div>';
        $result .=  get_the_content() . '</div>'; 
        $result .= '</div>';
  
        endwhile;
  
        wp_reset_postdata();
  
    endif;    
  
    return $result;            
}
  
add_shortcode( 'articles-list', 'shortcode_articles_post_type' ); 
  
// shortcode code ends here

    ?>

    <?php
    add_shortcode( 'article_frontend_post', 'articles_post_type_frontend_post' );
function articles_post_type_frontend_post() {
    ?>
<div id="postbox">
    <form id="new_post" name="new_post" method="post">

    <p><label for="title">Title</label><br />
        <input type="text" id="title" value="" tabindex="1" size="20" name="title" />
    </p>

    <p>
        <label for="content">Post Content</label><br />
        <textarea id="content" tabindex="3" name="content" cols="50" rows="6"></textarea>
    </p>

    <p><?php wp_dropdown_categories( 'show_option_none=Category&tab_index=4&taxonomy=category' ); ?></p>

    <p><label for="post_tags">Tags</label>

    <input type="text" value="" tabindex="5" size="16" name="post_tags" id="post_tags" /></p>

    <?php wp_nonce_field( 'wps-frontend-post' ); ?>

    <p align="right"><input type="submit" value="Publish" tabindex="6" id="submit" name="submit" /></p>
    
    </form>
</div>
    <?php
}
?>

<?php

function articles_post_type_save_post_if_submitted() {
    // Stop running function if form wasn't submitted
    if ( !isset($_POST['title']) ) {
        return;
    }

    // Check that the nonce was set and valid
    if( !wp_verify_nonce($_POST['_wpnonce'], 'wps-frontend-post') ) {
        echo 'Did not save because your form seemed to be invalid. Sorry';
        return;
    }

    // Do some minor form validation to make sure there is content
    if (strlen($_POST['title']) < 3) {
        echo 'Please enter a title. Titles must be at least three characters long.';
        return;
    }
    if (strlen($_POST['content']) < 100) {
        echo 'Please enter content more than 100 characters in length';
        return;
    }

    // Add the content of the form to $post as an array
    $post = array(
        'post_title'    => $_POST['title'],
        'post_content'  => $_POST['content'],
        'post_category' => $_POST['cat'], 
        'tags_input'    => $_POST['post_tags'],
        'post_status'   => 'draft',   // Could be: publish
        'post_type'     => 'post' // Could be: `page` or your CPT
    );
    wp_insert_post($post);
    echo 'Saved your post successfully! :)';
}
?>