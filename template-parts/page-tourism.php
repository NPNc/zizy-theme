<?php
/* Template Name: Tourism Page */
get_header();
?>
<div class="row mb-4">
    <div id="tourismCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/mock/pic-1.png'; ?>" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri() . '/assets/img//mock/pic-2.png'; ?>" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri() . '/assets/img//mock/pic-3.png'; ?>" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="row title-content text-center mb-5">
    <img src="<?php echo get_template_directory_uri() . '/assets/img/vui-di-title-content.png'; ?>" style="width: auto;height: 90px;" class="mx-auto" />
</div>
<div class="container">
    <div class="row">
        <div class="col-8">
            <?php
            get_template_part('template-parts/template', 'display-post-1', array(
                'category_name' => 'places'
            ));
            ?>
        </div>
        <div class="col-4">
            <?php
            if (is_active_sidebar('sidebar-1')) : ?>
                <div id="secondary" class="widget-area" role="complementary">
                    <?php
                    $widgets = get_option('sidebars_widgets');
                    printf('%s', var_dump($widgets));
                    dynamic_sidebar('sidebar-1');
                    ?>
                </div><!-- #secondary -->
            <?php else :
                //render default
                include get_template_directory() . '/template-parts/default-sidebar.php';
            endif; ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>