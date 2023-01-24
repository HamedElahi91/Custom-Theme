<?php

define('CT_URL', get_template_directory_uri() . DIRECTORY_SEPARATOR);
define('CT_PATH', get_template_directory() . DIRECTORY_SEPARATOR);
define('CT_APP_PATH', CT_PATH . 'app' . DIRECTORY_SEPARATOR);
define('CT_ASSETS_URL', CT_URL . 'assets' . DIRECTORY_SEPARATOR);

add_action( 'after_setup_theme', 'CT_setup' );
function CT_setup(){
      add_theme_support('title-tag');
      add_image_size('blog-index-thumbnail', 730,430);
      add_theme_support( 'post-thumbnails' );
     
      
      //register sidebars
    register_sidebar([
      'name'          => 'Blog Sidebar',
      'id'            => 'ct-blog-sidebar',    // ID should be LOWERCASE  ! ! !
      'description'   => 'a sidebar for theme home page',
      'class'         => '',
      'before_widget' => '<div class="blog-widget mb-4">',
      'after_widget'  => '</div>',
      'before_title'  => ' <h6 class="mb-4">',
      'after_title'   => '</h6>'
  ]);
  
  register_nav_menu('top', 'top menu');

}
add_filter('show_admin_bar', '__return_false');
if(is_admin()){
      include CT_APP_PATH . 'admin/admin.php';
}
include CT_APP_PATH . 'user/user.php';
