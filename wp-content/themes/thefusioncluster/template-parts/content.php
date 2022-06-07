<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thefusioncluster
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<head class="mod-hero-center bg-section--silver">
		<div class="container">
			<div class="lines">	
				<div class="bottom-line"></div>
				<div class="mod-hero-center__inner inpage-hero">
					<h2 class="h2 ivanim-fade"><?php the_title(); ?></h2>
				</div>
			</div>
		</div>
	</head>

	<article>
		<div class="container">	
			<div class="lines">	
				<div class="entry-content innerPadding innerPaddingVertical wp-copy ivanim-fade">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</article>

</section><!-- #post-<?php the_ID(); ?> -->
