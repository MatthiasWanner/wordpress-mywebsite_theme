<?php
include get_theme_file_path('includes/classes/Post.php');
include get_theme_file_path('includes/classes/Portfolio_Infos.php');

function get_portfolio_infos(){
    $name = get_option('portfolio_name');
    $img = get_option('portfolio_profile_img');
    $site_name = get_option('blogname');
    $description = get_option('blogdescription');
    $res = new Portfolio_Infos($site_name, $description, $name, $img);
    return $res;
}

function get_about_page() {
    $about_post_id = intval(get_option('portfolio_about_post_id'));
    $about_post = get_post( $about_post_id );
    $res = new Post($about_post->ID, $about_post->post_title, $about_post->post_content);
    if ( empty( $res ) ) {
      return null;
    } 
    return $res;
}
    
function get_projects(){
    $all_posts = get_posts();

    $function = function($post){
        $new_post = new Post($post->ID, $post->post_title, $post->post_content);
        return $new_post;
    };

    $new_infos = array_map($function, $all_posts);

    return $new_infos;
}

function get_project( $data ){
    $post = get_post( $data['id'] );
    if ( empty( $post ) ) {
      return null;
    }  
    $new_post = new Post($post->ID, $post->post_title, $post->post_content);
    return $new_post;
}

function api_init(){
    register_rest_route( 'myportfolio/v1', '/infos', array(
        'methods' => 'GET',
        'callback' => 'get_portfolio_infos',
    ));
    
    register_rest_route( 'myportfolio/v1', '/about', array(
        'methods' => 'GET',
        'callback' => 'get_about_page',
    ));

    register_rest_route( 'myportfolio/v1', '/projects', array(
        'methods' => 'GET',
        'callback' => 'get_projects',
    ));

    register_rest_route( 'myportfolio/v1', '/projects/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_project',
    ));  
}

add_action( 'rest_api_init', 'api_init');