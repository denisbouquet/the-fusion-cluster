<?php

/* Template Name: Media & PR */

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
                            <div class="h2 ivanim-fade d2"><?php echo strip_tags($hero['title'], '<a>' ); ?></div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif ?>

            <section class="">  
                <div class="container"> 
                    <div class="mod-columns">
                        <?php
                        $media = get_field('media');
                        if( $media ): ?>
                        <div class="mod-columns--column">
                            <div class="lines lines--noright">  
                                <div class="top-line"></div>

                                <div class="mod-columns--content">
                                    <div class="wp-copy innerPadding innerPaddingVertical ivanim-slidefade">
                                        <div class="h4"><?php echo $media['title']; ?></div>
                                        <div class="wp-wysiwyg">
                                            <?php echo $media['copy']; ?>
                                        </div>
                                        <?php $link = $media['cta'];
                                        if( $link ): 
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
                                            <a href="<?php echo esc_url( $link_url ); ?>" class="cta-download" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>

                        <?php
                        $pr = get_field('pr_contact');
                        if( $pr ): ?>
                        <div class="mod-columns--column">
                            <div class="lines"> 
                                <div class="top-line"></div>
                                <div class="left-line"></div>

                                <div class="mod-columns--content">
                                    <div class="wp-copy innerPadding innerPaddingVertical ivanim-slidefade d1">
                                        <div class="h4"><?php echo $pr['title']; ?></div>
                                        <div class="wp-wysiwyg">
                                            <?php echo $pr['copy']; ?>
                                        </div>
                                        <?php $link = $pr['cta'];
                                        if( $link ): 
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
                                            <a href="<?php echo esc_url( $link_url ); ?>" class="cta-pink" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>
                    </div>
                </div>
            </section>
        </main>

    <?php endwhile;endif; ?>

<?php get_footer(); ?>
