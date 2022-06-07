<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package thefusioncluster
 */

get_header();
?>
	<main id="primary" class="site-main">
		<section class="error-404 not-found">
			<section class="mod-hero-center bg-section--silver">
				<div class="container">
					<div class="lines"> 
						<div class="bottom-line"></div>
						<div class="mod-hero-center__inner inpage-hero">
							<h2 class="h2 ivanim-fade"><?php esc_html_e( '404 - That page can&rsquo;t be found', 'thefusioncluster' ); ?></h2>
						</div>
					</div>
				</div>
			</section>
			
			<article>   
				<div class="page-anchor" id="news"></div>
				<div class="container"> 
					<div class="lines"> 
						<!-- <div class="top-line"></div> -->
						<div class="entry-content innerPadding innerPaddingVertical wp-copy ivanim-fade">
							
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below', 'thefusioncluster' ); ?></p>
							<?php
								wp_nav_menu(
									array(
										'menu' => 'mobile-menu',
									)
								);
							?>
						</div>
					</div>
				</div>
			</article>
		</section><!-- .error-404 -->
	</main><!-- #main -->
<?php
get_footer();
