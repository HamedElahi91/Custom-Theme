<div class="wrap">
      <h2>Custom Theme Options</h2>
      <div class="container">
            <div class="options-menue">
                  <ul>
                        <li><a class="<?php echo $current_tab == 'general' ? 'active' : '' ?>" href="<?php echo add_query_arg(['tab' =>'general']) ?>">General</a></li>
                        <li><a class="<?php echo $current_tab == 'content' ? 'active' : '' ?>" href="<?php echo add_query_arg(['tab' =>'content']) ?>">Content</a></li>
                        <li><a class="<?php echo $current_tab == 'notices' ? 'active' : '' ?>" href="<?php echo add_query_arg(['tab' =>'notices']) ?>">Notices</a></li>
                        <li><a class="<?php echo $current_tab == 'images' ? 'active' : '' ?>" href="<?php echo add_query_arg(['tab' =>'images']) ?>">Images</a></li>
                  </ul>
            </div>
            <div class="options-content">
                  <form action="" method="post">
                        <?php include "$current_tab.php"; ?>
                  </form>
            </div>
      </div>
</div>