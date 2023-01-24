<?php
class CT_Search_Widget extends WP_Widget{
      public function __construct()
      {
            // Instantiate the parent object.
		parent::__construct( false, 'ابزارک سرچ' );
      }

      public function widget($args, $instance)
      {
            echo $args['before_widget'];
            echo $args['before_title'];
            echo $args['after_title'];
            ?>
            <form>
                  <div class="form-group">
                        <div class="icon-field">
                              <i class="vl-search"></i>
                              <input type="text" name="s" class="form-control" placeholder="جستجو">
                        </div>
                  </div>
            </form>
            <?php
            
            echo $args['after_widget'];
      }

      public function form($instance)
      {
            $title = ! empty( $instance['title'] ) ? $instance['title'] : 'جستجو';
		?>
		<p>
                  <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php  'عنوان:'; ?></label> 
                  <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
      }

      public function update($new_instance, $old_instance)
      {
            $instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
      }
}

function register_ct_search_widget(){
      register_widget('CT_Search_Widget');
}
add_action('widgets_init', 'register_ct_search_widget');
