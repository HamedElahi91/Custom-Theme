<?php
function ct_get_general_options($name){
      $options = get_option('ct_options',[]);
      $general_options = $options['general'];
      return isset($general_options[$name]) ? $general_options[$name] : null;
}
function ct_get_content_options($name){
      $options = get_option('ct_options',[]);
      $content_options = $options['content'];
      return isset($content_options[$name]) ? $content_options[$name] : null;
}
function ct_get_notices_options($name){
      $options = get_option('ct_options',[]);
      $notices_options = $options['notices'];
      return isset($notices_options[$name]) ? $notices_options[$name] : null;
}
function ct_get_images_options($name){
      $options = get_option('ct_options',[]);
      $images_options = $options['images'];
      return isset($images_options[$name]) ? $images_options[$name] : null;
}
