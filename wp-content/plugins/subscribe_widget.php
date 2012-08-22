<?php
/*
Plugin Name: Subscribe Button
Description: Subscribe Button
Author: Web Development Manila Team
Version: 1
*/
 
 
class Subscribe extends WP_Widget
{
  function Subscribe()
  {
    $widget_ops = array('classname' => 'Subscribe Button', 'description' => 'Subscribe Buttons' );
    $this->WP_Widget('SubscribeButton', 'Subscribe Button', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
    $title = $instance['title'];
?>
  <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
 
    if (!empty($title))
      echo $before_title . $title . $after_title;;
 
    // WIDGET CODE GOES HERE

    ?>
   <div class="subscribe">
      <form method="get">
				<h3>Subscribe</h3>
				<p>Vestibulum id ligula porta felis euismod semper.</p>
				<div id="emailwrap">
					<input type="email" name="email" placeholder="Email Address" id="email"/>
				</div>
				<input type="submit" name="submit" value="Subscribe" id="subscribe"/>
			</form>
      </div>
    <?php
    echo $after_widget;
  }
}
add_action( 'widgets_init', create_function('', 'return register_widget("Subscribe");') );?>