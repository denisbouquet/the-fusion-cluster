<?php
/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package the-fusion-cluster
 */

get_header();
?>
	
	<main>
		<?php
		$hero = get_field('hero');
		if( $hero ): ?>
		<section class="mod-hero ivanim-hero bg-section--dark">
			<div class="container">
				<div class="lines">
					<div class="top-line"></div>
					<div class="mod-hero__inner">	
						<div class="container">
							<h1 id="h1" class="h1"><?php echo $hero['title']; ?></h1>
						</div>
					</div>
					<div class="mod-hero__media">
						<div>
							<!-- <img src="assets/media/images/pattern/pattern.png" alt="Background pattern"> -->
							<video id="intro_video" class="video-clip" data-src="<?php echo $hero['video']; ?>" muted playsinline loop></video>
						</div>
					</div>
					<!-- <a href="#intro" class="mod-hero__scroll scrollTo">	
						<i><span class="screen-reader-text">Scroll</span></i>
					</a> -->
				</div>
			</div>
		</section>
		<?php endif ?>
		
		<?php
		$section_1 = get_field('section_1');
		if( $section_1 ): ?>
		<section class="mod-home-what-is-the-cluster bg-section--silver">
			<div class="container">
				<div class="lines">	
					<div class="bottom-line"></div>
					<div class="mod-home-what-is-the-cluster__inner">	
						<div class="">
							<p class="h4 bullet"><?php echo $section_1['head']; ?></p>
							<h2 class="h2"><?php echo strip_tags( $section_1['title'], '<br>' ); ?></h2>
							<?php echo $section_1['copy']; ?>

							<?php 
							$link = $section_1['cta'];
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link_privacy['target'] : '_self';
							    ?>
							    <a class="cta-pink" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
						</div>
					</div>	
				</div>	
			</div>
			<div class="mod-home-what-is-the-cluster__animation ivanim-fade">
				<div class="wheel">
				<div class="words js-text-wheel">
					
					<?php 
					$rows = $section_1['wheel_words'];
					if( $rows ) {
						$i = 1;
					    foreach( $rows as $row ) {
					        $word = $row['word'];
							if( $word && $i < 21): 
							    ?>
								<div class="word word--<?php echo $i; ?>"><span><?php echo $word; ?> <i></i></span></div>
							<?php endif; ?>
						<?php
						$i++;
						}
					}
					?>
				</div>
				</div>
			</div>
		</section>
		<?php endif ?>
	


		<?php
		$section_2 = get_field('section_2');
		if( $section_2 ): ?>
		<section class="mod-home-join">
			
			<?php
			$hero_1 = $section_2['hero_1'];
			if( $hero_1 ): ?>
			<div class="container">	
				<div class="mod-home-join__inner inpage-hero inpage-hero--center">	
					<p class="h4 bullet ivanim-fade"><?php echo $hero_1['head']; ?></p>
					<h2 class="h2 ivanim-fade d2"><?php echo strip_tags( $hero_1['title'], '<br>' ); ?></h2>
					<?php echo $hero_1['copy']; ?>
				</div>
			</div>
			<?php endif ?>

			<?php
			$perks_group_1 = $section_2['perks_group_1'];
			if( $perks_group_1 ): ?>
			<div class="bg-section--silver">	
				<div class="container">	
					<div class="mod-columns">
						<div class="mod-columns--column">
							<div class="lines lines--noright">	
								<div class="top-line"></div>
								<div class="bottom-line"></div>
								
								<div class="mod-home-join__perks">
									<div class="mod-columns--content">
										<?php 
										$rows = $perks_group_1['perks'];
										if( $rows ) {
										    foreach( $rows as $row ) {
										        $perk = $row;
												if( $perk ): 
												    ?>
													<div class="mod-home-join__perks--perk">
														<h3 class="h3"><?php echo $perk['title']; ?></h3>
														<?php echo $perk['copy']; ?>
													</div>
												<?php endif; ?>
											<?php
											}
										}
										?>
										<?php 
										$link = $perks_group_1['cta'];
										if( $link ): 
										    $link_url = $link['url'];
										    $link_title = $link['title'];
										    $link_target = $link['target'] ? $link_privacy['target'] : '_self';
										    ?>
										    <a class="cta-pink" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
						<div class="mod-columns--column">
							<div class="lines">	
								<div class="top-line"></div>
								<div class="bottom-line"></div>
								<div class="left-line"></div>
								
								<div class="mod-home-join__media ivanim-fade">
									<figure class="bg">
										<?php 
						                $image = $perks_group_1['image'];
						                if( !empty( $image ) ): ?>
						                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						                <?php endif; ?>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endif ?>
		</section>


		<section class="mod-home-join">
			<?php
			$hero_2 = $section_2['hero_2'];
			if( $hero_2 ): ?>
			<div class="container">	
				<div class="mod-home-join__inner inpage-hero inpage-hero--center">	
					<p class="h4 bullet ivanim-fade"><?php echo $hero_2['head']; ?></p>
					<h2 class="h2 ivanim-fade d2"><?php echo strip_tags( $hero_2['title'], '<br>' ); ?></h2>
					<?php echo $hero_2['copy']; ?>
				</div>
			</div>
			<?php endif ?>

			<?php
			$perks_group_2 = $section_2['perks_group_2'];
			if( $perks_group_2 ): ?>
			<div class="bg-section--silver">	
				<div class="container">	
					<div class="mod-columns">
						<div class="mod-columns--column order-2">
							<div class="lines">	
								<div class="top-line"></div>
								<div class="bottom-line"></div>
								
								<div class="mod-home-join__perks">
									<div class="mod-columns--content">
										<?php 
										$rows = $perks_group_2['perks'];
										if( $rows ) {
										    foreach( $rows as $row ) {
										        $perk = $row;
												if( $perk ): 
												    ?>
													<div class="mod-home-join__perks--perk">
														<h3 class="h3"><?php echo $perk['title']; ?></h3>
														<?php echo $perk['copy']; ?>
													</div>
												<?php endif; ?>
											<?php
											}
										}
										?>
										<?php 
										$link = $perks_group_2['cta'];
										if( $link ): 
										    $link_url = $link['url'];
										    $link_title = $link['title'];
										    $link_target = $link['target'] ? $link_privacy['target'] : '_self';
										    ?>
										    <a class="cta-pink" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
						<div class="mod-columns--column order-1">
							<div class="lines lines--noright">	
								<div class="top-line"></div>
								<div class="bottom-line"></div>
								<div class="left-line"></div>
								
								<div class="mod-home-join__media ivanim-fade">
									<figure>
										<?php 
						                $image = $perks_group_2['image'];
						                if( !empty( $image ) ): ?>
						                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						                <?php endif; ?>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endif ?>
		</section>
		<?php endif ?>


		<section class="mod-home-involved">

			<?php
			$section_3 = get_field('section_3');
			if( $section_3 ): ?>
			<div class="container">	
				<div class="mod-home-involved__inner">
					<p class="h4 bullet"><?php echo $section_3['head']; ?></p>
					<h2 class="h2"><?php echo strip_tags( $section_3['title'], '<br>' ); ?></h2>
				</div>
			</div>
			
			<div class="mod-home-involved__list">
				
				
				<svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
					<defs>
						<g id="plus">
							<rect x="11.6619" y="15.6055" width="3.49853" height="11.6618" fill="#FF8DF5"/>
							<rect x="11.6619" y="12.1069" width="3.49853" height="11.6618" transform="rotate(90 11.6619 12.1069)" fill="#FF8DF5"/>
							<rect x="11.6619" y="0.445312" width="3.49853" height="11.6618" fill="#FF8DF5"/>
							<rect x="26.821" y="12.1069" width="3.49853" height="11.6618" transform="rotate(90 26.821 12.1069)" fill="#FF8DF5"/>
						</g>
					</defs>
				</svg>

				<div class="marquee marquee--1" data-duplicated='true' data-direction='right'>
					<?php 
					$rows = $section_3['list_1'];
					if( $rows ) {
					    foreach( $rows as $row ) {
					        $partners = $rows['partners'];

					    	foreach( $partners as $partner ) {
								if( $partner ): 
									$name = $partner['partner_name'];
								    $url = $partner['url'];
								    ?>
								    <a href="<?php echo esc_url( $url ); ?>" target="_blank"><?php echo $name; ?></a> 
								    <i><svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#plus" /></svg></i>
								<?php endif;
					    	}
						}
					}
					?>
				</div>
			
				<div class="marquee marquee--2" data-duplicated='true' data-direction='left'>
					<?php 
					$rows = $section_3['list_2'];
					if( $rows ) {
					    foreach( $rows as $row ) {
					        $partners = $rows['partners'];

					    	foreach( $partners as $partner ) {
								if( $partner ): 
									$name = $partner['partner_name'];
								    $url = $partner['url'];
								    ?>
								    <a href="<?php echo esc_url( $url ); ?>" target="_blank"><?php echo $name; ?></a> 
								    <i><svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#plus" /></svg></i>
								<?php endif;
					    	}
						}
					}
					?>
				</div>
			
				<div class="marquee marquee--3" data-duplicated='true' data-direction='right'>
					<?php 
					$rows = $section_3['list_3'];
					if( $rows ) {
					    foreach( $rows as $row ) {
					        $partners = $rows['partners'];

					    	foreach( $partners as $partner ) {
								if( $partner ): 
									$name = $partner['partner_name'];
								    $url = $partner['url'];
								    ?>
								    <a href="<?php echo esc_url( $url ); ?>" target="_blank"><?php echo $name; ?></a> 
								    <i><svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#plus" /></svg></i>
								<?php endif;
					    	}
						}
					}
					?>
				</div>
				
				<div class="container">	
					<?php 
					$link = $section_3['cta'];
					if( $link ): 
					    $link_url = $link['url'];
					    $link_title = $link['title'];
					    $link_target = $link['target'] ? $link_privacy['target'] : '_self';
					    ?>
					    <a class="cta-pink" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
				</div>
			</div>
			<?php endif ?>
	

			<?php
			$section_4 = get_field('section_4');
			if( $section_4 ): ?>

			<div class="mod-home-involved__articles bg-section--silver">
				<div class="container">	
					<div class="lines">	
						<div class="top-line"></div>
						<div class="bottom-line"></div>
						<div class="mod-home-involved__articlestitle">
							<h3 class="h3"><?php echo strip_tags( $section_4['title'], '<br>' ); ?></h3>
						</div>
						
						<div class="mod-home-involved__articleslist js-anim-children--slidefade">
							<?php 
							$articles = $section_4['sections'];
							if( $articles ) {
							    foreach( $articles as $article ) {
									if( $article ): 
									    $title = $article['title'];
									    $copy = $article['copy'];
									    $link = $article['cta'];
									    ?>
										
										<div class="mod-home-involved__article">
											<div>
												<figure>
													<?php 
									                $image = $article['image'];
									                if( !empty( $image ) ): ?>
									                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									                <?php else: ?>
									                	<img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/pattern/pattern.svg" alt="Pattern" />
									                <?php endif; ?>
												</figure>

												<h4 class="h5"><?php echo esc_html( $title ); ?></h4>
												<?php echo $copy; ?>
												
												<?php
												if( $link ): 
													$link_url = $link['url'];
												    $link_title = $link['title'];
												    $link_target = $link['target'] ? $link['target'] : '_self';
												    ?>
												    <a class="cta-pink" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
												<?php endif; ?>
											</div>
										</div>
									<?php endif; ?>
								<?php
								}
							}
							?>							
						</div>
					</div>
				</div>
			</div>
			<?php endif ?>
		</section>
	</main>

<?php 
get_footer();