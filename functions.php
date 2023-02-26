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

function ct_comment_function($comment , $args, $depth){
?>
  <li class="comment ">
                            <article class="comment-body">
                                <footer class="comment-meta">
                                    <div class="comment-author">
                                        <?php echo get_avatar( $comment, '128' ); ?>
                                        <?php printf( __( '<b class="fn">%s</b> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
                                        <b class="fn">
                                            <a href="#" rel="external nofollow" class="url">
                                                کریس امز
                                            </a>
                                        </b>
                                        <span class="says">گفته:</span>
                                    </div>
                                    <!-- .comment-author -->

                                    <div class="comment-metadata">
                                    <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
                                      /* translators: 1: date, 2: time */
                                      printf( 
                                          __('%1$s at %2$s'), 
                                          get_comment_date(),  
                                          get_comment_time() 
                                      ); ?>
                                    </a><?php 
                                    edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
                                    </div><!-- .comment-metadata -->

                                </footer><!-- .comment-meta -->

                                <div class="comment-content">
                                <?php echo comment_text(); ?>
                                </div><!-- .comment-content -->

                                <div class="reply">
                                <?php 
                                  comment_reply_link( 
                                    array_merge( 
                                      $args, 
                                      array( 
                                        'add_below' => 'comment', 
                                        'depth'     => $depth, 
                                        'max_depth' => $args['max_depth'] 
                                      ) 
                                    ) 
                                  ); ?>
                                </div>
                            </article><!-- .comment-body -->
                            <ul class="children">
                                <li class="comment ">
                                    <article class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author ">
                                                <img alt="" src="assets/img/team/t-2.jpg" class="" >
                                                <b class="fn">
                                                    <a href="#" rel="external nofollow" class="url">جانس برونس</a>
                                                </b>
                                                <span class="says">گفته:</span>
                                            </div><!-- .comment-author -->

                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <time datetime="2018-10-16T13:13:25+00:00">
                                                        1398 فروردین
                                                    </time>
                                                </a>
                                            </div><!-- .comment-metadata -->

                                        </footer><!-- .comment-meta -->

                                        <div class="comment-content">
                                            <p>سلام، این یک دیدگاه میباشد.<br>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.<br>
                                               زندگی را دوست داشته باشید</p>
                                        </div><!-- .comment-content -->

                                        <div class="reply">
                                            <a rel="nofollow" class="comment-reply-link" href="#">پاسخ</a>
                                        </div>
                                    </article><!-- .comment-body -->
                                </li><!-- #comment-## -->
                            </ul><!-- .children -->
                        </li><!-- #comment-## -->

<?php
}
if(is_admin()){
      include CT_APP_PATH . 'admin/admin.php';
      include CT_PATH . 'options-panel/index.php';
}
include CT_PATH . 'options-panel/views/functions.php';
include CT_PATH . 'options-panel/frontend.php';
include CT_APP_PATH . 'user/user.php';
