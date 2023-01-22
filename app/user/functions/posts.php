<?php

function get_relation_posts( $post_id, $category_id, $counts ) {
      $related_post_collection = array();
      $related_post = new WP_Query(
          array(
              'cat'            => $category_id,
              'post__not_in'   => array( $post_id ),
              'posts_per_page' => $counts
          )
      );
      if ( $related_post->have_posts() ) {
          while ( $related_post->have_posts() ) {
              $related_post->the_post();
              $related_post_collection[] = array(
                  'title'     => get_the_title(),
                  'category'  => get_the_category(),
                  'thumbnail' => get_the_post_thumbnail(),
                  'link'      => get_the_permalink(),
                  'excerpt'   => get_the_excerpt(),
                  'author'    => get_the_author_meta( 'display_name' ),
                  'avatar'    => get_avatar_url( get_the_author_meta( 'ID' ) ),
              );
          }
          wp_reset_postdata();
      }
      return $related_post_collection;
  }
  