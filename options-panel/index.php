<?php
add_action('admin_menu', 'ct_add_options_panel');
add_action('admin_enqueue_scripts', 'ct_options_panel_assets');
add_action('ct_save_options', 'ct_save_options_handle');

function ct_options_panel_assets(){
      wp_register_style( 'options-panel-style', CT_URL . '/options-panel/assets/css/options-panel.css');
      wp_enqueue_style('options-panel-style');
      
      wp_register_script( 'options-panel-script', CT_URL . '/options-panel/assets/js/options-panel.js');
      wp_enqueue_script('options-panel-script');
}

function ct_add_options_panel(){
      add_theme_page(
            'Template Options',
            'Custom Theme Options',
            'manage_options',
            'ct_options_panel',
            'ct_show_options_panel'
      );
}

function ct_show_options_panel(){
      $current_tab = isset($_GET['tab']) && !empty($_GET['tab']) ? sanitize_text_field($_GET['tab']) : null ;
      $whitelist_tabs = ['general', 'content', 'notices' , 'images'];
      if(!in_array($current_tab, $whitelist_tabs)){
            wp_die('You haven\'t access to this page');
      }

      if(isset($_POST['save_options'])){
            do_action('ct_save_options', $current_tab);
      }

      $fonts_list = [
            'ساحل' => 'sahel',
            'صمیم' => 'samim',
            'شبنم' => 'shabnam',
      ];

      $ct_options = get_option('ct_options', []);
      $image_sizes = get_intermediate_image_sizes();
      $options = isset($ct_options[$current_tab]) ? $ct_options[$current_tab] : [] ;
      include 'views/index.php';
}

function ct_save_options_handle($current_tab){
      $ct_options = get_option('ct_options', []);

      switch($current_tab){
            case 'general':
                  $ct_options[$current_tab] = [
                        'site_title' => sanitize_text_field($_POST['site_title']),
                        'home_posts_count' => intval($_POST['home_post_count']) > 0 ? intval($_POST['home_post_count']) : 1 
                  ];
            break;
            case 'content':
                  $ct_options[$current_tab] = [
                        'show_category' => isset($_POST['show_category']) ? 1 : 0,
                        'show_excerpt' => isset($_POST['show_excerpt']) ? 1 : 0,
                        'show_comments' => isset($_POST['show_comments']) ? 1 : 0,
                        'select_font' => sanitize_text_field($_POST['select_font'])
                  ];
            break;
            case 'images':
                  $ct_options[$current_tab] = [
                        'default_image_size' => sanitize_text_field($_POST['default_image_size'])
                  ];
            break;
            case 'notices':
                  $ct_options[$current_tab] = [
                        'new_user_email_subject' => sanitize_text_field($_POST['new_user_email_subject']),
                        'new_user_email_content' => sanitize_text_field($_POST['new_user_email_content'])
                  ];
            break;
      }

      

      update_option('ct_options',  $ct_options);
}

