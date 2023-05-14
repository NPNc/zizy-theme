<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zizy-theme
 */

get_header();
?>
<main id="primary" class="site-main">
	<div class="cover-image-container w-100 pb-5">
		<div id="cover-image" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/cover-img.jpg' ?>');"></div>
	</div>
	<div id="main" class="content-area">
		<div class="places-container">
			<div class="row places-label">
				<h3>ĐỊA ĐIỂM NỔI BẬT</h3>
			</div>
			<?php
			$places = get_category_by_slug('places');
			$args = array(
				'orderby' => 'count',
				'order' => 'ASC',
				'parent'   => $places->term_id,
				'hide_empty' => 0,
				'number' => 6
			);
			$categories = get_categories($args);
			$index = 0;
			foreach ($categories as $category) {
				if ($index == 0 || $index == 3) echo '<div class="row p-4">';
				$t_id = $category->term_id;
				$t_name = $category->name;
				$term = get_term_by('id', $category->term_id, 'category');
				$t_image = get_term_meta($t_id, 'image', true) ? get_term_meta($t_id, 'image', true) : '';
				echo '
                <a class="place-container col" href="' . esc_url(get_category_link($t_id)) . '">
                    <div class="place-item div-img" id="bg-place" style="background-image: url(' . $t_image . ');"></div>
                    <label id="label-place"> ' . $t_name . '</label>
                </a>';
				if ($index == 2 || $index == 5) echo '</div>';
				$index++;
			} ?>
		</div>
		<div class="row portfolio-info pl-5">
			<div class="col">
				<div class="row">
					<div class="div-img logo-2" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/Zizylo3.png' ?>')"></div>
				</div>
				<div class="row info">
					<p>
						Mình là một cô gái không nhỏ,
						cũng không muốn để <br /> đời làm cho trái tim xám ngoét.<br />
						Và chào bạn đến với thế giới của mình <a href="#" style="color:#ef4f4f;">zizyday.com</a>.<br />
						Đứa con tinh thần và là kỳ quan trong lòng mình.<br />
						Nghe thêm mình lải nhả ni hả?
					</p>
				</div>
				<div class="row group-btn">
					<a class="btn btn-primary w-50 mx-auto link-black" href="<?php echo get_permalink(get_page_by_path("/zizy-a")) ?>">
						Tìm hiểu thêm về mình nè !!!
					</a>
				</div>
			</div>
			<div class="col">
				<img class="portfolio-img" src="<?php echo get_template_directory_uri() . '/assets/img/portfolio-img.png' ?>" />
			</div>
		</div>
		<div class="popular-posts position-relative">
			<img class="position-absolute" style="top: 30em;left: 4em;" src="<?php echo get_template_directory_uri() . '/assets/img/Fill_139.png'; ?>" />
			<label class="position-absolute" style="top: 0.7em;left: 0.6em;">Dăm Ba <br /> <span style="color:#FB54AC;">Bài Viết</span><br /> Được <br />Yêu Thích</label>
			<div class="position-absolute top1-post w-50 h-50">
				<div class="div-img h-75" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/mock/Top1_Post.png'; ?>); width: 35em;     margin: 0 30px 20px auto;"></div>
			</div>
			<div class="row position-absolute top2-post w-100">
				<div class="col">
					<div class="div-img" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/mock/Top2_Post.png'; ?>); "></div>
				</div>
				<div class="col">
					<div class="div-img" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/mock/Top3_Post.png'; ?>);"></div>
				</div>
			</div>

		</div>
	</div>
</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
