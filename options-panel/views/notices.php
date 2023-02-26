<div class="option-form">
      <fieldset>
            <legend>Register emailing after signup settings</legend>
            <div class="form-row">
                  <label for="new_user_email_subject"> Email Title:</label>
                  <input type="text" name="new_user_email_subject" id="new_user_email_subject" value="<?php echo isset($options['new_user_email_subject']) ? esc_attr($options['new_user_email_subject']) : ''; ?>">
            </div>
            <div class="form-row">
                  <label for="new_user_email_content">Email content:</label>
                  <textarea name="new_user_email_content" id="new_user_email_content" cols="30" rows="10" > <?php echo isset($options['new_user_email_content']) ? $options['new_user_email_content'] : ''; ?></textarea>
            </div>
            <div class="form-row">
                  <button type="submit" name="save_options" class="button">Save</button>
            </div>
      </fieldset>
</div>