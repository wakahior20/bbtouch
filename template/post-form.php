<?php if(!bb_is_topic()): ?>
<input name="topic" type="text" id="topic" maxlength="80" tabindex="1" />
<?php endif; ?>

<?php do_action('post_form_pre_post'); ?>
<textarea name="post_content" id="post_content" tabindex="1"></textarea>
<input type="submit" id="postformsub" name="Submit" value="<?php echo esc_attr__('Send Post &raquo;'); ?>" tabindex="2" />
