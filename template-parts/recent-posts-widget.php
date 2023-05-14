<?php
class Recent_Posts_Widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(
            'recent_posts_widget', // ID của tiện ích
            __('Recent Posts Widget', 'text_domain'), // Tên tiện ích
            array('description' => __('Hiển thị danh sách các bài viết mới nhất của bạn', 'text_domain'),) // Mô tả tiện ích
        );
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }
        $query_args = array(
            'post_type' => 'post',
            'posts_per_page' => $instance['number_of_posts'],
        );
        $recent_posts = new WP_Query($query_args);
        if ($recent_posts->have_posts()) {
            echo '<ul>';
            while ($recent_posts->have_posts()) {
                $recent_posts->the_post();
                echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
            }
            echo '</ul>';
            wp_reset_postdata();
        }
        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : __('Tiêu đề mới', 'text_domain');
        $number_of_posts = !empty($instance['number_of_posts']) ? $instance['number_of_posts'] : 5;
?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Tiêu đề:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('number_of_posts'); ?>"><?php _e('Số lượng bài viết hiển thị:'); ?></label>
            <input class="tiny-text" id="<?php echo $this->get_field_id('number_of_posts'); ?>" name="<?php echo $this->get_field_name('number_of_posts'); ?>" type="number" step="1" min="1" value="<?php echo esc_attr($number_of_posts); ?>" size="3">
        </p>
<?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['number_of_posts'] = (!empty($new_instance['number_of_posts'])) ? absint($new_instance['number_of_posts']) : 5;
        return $instance;
    }
}

function register_recent_posts_widget()
{
    register_widget('Recent_Posts_Widget');
}
add_action('widgets_init', 'register_recent_posts_widget');
?>