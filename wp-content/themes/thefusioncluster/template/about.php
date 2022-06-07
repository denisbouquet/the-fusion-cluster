<?php

/* Template Name: About Us */

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
                        <div class="bottom-line"></div>

                        <div class="mod-about-hero__inner inpage-hero">
                            <p class="h4 ivanim-fade"><?php echo $hero['head']; ?></p>
                            <h2 class="h2 ivanim-fade d2"><?php echo strip_tags( $hero['title'], '<br>' ); ?></h2>
                            
                            <div class="ivanim-fade d3">
                                <?php echo $hero['copy']; ?>
                            </div>
                        </div>
                        <div class="mod-about-hero__animation ivanim-fade d3">
                            <svg width="374" height="374" viewBox="0 0 374 374" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M186.969 187.241L186.766 187.5V187.167H187.173V187.445L186.969 187.241Z" fill="#FF8DF5"/>
                            <path d="M203.105 225.995V373.946H170.822V225.921L186.963 209.854L203.105 225.995Z" fill="#FF8DF5"/>
                            <path d="M186.969 186.704L187.173 186.5V186.76H186.766V186.5L186.969 186.704Z" fill="#FF8DF5"/>
                            <path d="M203.105 0V148.006L186.963 164.148L170.822 148.006V0H203.105Z" fill="#FF8DF5"/>
                            <path d="M148.002 203.105H170.817V225.921L66.1683 330.588L43.3525 307.772L148.002 203.105Z" fill="#FF8DF5"/>
                            <path d="M186.757 187.5V187.167H186.498L186.702 186.963L186.757 187.037L186.906 187.167L186.961 187.241L186.757 187.5Z" fill="#FF8DF5"/>
                            <path d="M187.16 186.76H187.438L187.234 186.964L187.16 186.908L187.03 186.76L186.956 186.704L187.16 186.5V186.76Z" fill="#FF8DF5"/>
                            <path d="M330.577 66.1729L225.854 170.896H203.094V148.006L307.761 43.3572L330.577 66.1729Z" fill="#FF8DF5"/>
                            <path d="M187.234 186.964L187.438 187.168H187.16V187.446L186.956 187.242L187.086 187.168L187.16 187.038L187.234 186.964Z" fill="#FF8DF5"/>
                            <path d="M330.577 307.828L307.761 330.644L203.094 225.994V203.105H225.909L330.577 307.828Z" fill="#FF8DF5"/>
                            <path d="M66.1683 43.3572L170.817 148.006V170.896H148.076L43.3525 66.1729L66.1683 43.3572Z" fill="#FF8DF5"/>
                            <path d="M186.961 186.704L186.702 186.964L186.498 186.76H186.757V186.5L186.961 186.704Z" fill="#FF8DF5"/>
                            <path d="M187.445 186.76L187.241 186.964L187.445 187.168H187.167V186.76H187.445Z" fill="#FF8DF5"/>
                            <path d="M374 203.105H225.919L209.778 186.964L225.864 170.896H373.944L374 203.105Z" fill="#FF8DF5"/>
                            <path d="M148.08 170.896L164.148 186.964L148.006 203.105H0V170.896H148.08Z" fill="#FF8DF5"/>
                            <path d="M186.752 186.76V187.168H186.492L186.696 186.964L186.492 186.76H186.752Z" fill="#FF8DF5"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif ?>
            
            <?php
            $section_1 = get_field('section_1');
            if( $section_1 ): ?>
            <section class="">
                <div class="container">
                    <div class="lines"> 
                        <div class="inpage-hero inpage-hero--center">   
                            <div>
                                <p class="h4 bullet"><?php echo $section_1['head']; ?></p>
                                <h2 class="h2"><?php echo strip_tags( $section_1['title'], '<br>' ); ?></h2>
                                <?php echo $section_1['copy']; ?>
                            </div>
                        </div>  
                    </div>  
                </div>
            </section>
            <?php endif ?>
            
            <?php
            $section_2 = get_field('section_2');
            if( $section_2 ): ?>
            <section class="mod-partner-list bg-section--silver">
                <div class="container"> 
                    <div class="lines"> 
                        <div class="top-line"></div>

                        <div class="mod-columns">
                            <div class="mod-columns--column">
                                <h2 class="h2 ivanim-fade"><?php echo strip_tags( $section_2['title'], '<br>' ); ?></h2>
                            </div>
                        </div>
                        
                        <div class="mod-columns">
                            <div class="mod-columns--column">
                                <div class="mod-partner-list__cta ivanim-fade">
                                    <?php 
                                    $links = $section_2['links_cta'];
                                    if( $links ) {
                                        foreach( $links as $link ) {
                                            $link = $link['link'];
                                            if( $link ): 
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                                                
                                                <p><a href="<?php echo esc_url( $link_url ); ?>" class="link" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></p>
                                            <?php endif; ?>
                                        <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="mod-columns--column">
                                <div class="mod-company-list wp-copy ivanim-fade">
                                    <ul>
                                        <?php 
                                        $rows = $section_2['partners'];
                                        if( $rows ) {
                                            foreach( $rows as $row ) {
                                                $partners = $rows['partners'];

                                                foreach( $partners as $partner ) {
                                                    if( $partner ): 
                                                        $name = $partner['partner_name'];
                                                        $url = $partner['url'];
                                                        ?>
                                                        <li><a href="<?php echo esc_url( $url ); ?>" target="_blank"><?php echo $name; ?></a></li>
                                                    <?php endif;
                                                }
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
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
                    <div class="lines"> 
                        <div class="top-line"></div>
                        
                        <div class="mod-our-people js-anim-children--slidefade">
                            <div class="mod-our-people--title">
                                <h2 class="h3"><?php echo strip_tags( $section_3['title'], '<br>' ); ?></h2>
                            </div>
                            <?php 
                            $people = $section_3['people_list'];
                            if( $people ) {
                                foreach( $people as $person ) {
                                    $image = $person['image'];
                                    $name = $person['name'];
                                    $bio = $person['bio'];
                                    $link = $person['link'];
                                    ?>
                                    <div class="mod-our-people--person">
                                        <div class="wp-copy">
                                            <?php 
                                            if( !empty( $image ) ): ?>
                                            <figure>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            </figure>
                                            <?php endif; ?>
                                            <h4 class="h5"><?php echo strip_tags( $name, '<br>' ); ?></h4>
                                            <?php echo $bio; ?>
                                            
                                            <?php
                                            if( $link ): 
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                                                
                                                <a href="<?php echo esc_url( $link_url ); ?>" class="darkgrey" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif ?>
            
            <?php
            $section_4 = get_field('section_4');
            if( $section_4 ): ?>
            <section>   
                <div class="container"> 
                    <div class="lines lines--noleft lines--noright">    
                        <div class="top-line"></div>
                        
                        <div class="mod-our-board js-anim-children--slidefade">
                            <div class="mod-our-board--title">
                                <h2 class="h3"><?php echo strip_tags( $section_4['title'], '<br>' ); ?></h2>
                            </div>
                            <?php 
                            $people = $section_4['people_list'];
                            if( $people ) {
                                foreach( $people as $person ) {
                                    $name = $person['name'];
                                    $bio = $person['bio'];
                                    $link = $person['link'];
                                    ?>
                                    <div class="mod-our-board--person">
                                        <div class="wp-copy">
                                            <h4 class="h5"><?php echo strip_tags( $name, '<br>' ); ?></h4>
                                            <?php echo $bio; ?>
                                            
                                            <?php
                                            if( $link ): 
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                                                
                                                <a href="<?php echo esc_url( $link_url ); ?>" class="darkgrey" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif ?>
    
        </main>

    <?php endwhile;endif; ?>

<?php get_footer(); ?>
