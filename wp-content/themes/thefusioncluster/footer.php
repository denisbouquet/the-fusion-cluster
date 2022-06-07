<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thefusioncluster
 */

?>

	<footer class="main">
	<?php if ( !get_field('hide_footer_newsletter') ) {
	?>
		
		<?php
		$newsletter = get_field('newsletter', 'option');
		if( $newsletter ): ?>
			<section class="container">
				<div class="lines">
					<div class="bottom-line"></div>
					<div class="mod-newsletter">

						<h2 class="h1 anim-title"><?php echo strip_tags($newsletter['title'], '<br>' ); ?></h2>
						
						<div class="ivanim-fade d4">
							<p><?php echo $newsletter['caption']; ?></p>
							<?php include(locate_template('template-parts/form-newsletter.php')); ?>
						</div>

						<i class="star star--1 ivanim-fade">
							<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M31.9948 32.042L31.96 32.0864V32.0293H32.0297V32.0769L31.9948 32.042Z" fill="#FF8DF5"/>
							<path d="M34.7568 38.6738V63.9921H29.2324V38.6611L31.9946 35.9116L34.7568 38.6738Z" fill="#FF8DF5"/>
							<path d="M31.9948 31.9499L32.0297 31.915V31.9594H31.96V31.915L31.9948 31.9499Z" fill="#FF8DF5"/>
							<path d="M34.7568 0V25.3278L31.9946 28.09L29.2324 25.3278V0H34.7568Z" fill="#FF8DF5"/>
							<path d="M25.3291 34.7563H29.2335V38.6607L11.3253 56.5721L7.4209 52.6678L25.3291 34.7563Z" fill="#FF8DF5"/>
							<path d="M31.9604 32.0861V32.029H31.916L31.9509 31.9941L31.9604 32.0068L31.9858 32.029L31.9953 32.0417L31.9604 32.0861Z" fill="#FF8DF5"/>
							<path d="M32.03 31.9594H32.0775L32.0427 31.9943L32.03 31.9848L32.0078 31.9594L31.9951 31.9499L32.03 31.915V31.9594Z" fill="#FF8DF5"/>
							<path d="M56.5736 11.3238L38.6527 29.2447H34.7578V25.3277L52.6692 7.41943L56.5736 11.3238Z" fill="#FF8DF5"/>
							<path d="M32.0427 31.9946L32.0775 32.0295H32.03V32.0771L31.9951 32.0422L32.0173 32.0295L32.03 32.0073L32.0427 31.9946Z" fill="#FF8DF5"/>
							<path d="M56.5736 52.6772L52.6692 56.5816L34.7578 38.6734V34.7563H38.6622L56.5736 52.6772Z" fill="#FF8DF5"/>
							<path d="M11.3253 7.41943L29.2335 25.3277V29.2447H25.3418L7.4209 11.3238L11.3253 7.41943Z" fill="#FF8DF5"/>
							<path d="M31.9953 31.9499L31.9509 31.9943L31.916 31.9594H31.9604V31.915L31.9953 31.9499Z" fill="#FF8DF5"/>
							<path d="M32.0778 31.9595L32.043 31.9943L32.0778 32.0292H32.0303V31.9595H32.0778Z" fill="#FF8DF5"/>
							<path d="M64.0011 34.7563H38.6606L35.8984 31.9941L38.6511 29.2446H63.9916L64.0011 34.7563Z" fill="#FF8DF5"/>
							<path d="M25.3405 29.2446L28.09 31.9941L25.3278 34.7563H0V29.2446H25.3405Z" fill="#FF8DF5"/>
							<path d="M31.9594 31.9595V32.0292H31.915L31.9499 31.9943L31.915 31.9595H31.9594Z" fill="#FF8DF5"/>
							</svg>

						</i>

						<i class="star star--2 ivanim-fade">
							<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M31.9948 32.042L31.96 32.0864V32.0293H32.0297V32.0769L31.9948 32.042Z" fill="#FF8DF5"/>
							<path d="M34.7568 38.6738V63.9921H29.2324V38.6611L31.9946 35.9116L34.7568 38.6738Z" fill="#FF8DF5"/>
							<path d="M31.9948 31.9499L32.0297 31.915V31.9594H31.96V31.915L31.9948 31.9499Z" fill="#FF8DF5"/>
							<path d="M34.7568 0V25.3278L31.9946 28.09L29.2324 25.3278V0H34.7568Z" fill="#FF8DF5"/>
							<path d="M25.3291 34.7563H29.2335V38.6607L11.3253 56.5721L7.4209 52.6678L25.3291 34.7563Z" fill="#FF8DF5"/>
							<path d="M31.9604 32.0861V32.029H31.916L31.9509 31.9941L31.9604 32.0068L31.9858 32.029L31.9953 32.0417L31.9604 32.0861Z" fill="#FF8DF5"/>
							<path d="M32.03 31.9594H32.0775L32.0427 31.9943L32.03 31.9848L32.0078 31.9594L31.9951 31.9499L32.03 31.915V31.9594Z" fill="#FF8DF5"/>
							<path d="M56.5736 11.3238L38.6527 29.2447H34.7578V25.3277L52.6692 7.41943L56.5736 11.3238Z" fill="#FF8DF5"/>
							<path d="M32.0427 31.9946L32.0775 32.0295H32.03V32.0771L31.9951 32.0422L32.0173 32.0295L32.03 32.0073L32.0427 31.9946Z" fill="#FF8DF5"/>
							<path d="M56.5736 52.6772L52.6692 56.5816L34.7578 38.6734V34.7563H38.6622L56.5736 52.6772Z" fill="#FF8DF5"/>
							<path d="M11.3253 7.41943L29.2335 25.3277V29.2447H25.3418L7.4209 11.3238L11.3253 7.41943Z" fill="#FF8DF5"/>
							<path d="M31.9953 31.9499L31.9509 31.9943L31.916 31.9594H31.9604V31.915L31.9953 31.9499Z" fill="#FF8DF5"/>
							<path d="M32.0778 31.9595L32.043 31.9943L32.0778 32.0292H32.0303V31.9595H32.0778Z" fill="#FF8DF5"/>
							<path d="M64.0011 34.7563H38.6606L35.8984 31.9941L38.6511 29.2446H63.9916L64.0011 34.7563Z" fill="#FF8DF5"/>
							<path d="M25.3405 29.2446L28.09 31.9941L25.3278 34.7563H0V29.2446H25.3405Z" fill="#FF8DF5"/>
							<path d="M31.9594 31.9595V32.0292H31.915L31.9499 31.9943L31.915 31.9595H31.9594Z" fill="#FF8DF5"/>
							</svg>

						</i>
					</div>
				</div>
			</section>
		<?php endif; ?>
	<?php 
	} ?>
		<section class="container">
			<div class="lines">	
				<!-- <div class="top-line"></div> -->
				<nav>
					<?php
					$column_1 = get_field('column_1', 'option');
					if( $column_1 ): ?>
					<div class="col-footer">
						<div>
							<h4><?php echo $column_1['title']; ?></h4>
							<?php 
							$rows = $column_1['links'];
							if( $rows ) {
							    echo '<ul>';
							    foreach( $rows as $row ) {
							        $link = $row['link'];
									if( $link ): 
										$link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									    <li><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
									<?php endif; ?>
								<?php
								}
							    echo '</ul>';
							}
							?>
						</div>
					</div>
					<?php endif; ?>

					<?php
					$column_2 = get_field('column_2', 'option');
					if( $column_2 ): ?>
					<div class="col-footer">
						<div>
							<h4><?php echo $column_2['title']; ?></h4>
							<?php 
							$rows = $column_2['links'];
							if( $rows ) {
							    echo '<ul>';
							    foreach( $rows as $row ) {
							        $link = $row['link'];
									if( $link ): 
										$link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									    <li><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
									<?php endif; ?>
								<?php
								}
							    echo '</ul>';
							}
							?>
						</div>
					</div>
					<?php endif; ?>

					<?php
					$column_3 = get_field('column_3', 'option');
					if( $column_3 ): ?>
					<div class="col-footer">
						<div>
							<h4><?php echo $column_3['title']; ?></h4>
							<?php 
							$rows = $column_3['links'];
							if( $rows ) {
							    echo '<ul>';
							    foreach( $rows as $row ) {
							        $link = $row['link'];
									if( $link ): 
										$link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									    <li><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
									<?php endif; ?>
								<?php
								}
							    echo '</ul>';
							}
							?>
						</div>
					</div>
					<?php endif; ?>
				</nav>
			</div>
			<div class="lines lines--bottom">
				<div class="top-line"></div>
				<div class="legal">
					<?php if(get_field('copyright', 'option')): ?>
					<div class="copyright">
						<?php echo get_field('copyright', 'option'); ?>
					</div>
					<?php endif; ?>
					
					<?php 
					$link_privacy = get_field('privacy_policy', 'option');
					if( $link_privacy ): 
					    $link_url = $link_privacy['url'];
					    $link_title = $link_privacy['title'];
					    $link_target = $link_privacy['target'] ? $link_privacy['target'] : '_self';
					    ?>
						<div class="policy">
					    	<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
