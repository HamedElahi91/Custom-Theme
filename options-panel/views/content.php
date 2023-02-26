<div class="option-form">
      <fieldset>
            <legend>Display content Settings</legend>
            <div class="form-row">
            <label for="show_category">Category Display :</label>
            <input type="checkbox" name="show_category" id="show_category" <?php checked(intval($options['show_category'] > 0)); ?> >
      </div>
      <div class="form-row">
            <label for="show_excerpt">Excerpt Display:</label>
            <input type="checkbox" name="show_excerpt" id="show_excerpt" <?php checked(intval($options['show_excerpt'] > 0)); ?> >
      </div>
      <div class="form-row">
            <label for="select_font">Font Select:</label>
            <select name="select_font" id="select_font" >
                  <?php foreach($fonts_list as $title => $name): ?>
                        <option value="<?php echo $name ?>" <?php selected($options['select_font'] == $name); ?> > <?php echo $title; ?></option>
                  <?php endforeach; ?>
            </select>
      </div>
      </fieldset>

      <fieldset>
            <legend>Display comments</legend>
            <div class="form-row">
            <label for="show_comments">Comments Display:</label>
            <input type="checkbox" name="show_comments" id="show_comments" <?php checked(isset(($options['show_comments'])) && intval($options['show_comments']) > 0 ? true : false); ?> >
      </div>
      </fieldset>

      <div class="form-row">
            <button type="submit" name="save_options" class="button">Save</button>
      </div>
</div>