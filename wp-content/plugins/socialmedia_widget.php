<?php
/*
Plugin Name: Social Media Widget
Description: Social Media Buttons
Author: Web Development Manila Team
Version: 1
*/
 
 
class RandomPostWidget extends WP_Widget
{
  function RandomPostWidget()
  {
    $widget_ops = array('classname' => 'Social Media Button', 'description' => 'Social Media Buttons' );
    $this->WP_Widget('SocialMedia', 'Social Media Button', $widget_ops);
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
    <div class="socials">
        
        <ul>
        <h3>Get Socials</h3>
          <li><a href="https://www.facebook.com/ringcentral" class="facebook" target="_blank">facebook</a></li>
          <li><a href="https://twitter.com/#!/RingCentral" class="twitter" target="_blank">twitter</a></li>
          <li><a href="http://pinterest.com/ringcentral/" class="pinterest" target="_blank">pinterest</a></li>
          <li><a href="" class="blogger">blogger</a></li>
          <li><a href="http://www.linkedin.com/company/ringcentral" class="linkedin" target="_blank">linkedin</a></li>
          <li><a href="" class="feed">feed</a></li>
       
          </ul>
      
      </div>    
    <?php
    echo $after_widget;
  }
}
add_action( 'widgets_init', create_function('', 'return register_widget("RandomPostWidget");') );?>