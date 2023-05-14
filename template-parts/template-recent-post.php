<?php
$type = $args['type'];
$number_of_post = $args['number_of_post'];
$title = $args['title'];

if (strcmp($type, 'tags')) :
    $args = array(
        'post_type'      => !empty($type) ? $type : 'post',
        'posts_per_page' => !empty($number_of_post) ? $number_of_post : 5,
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
?>
        <div class="text-center mb-3 border-pink pt-3">
            <h5><?php echo !empty($title) ? $title : 'Bài Viết Mới Nhất' ?></h5>
        <?php
        echo '<ul>';
        while ($query->have_posts()) {
            $query->the_post();
            echo '<li><a href="' . esc_url(get_permalink()) . '">' . esc_html(get_the_title()) . '</a></li>';
        }
        echo '</ul>';
    }
        ?>
        </div>
        <?php
    else :
        $tags  = get_tags();
        // Display the categories in a list
        if (!empty($tags)) {
        ?>
            <div class="text-center mb-3 border-pink pb-2">
                <h5><?php echo !empty($title) ? $title : 'Chuyên Mục' ?></h5>
                <?php
                echo '<ul>';
                foreach ($tags  as $tag) {
                    echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . ' (' . $tag->count . ')</a></li>';
                }
                echo '</ul>';
                ?>
            </div>
    <?php
        }
    endif;
