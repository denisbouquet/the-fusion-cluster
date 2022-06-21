<?php

/* Template Name: What is Fusion */

get_header();
?>


    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        
        <main>
            <?php
            $hero = get_field('hero');
            if( $hero ): ?>
            <section class="mod-about-hero bg-section--silver">
                <div class="container">
                    <div class="lines"> 
                        <div class="mod-about-hero__inner inpage-hero">
                            <p class="h4 ivanim-fade"><?php echo $hero['head']; ?></p>
                            <h2 class="h2 ivanim-fade d2"><?php echo strip_tags( $hero['title'], '<br>' ); ?></h2>
                            
                            <div class="ivanim-fade d3">
                                <?php echo $hero['copy']; ?>
                            </div>
                        </div>
                        <div class="mod-about-hero__animation js-play-lottie">
                            <?php if($hero['lottie']) {
                                ?>
                                <lottie-player mode="normal" loop src="<?php echo $hero['lottie']; ?>"></lottie-player>
                                <?php
                            } else { ?>
                                <svg width="252" height="373" viewBox="0 0 252 373" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="62" cy="31" r="31" fill="#FF8DF5"/>
                                <circle cx="221" cy="158" r="31" fill="#FF8DF5"/>
                                <circle cx="132" cy="214" r="31" fill="#FF8DF5"/>
                                <circle cx="198" cy="304" r="31" fill="#FF8DF5"/>
                                <circle cx="31" cy="342" r="31" fill="#FF8DF5"/>
                                </svg>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif ?>
            
            <?php
            $section_1 = get_field('section_1');
            if( $section_1 ): ?>
            <section class="bg-section--silver">    
                <div class="container"> 
                    <div class="mod-columns">
                        <div class="mod-columns--column">
                            <div class="lines lines--noright">  
                                <div class="top-line"></div>
                                <!-- <div class="bottom-line"></div> -->
                                
                                <div class="mod-home-join__perks">
                                    <div class="mod-columns--content wp-wysiwyg">
                                        <?php echo $section_1['copy']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mod-columns--column">
                            <div class="lines"> 
                                <div class="top-line"></div>
                                <!-- <div class="bottom-line"></div> -->
                                <div class="left-line"></div>
                                
                                <div class="mod-home-join__media ivanim-fade">
                                    
                                    <?php 
                                    $image = $section_1['image'];
                                    if( !empty( $image ) ): ?>
                                    <figure>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </figure>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-section--silver">    
                <div class="container"> 
                    <div class="mod-columns">
                        <div class="mod-columns--column order-2">
                            <div class="lines"> 
                                <div class="top-line"></div>
                                <div class="bottom-line"></div>
                                
                                <div class="mod-home-join__perks">
                                    <div class="mod-columns--content wp-wysiwyg">
                                        <?php echo $section_1['copy_2']; ?>
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
                                    <?php 
                                    $image2 = $section_1['image_2'];
                                    if( !empty( $image2 ) ): ?>
                                    <figure>
                                        <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
                                    </figure>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif ?>
            
            <?php
            $section_2 = get_field('section_2');
            if( $section_2 ): ?>
            <section class="">
                <div class="container">
                    <div class="lines"> 
                        <div class="inpage-hero inpage-hero--center">   
                            <div class="ivanim-fade">
                                <p class="h4 bullet"><?php echo $section_2['head']; ?></p>
                                <h2 class="h2"><?php echo strip_tags( $section_2['title'], '<br>' ); ?></h2>
                                <?php echo $section_2['copy']; ?>

                                <?php 
                                $link = $section_2['cta'];
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                <p><a href="<?php echo esc_url( $link_url ); ?>" class="cta-pink" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></p>
                                <?php endif; ?>
                            </div>
                        </div>  
                    </div>  
                </div>
            </section>
            <?php endif ?>

            <?php
            $section_3 = get_field('section_3');
            if( $section_3 ): ?>
            <section class="bg-section--silver">
                <div class="container"> 
                    <div class="lines lines--noright">  
                        <div class="mod-columns mod-timeline">
                            <div class="mod-columns--column">
                                <div class="mod-timeline--title innerPaddingVertical">
                                    <h2 class="h3"><?php echo $section_3['title']; ?></h2>
                                    <?php echo $section_3['intro']; ?>
                                </div>
                            </div>
                            <div class="mod-columns--column innerPaddingVertical">
                                
                                <div class="mod-accordions js-anim-children--slidefade">
                                    <?php 
                                    $timeline = $section_3['timeline'];
                                    if( $timeline ) {
                                        foreach( $timeline as $entry ) {
                                            $years = $entry['years'];
                                            $title = $entry['title'];
                                            $copy = $entry['copy'];
                                            ?>
                                            <div class="mod-accordion">
                                                <div class="mod-accordion__toggle">
                                                    <h3 class="h2"><?php echo $years; ?></h3>
                                                    <p class="h3"><?php echo $title; ?></p>
                                                    <div class="icon">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g class="fill" fill="black"> 
                                                        <g>   
                                                        <rect class="r1" x="8.69629" y="11.3042" width="2.60898" height="8.69568"/>
                                                        </g>
                                                        <g class="r3">
                                                        <rect  x="8.69629" y="8.69556" width="2.60871" height="8.69661" transform="rotate(90 8.69629 8.69556)"/>
                                                        </g>
                                                        <g>
                                                        <rect class="r2" x="8.69629" width="2.60898" height="8.69568" />
                                                        </g>
                                                        <g class="r4">
                                                        <rect x="20" y="8.69556" width="2.60871" height="8.69661" transform="rotate(90 20 8.69556)"/>
                                                        </g>
                                                        </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="mod-accordion__content">
                                                    <div class="wp-copy">
                                                        <?php echo $copy; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif ?>
    
        </main>

    <?php endwhile;endif; ?>

<?php get_footer(); ?>
