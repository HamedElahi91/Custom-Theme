<?php
add_action('wp_enqueue_scripts', 'ct_options_panel_css');
function ct_options_panel_css(){
      wp_register_style('ct_options_panel_fonts',CT_URL.'/options-panel/assets/css/fonts.css');
      wp_enqueue_style('ct_options_panel_fonts');
      $current_font = ct_get_content_options('select_font');
      if(!empty($current_font)){

            $custom_font_style = "
                  p.lead.text-muted{
                        font-family: {$current_font} !important
                  }
            ";
      }
      wp_add_inline_style('ct_options_panel_fonts', $custom_font_style);
}

function ct_process_notification($user_id){
      $email_subject = ct_get_notices_options('new_user_email_subject');
      $email_content = ct_get_notices_options('new_user_email_content');
      if(!empty($email_subject) && !empty($email_content)){

            $user = get_user_by('id', $user_id);
            wp_mail($user->user_email, $email_subject,$email_content);
      }
}
add_action('user_register','ct_process_notification');