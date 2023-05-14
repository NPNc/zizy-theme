<?php
/* Template Name: Flattery Page */
get_header();
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-8">
            <div class="row border border-dark rounded p-2">
                <div class="col align-items-center m-2 pt-5">
                    <h2 id="text-flatery-header" class="row">
                        Khám Phá Nào !
                    </h2>
                    <p class="row">
                        Welcome to Simply Home. We can’t wait to get started
                        showing you how to make the most of your living spaces for whatever budget works best for you.
                    </p>
                    <button class="row btn-primary rounded">
                        Go Go
                    </button>
                </div>
                <div class="col">
                    <img class="rounded mx-auto d-block" src="<?php echo get_template_directory_uri() . '/assets/img/flattery-cover.png' ?>" />
                </div>
            </div>
            <div class="row">
                <?php
                get_template_part('template-parts/template', 'display-post-2', array(
                    'category_name' => 'places'
                ));
                ?>
            </div>
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