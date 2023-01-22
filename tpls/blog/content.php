<div class="col-lg-8">
      <?php if(have_posts()) :?>
            <?php while(have_posts()): the_post(); ?>
                  <div class="blog-post">
                        <a href="#"><img class="rounded mb-lg-5 mb-4" src="<?php echo get_the_post_thumbnail_url(); ?> " alt="card image" /></a>
                        <h3 class=""><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                        <div class="meta font-lora my-4">
                              <a href="#"><?php 
                                    $post_id = get_the_ID(); // or use the post id if you already have it
                                    $category_object = get_the_category($post_id);
                                    echo $category_object[0]->name;
                                    
                              ?></a>
                              <span class="meta-separator"></span>
                              <a href="#"><?php echo get_the_date(); ?></a>
                        </div>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                  </div>
            <?php endwhile; ?>
      <?php endif ?>
                <!--pagination-->
                <div class="pagination justify-content-center mb-4">
                    <a href="#" class="btn btn-dark disabled"><i class="fa fa-angle-left"></i></a>
                    <div class="h6 mt-2 mx-4">
                        1 از 17
                    </div>
                    <a href="#" class="btn btn-dark"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>