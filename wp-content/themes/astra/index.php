<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

//if ( ! defined( 'ABSPATH' ) ) {
//	exit; // Exit if accessed directly.
//}

// get_header(); ?>
// <?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

// 	<?php get_sidebar(); ?>

// <?php endif ?>
// 	<div id="primary" <?php astra_primary_class(); ?>>
// 		<?php
// 		astra_primary_content_top();

// 		astra_content_loop();

// 		astra_pagination();

// 		astra_primary_content_bottom();
// 		?>
// 	</div><!-- #primary -->
// <?php
// if ( astra_page_layout() == 'right-sidebar' ) :

// 	get_sidebar();

// endif;

// get_footer();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="assets/css/minified/index-style.css">
	<script src="assets/js/unminified/app.js" defer></script>

</head>
<body>

	<div class="container">
		<section class="gallery">

			<div class="frame">
				<div class="frame__content">
					<h2>Комнатные растения</h2>
				</div>
			</div>

			<div class="frame">
				<div class="frame__content">
					<div class="frame-media frame-media_left opacity" style="background-image: url(medias/media/images/pexels-rocketmann-team-9507268.jpg)"></div>
				</div>
			</div>

			<div class="frame frame_bg">
				<div class="frame__content">
					<video class="frame-media frame-media_right opacity" src="medias/media/videos/video_one.mp4" autoplay loop muted></video>
				</div>
			</div>

			<div class="frame"></div>

			<div class="frame">
				<div class="frame__content text-right">
					<h3>насыщение кислородом</h3>
					<p>Lorem ipsum dolor sit amet, consectetur elit adipisicing. Nemo fugit, rerum dolorem assumenda consequatur dicta error iure laboriosam temporibus.</p>
					<a href="#">Подробнее</a>
				</div>
			</div>

			<div class="frame frame_bg">
				<div class="frame__content">
					<video class="frame-media frame-media_left opacity" src="medias/media/videos/pexels_videos_1847910 (1080p).mp4" autoplay loop muted></video>
				</div>
			</div>

			<div class="frame"></div>

			<div class="frame frame_bg">
				<div class="frame__content">
					<div class="frame-media frame-media_right" style="background-image: url(medias/media/images/pexels-helena-jankovičová-kováčová-10165310.jpg)"></div>
				</div>
			</div>

			<div class="frame"></div>

			<div class="frame">
				<div class="frame__content text-left">
					<h3>увлажнение воздуха</h3>
					<p>Lorem ipsum dolor sit amet, consectetur elit. Rerum dolorem assumenda consequatur dicta error iure laboriosam temporibus omnis quae eaque aliquam esse unde accusamus dolores non soluta.</p>
					<a href="#">Подробнее</a>
				</div>
			</div>

			<div class="frame frame_bg">
				<div class="frame__content">
					<div class="frame-media frame-media_right opacity" style="background-image: url(medias/media/images/pexels-alexander-schimpf-1824189.jpg)"></div>
				</div>
			</div>

			<div class="frame"></div>
			<div class="frame">
				<div class="frame__content text-left">
					<h3>очистка от лос</h3>
					<p>Lorem ipsum dolor sit amet, consectetur elit. Rerum dolorem assumenda consequatur dicta error iure laboriosam temporibus omnis quae eaque aliquam esse unde accusamus dolores non soluta.</p>
					<a href="#">Подробнее</a>
				</div>
			</div>

			<div class="frame frame_bg">
				<div class="frame__content">
					<div class="frame-media frame-media_right opacity" style="background-image: url(medias/media/images/pexels-monica-oprea-9921038.jpg)"></div>
				</div>
			</div>

			<div class="frame frame_bg">
				<!-- <div class="frame__content">
					<div class="frame-media frame-media opacity" style="background-image: url(medias/media/images/pexels-rachel-claire-4993071.jpg)"></div>
				</div> -->
			</div>
<div class="frame">
				
			</div>
			<div class="frame"></div>
			
			<div class="frame">
				
			</div>

			

			<div class="frame button">
				<div class="final-text">сколько вазонов<br> нужно <br>в вашем доме?</div>
				<a href="https://example.com" class="custom-button">Рассчитать</a>
				<video class="frame-media opacity" src="medias/media/videos/production_id_4891982 (720p).mp4" autoplay loop muted></video>
			</div>

		</section>
	</div>

</body>
</html>