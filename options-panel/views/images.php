<div class="option-form">
      <fieldset>
            <legend>Images Settings</legend>
            <div class="form-row">
                  <label for="site_title">Size of pictures:</label>
                  <select name="default_image_size" id="default_image_size">
                        <?php foreach($image_sizes as $image_size): ?>
                              <option value="<?php echo $image_size ?>" <?php selected(isset($options['default_image_size']) && $image_size == $options['default_image_size'] ) ; ?> ><?php echo $image_size ?></option>
                        <?php endforeach; ?>
                  </select>
            </div>
            <div class="form-row">
                  <button type="submit" name="save_options" class="button">save</button>
            </div>
      </fieldset>
</div>