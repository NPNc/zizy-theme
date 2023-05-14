<?php
/* Name: Default Sidebar */
?>
<div class="widget">
    <div class="row mb-3"><?php get_search_form(); ?></div>
    <div class="row mb-3 p-3 mx-auto">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio-img.png'; ?>" alt="Thêm ảnh bản thân">
    </div>
    <div class="row mb-3 w-75 mx-auto">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/Zizylo3.png'; ?>" alt="Thêm ảnh bản thân">
    </div>
    <div class="row mb-3 text-center">
        <p> Mình là một cô gái không nhỏ, cũng không <br />muốn để đời làm cho trái tim xám ngoét.<br />
            Và chào bạn đến với thế giới của mình <br /><a href="#" style="color:#ef4f4f;">zizyday.com</a>. Đứa con tinh thần và là kỳ<br /> quan trong lòng mình.<br />
            Nghe thêm mình lải nhải hả?
        </p>
        <button class="btn w-50 mx-auto btn-primary">Vào xem</button>
    </div>
    <div class="row mt-4 mb-4">
        <?php
        get_template_part('template-parts/template', 'recent-post', array(
            'title' => 'MỚI NHẤT',
            'type' => 'post',
            'number_of_post' => 5,
        )) ?>
    </div>
    <div class="row">
        <?php
        get_template_part('template-parts/template', 'recent-post', array(
            'title' => 'Hoặc',
            'type' => 'tags',
            'number_of_post' => 5,
        ));
        ?>
    </div>
</div>