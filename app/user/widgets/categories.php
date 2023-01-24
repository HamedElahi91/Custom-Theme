<?php
class CT_Categories_Widget extends WP_Widget{
      public function __construct()
      {
            // Instantiate the parent object.
		parent::__construct( false, 'دسته بندی ها' );
      }

      public function widget($args, $instance)
      {
            echo $args['before_widget'];
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] );
            echo $args['after_title'];
            $cats = get_categories();
            ?>
            <div class="list-group list-group-right-arrow">
                  <?php foreach($cats as $cat): ?>
                        <a href="#" class="list-group-item"><?php echo $cat->name; ?> (<?php echo $cat->count; ?>) </a>
                  <?php endforeach; ?>
            </div>
            <?php
            
            echo $args['after_widget'];
      }

      public function form($instance)
      {
            $title = ! empty( $instance['title'] ) ? $instance['title'] : 'دسته بندی ها';
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

function register_ct_categories_widget(){
      register_widget('CT_Categories_Widget');
}
add_action('widgets_init', 'register_ct_categories_widget');
