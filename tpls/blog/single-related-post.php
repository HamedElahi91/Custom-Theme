<!-- related-post-start -->
<?php 
$cats = get_the_category();

$related_posts = get_relation_posts(get_the_ID(), $cats[0]->term_id , 3);

?>
<section class="section-gap bg-gray">
    <div class="container">
        <div class="row mb-lg-5 mb-4">
            <div class="col-md-8">
                <h5>پست های مشابه</h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php foreach($related_posts as $related_post) : ?>
                <div class="col-md-4">
                <div class="card border-0 mb-md-0 mb-3 box-hover">
                    <a href="#"><img class="card-img-top" src="<?php echo CT_ASSETS_URL; ?>img/cards/3a.jpg" alt="card image"></a>
                    <div class="card-body py-4">
                        <a href="#" class="mb-2 d-block"><?php echo $related_post['category'][0]->name; ?></a>
                        <h5 class="mb-4"><a href="<?php echo $related_post['link']; ?>"><?php echo $related_post['title'] ?></a></h5>
                        <div class="mb-4">
                            <p><?php echo $related_post['excerpt'] ?></p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center">
                            <img class="avatar-sm rounded-circle mr-3" src="<?php echo $related_post['avatar']; ?>" alt="توماس جانسون">
                            <span><?php echo $related_post['author']; ?> </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            
        </div>
    </div>
</section>
<!--blog end-->