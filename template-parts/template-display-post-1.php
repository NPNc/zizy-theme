<?php
/* Templete Name: Display Post 1 */
// Display post by slug
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'paged' => $paged,
    // 'tag' => 'my-tag-slug',
);

$query = new WP_Query($args);
if ($query->have_posts()) {
    $number = 0;
    while ($query->have_posts()) {
        $query->the_post();
        if ($number % 2 == 0) :
?>
            <div class="row p-4">
                <div class="col-6 mt-5">
                    <a class="hover-link" href="<?php echo get_permalink(); ?>">
                        <h2> <?php the_title(); ?></h2>
                    </a>
                    <p>
                        <?php $content = get_the_content();
                        $trimmed_content = wp_trim_words($content, $num_words = 20, $more = null);
                        echo $trimmed_content;
                        ?>
                    </p>
                </div>
                <div class="col-6 feature-image">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php else : ?>
                        <div class="alt-image">
                            <img alt="Alternative Image">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php
        else :
        ?>
            <div class="row p-4">
                <div class="col-6 feature-image">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php else : ?>
                        <div class="alt-image">
                            <img alt="Alternative Image">
                        </div>
                    <?php endif; ?>

                </div>
                <div class="col-6 mt-5">
                    <a class="hover-link" href="#">
                        <h2> <?php the_title(); ?></h2>
                    </a>
                    <p>
                        <?php $content = get_the_content();
                        $trimmed_content = wp_trim_words($content, $num_words = 20, $more = null);
                        echo $trimmed_content;
                        ?>
                    </p>
                </div>
            </div>
<?php
        endif;
        $number = $number + 1;
    }

    echo paginate_links( array(
        'total' => $query->max_num_pages,
        'current' => $paged,
        'prev_text' => __( '&laquo; Previous', 'text-domain' ),
        'next_text' => __( 'Next &raquo;', 'text-domain' ),
    ) );
    wp_reset_postdata();
} else {
}
