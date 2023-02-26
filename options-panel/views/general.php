<div class="option-form">
      <fieldset>
            <legend>General Settings</legend>
            <div class="form-row">
                  <label for="site_title"> Website Title:</label>
                  <input type="text" name="site_title" id="site_title" value="<?php echo esc_attr($options['site_title']); ?>">
            </div>
            <div class="form-row">
                  <label for="home_post_count">Post per page count:</label>
                  <input type="number" min="1" max="100" name="home_post_count" id="home_post_count" value="<?php echo esc_attr($options['home_posts_count']); ?>">
            </div>
            <div class="form-row">
                  <button type="submit" name="save_options" class="button">save</button>
            </div>
      </fieldset>
</div>