<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zizy-theme
 */

?>

<footer id="colophon" class="site-footer mt-5 text-gray">
<div class="row">
        <div class="col footer-col">
            <img class="rounded mx-auto d-block p-5" src="<?php echo get_template_directory_uri() . '/assets/img/footer_img.png'; ?>" alt="" />
        </div>
        <div class="col footer-col text-center">
            <div class="row pt-5">
                <h4>ĐỒNG HÀNH NHÉ!</h4>
            </div>
            <div class="row">
                <p>Theo dõi mình và nghe mình tỉ tê <br />
                    khắp dọc miền đất nước nhé</p>
            </div>
            <div class="row form-submit text-center">
                <input placeholder="Email Address" class="mx-auto form-control" />
                <button class="btn btn-info w-50 mx-auto mt-1">Subcribe</button>
            </div>
        </div>
        <div class="col footer-col text-center">
            <div class="row pt-5">
                <h4>HOẶC HƠN THẾ</h4>
            </div>
            <div class="row">
                <p>Nếu có bất kỳ câu hỏi hay <br />
                    góp ý nào, gửi cho mình qua email:
                    <br /><span style="color:brown;">Zizyday@gmail.com</span><br />
                    và trở thành bạn:
                </p>
            </div>
            <div class="row">
                <div class="list-social-group row mx-auto">
                    <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/img/icon/icons8-facebook.svg';?>" alt=""/></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/img/icon/icons8-instagram.svg';?>" alt=""/></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/img/icon/icons8-pinterest.svg';?>" alt=""/></a>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php wp_footer(); ?>

</body>

</html>