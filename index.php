<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>


<?php wp_head(); 

$wp_query = new WP_Query(array('post_status'=>'private','pagename'=>'homepage'));
if ( have_posts() ) : the_post(); 

	$header_image = get_field('header_image');
	$logo = get_field('logo');
	$main_title = get_field('main_title');
	$sub_taglines = get_field('sub_taglines');

	$logo_ggm = get_field('logo_ggm');
	$background_image_ggm = get_field('background_image_ggm');
	$info_ggm = get_field('info_ggm');
	$link_ggm = get_field('website_ggm');

	$logo_nhor = get_field('logo_nhor');
	$background_image_nhor = get_field('background_image_nhor');
	$info_nhor = get_field('info_nhor');
	$link_nhor = get_field('website_nhor');

	$logo_gt = get_field('logo_gt');
	$background_image_gt = get_field('background_image_gt');
	$info_gt = get_field('info_gt');
	$link_gt = get_field('website_gt');

	$logo_hot = get_field('logo_hot');
	$background_image_hot = get_field('background_image_hot');
	$info_hot = get_field('info_hot');
	$link_hot = get_field('website_hot');

	$title = get_field('title');
	$description = get_field('description');
	$footer_background_photo = get_field('footer_background_photo');

	// echo '<pre>';
	// print_r($logo_ggm);
	// echo '</pre>';

endif;

			?>
</head>

<body <?php body_class(); ?>>

<section class="header parallax-window" data-parallax="scroll" data-image-src="<?php echo $header_image['url']; ?>">
	<div class="logo">
		<img src="<?php echo $logo['url']; ?>">
	</div>
	<div class="sitedesc">
		<h1><?php echo $main_title; ?></h1>
		<div class="taglines">
			<?php echo $sub_taglines; ?>
		</div>
	</div>
</section>

<section class="divider  wow fadeInU"  data-wow-duration="2s">
	<h2>Our Divisions</h2>
</section>


<section class="companies">
	<div class="ggm company wow fadeInUp" data-wow-duration="2s">
		<a class="" target="_blank" href="<?php echo $link_ggm; ?>">
			<div class="img">
				<img src="<?php echo $background_image_ggm['url']; ?>" alt="<?php echo $background_image_ggm['alt']; ?>">
			</div>
			<div class="desc">
				<?php //echo $info_ggm; ?>
				<?php if($link_ggm ){ ?>
					Visit Site
				<?php } ?>
			</div>
			<div class="overlay">
				<div class="logo">
					<img src="<?php echo $logo_ggm['url']; ?>" alt="<?php echo $logo_ggm['alt']; ?>">
				</div>
				<div class="small-desc"><?php echo $info_ggm; ?></div>
			</div>
		</a>
	</div>
	<div class="ggm company wow fadeInUp" data-wow-duration="2s">
		<a class="" target="_blank" href="<?php echo $link_hot; ?>">
			<div class="img">
				<img src="<?php echo $background_image_hot['url']; ?>" alt="<?php echo $background_image_hot['alt']; ?>">
			</div>
			<div class="desc">
				<?php //echo $info_hot; ?>
				<?php if($link_hot ){ ?>
					Visit Site
				<?php } ?>
			</div>
			<div class="overlay">
				<div class="logo">
					<img src="<?php echo $logo_hot['url']; ?>" alt="<?php echo $logo_hot['alt']; ?>">
				</div>
				<div class="small-desc"><?php echo $info_hot; ?></div>
			</div>
		</a>
	</div>
	<div class="ggm company wow fadeInUp" data-wow-duration="2s">
		<a class="" target="_blank" href="<?php echo $link_gt; ?>">
			<div class="img">
				<img src="<?php echo $background_image_gt['url']; ?>" alt="<?php echo $background_image_gt['alt']; ?>">
			</div>
			<div class="desc">
				<?php //echo $info_gt; ?>
				<?php if($link_gt ){ ?>
					Visit Site
				<?php } ?>
			</div>
			<div class="overlay">
				<div class="logo">
					<img src="<?php echo $logo_gt['url']; ?>" alt="<?php echo $logo_gt['alt']; ?>">
				</div>
				<div class="small-desc"><?php echo $info_gt; ?></div>
			</div>
		</a>
	</div>
	<div class="ggm company wow fadeInUp" data-wow-duration="2s">
		<a class="" target="_blank" href="<?php echo $link_nhor; ?>">
			<div class="img">
				<img src="<?php echo $background_image_nhor['url']; ?>" alt="<?php echo $background_image_nhor['alt']; ?>">
			</div>
			<div class="desc">
				<?php //echo $info_nhor; ?>
				<?php if($link_nhor ){ ?>
					Visit Site
				<?php } ?>
			</div>
			<div class="overlay">
				<div class="logo">
					<img src="<?php echo $logo_nhor['url']; ?>" alt="<?php echo $logo_nhor['alt']; ?>">
				</div>
				<div class="small-desc"><?php echo $info_nhor; ?></div>
			</div>
		</a>
	</div>
	
	
</section>
<section class="footer parallax-window" data-parallax="scroll" data-image-src="<?php echo $footer_background_photo['url']; ?>">
	<div class="logo-e">
		<img src="<?php //echo  ?>">
	</div>

	<div class="footer-desc">
		<h3><?php echo $title; ?></h3>
		<?php echo $description; ?>
	</div>

</section>

<div class="footerinfo">
	<?php 
	$phoneNum = get_field('phone_number', 'option');
	$email = get_field('email', 'option');
	$spam = antispambot($email);

	echo $phoneNum.' | <a href="mailto:'.$spam.'">'.$spam.'</a>';
	
	 ?>
</div>

<?php wp_footer(); ?>

</body>
</html>
