<?php

/* Template Name: Join Us */

get_header();
?>


    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <main>
            <?php
            $hero = get_field('hero');
            if( $hero ): ?>
            <section class="mod-hero-center bg-section--silver">
                <div class="container">
                    <div class="lines"> 
                        <!-- <div class="bottom-line"></div> -->
                        <div class="mod-hero-center__inner inpage-hero">
                            <p class="h3 ivanim-fade"><?php echo $hero['head']; ?></p>
                            <h2 class="h2 ivanim-fade"><?php echo strip_tags( $hero['title'], '<br>' ); ?></h2>
                            <div class="ivanim-fade d3">
                                <p><?php echo $hero['copy']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif ?>
        
            <?php
            $perks = get_field('perks');
            if( $perks ): ?>
            <section>
                <div class="container"> 
                    <div class="lines lines--noleft lines--noright">    
                        <div class="top-line"></div>
                        
                        <div class="innerPaddingVertical">
                            <div class="mod-join-perks js-anim-children--slidefade">
                                <?php 
                                foreach( $perks as $perk ) {
                                ?>
                                    <div class="mod-join-perks--perk">
                                        <div class="wp-copy">
                                            <h3 class="h3"><?php echo $perk['title']; ?></h3>
                                            <?php echo $perk['copy']; ?>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif ?>
    
            <?php
            $form_shortcode = get_field('form_shortcode');
            if( $form_shortcode ): ?>
            <section class="mod-join-form bg-section--silver">
                <div class="container">
                    <div class="lines"> 
                        <div class="top-line"></div>
                        <!-- <div class="bottom-line"></div> -->
                        <div class="mod-join-form__inner ivanim-slidefade">
                            <?php echo do_shortcode($form_shortcode); ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif ?>
    
        </main>        

    <?php endwhile;endif; ?>

<?php get_footer(); ?>
