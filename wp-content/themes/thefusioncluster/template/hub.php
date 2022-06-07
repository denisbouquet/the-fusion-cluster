<?php

/* Template Name: Hub */

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
                        <div class="bottom-line"></div>
                        <div class="mod-hero-center__inner inpage-hero">
                            <h2 class="h2 ivanim-fade"><?php echo strip_tags( $hero['title'], '<br>' ); ?></h2>
                            
                            <div class="ivanim-fade d3">
                                <p><?php echo strip_tags( $hero['caption'], '<br>' ); ?></p>
                                
                                <div class="anchors">
                                    <?php if($hero['news_label']) { ?>
                                        <a href="#news" class="cta cta-black"><?php echo $hero['news_label']; ?></a>
                                    <?php 
                                    } 
                                    if($hero['events_label']) { ?>
                                        <a href="#events" class="cta cta-black"><?php echo $hero['events_label']; ?></a>
                                    <?php 
                                    } 
                                    if($hero['downloads_label']) { ?>
                                        <a href="#downloads" class="cta cta-black"><?php echo $hero['downloads_label']; ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif ?>
            
            
            <?php
            $news = get_field('news');
            if( $news ): ?>
            <section class="mod-news">  
                <div class="page-anchor" id="news"></div>
                <div class="container"> 
                    <div class="mod-news--title">
                        <h2 class="h3"><?php echo strip_tags( $news['title'], '<br>' ); ?></h2>
                    </div>
                    <div class="js-show-more-section" data-show="<?php echo $news['show']; ?>">
                        <div class="mod-news--articles js-anim-children--slidefade">
                            <?php 
                            // get id from 
                            $repeater = get_field('news', $news['content']); 

                            // $repeater = get_field('race_event');
                            foreach( $repeater as $key => $row )
                            { 
                                $column_id[ $key ] = strtotime($row['date']);
                            } 
                            array_multisort( $column_id, SORT_DESC, $repeater );
                            
                            $i = 1;
                            foreach( $repeater as $row ) {
                                ?>
                                <div class="js-item is-hidden mod-news--article <?php if($i == 1) { echo 'mod-news--article--featured'; } ?>">
                                    <a href="<?php echo $row['URL']; ?>" class="wp-copy">
                                        <figure>
                                            <?php 
                                            $image = $row['image'];
                                            if( !empty( $image ) ): 

                                                echo wp_get_attachment_image( $image, 'article' );
                                                 
                                            else: ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/pattern/pattern.png" alt="Pattern" />
                                            <?php endif; ?>

                                            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="29" height="29" fill="#fff" fill-opacity="0.95"/>
                                                <path d="M19.3485 10.791L9.15279 20.9671L8 19.8143L18.2249 9.60912L8 9.60912L8 8L19.8143 8L19.834 8L20.9868 9.15279L21 9.1645L21 9.18567L21 21L19.3485 21L19.3485 10.791Z" fill="#FF8DF5"/>
                                            </svg>
                                        </figure>
                                        <div class="date tag"><?php echo $row['date']; ?></div>
                                        <h3 class="h3"><?php echo $row['title']; ?></h3>
                                        <?php 
                                        $tags = $row['tags'];
                                        if( $tags ) {
                                            foreach( $tags as $tag ) {
                                                $tag_name = $tag['tag'];
                                                ?>
                                                <div class="cta-tag tag"><?php echo $tag_name; ?></div>
                                            <?php
                                            }
                                        }
                                        ?>
                                    </a>
                                </div>
        
                                <?php
                                $i++;
                            }
                            ?>      
                        </div>
                        <div class="mod-news--more">
                            <button class="cta-more js-more">Load more</button>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif ?>

            <?php
            $events = get_field('events');
            if( $events ): ?>
            <section class="mod-events bg-section--silver"> 
                <div class="page-anchor" id="events"></div>
                <div class="container mod-tabs">    
                    <div class="mod-events--title">
                        <div class="h3 js-events-tabs mod-tabs__toggle"><a href="#upcoming-events" class="is-current"><?php echo $events['future_event_title']; ?></a> / <a href="#past-events"><?php echo $events['older_events_label']; ?></a></div>
                    </div>
                        
                    <div class="js-show-more-section mod-tabs__content is-visible" data-show="<?php echo $events['show']; ?>" id="upcoming-events">
                        <div class="mod-events--articles js-anim-children--slidefade">            
                            <?php 
                            // get id from 
                            $repeater = get_field('events', $events['content']); 

                            // $repeater = get_field('race_event');
                            foreach( $repeater as $key => $row )
                            { 
                                $event_column_id[ $key ] = strtotime($row['date']);
                            } 
                            array_multisort( $event_column_id, SORT_DESC, $repeater );
                            
                            foreach( $repeater as $row ) {
                                // show current events
                                if(strtotime($row['date']) > strtotime("+1 day")) { 
                                ?>
                                <div class="js-item is-hidden">
                                    <a href="<?php echo $row['url']; ?>" class="mod-events--article">
                                        <div class="mod-events--article--title">
                                            <p><?php echo $row['title']; ?></p>
                                        </div>
                                        <div class="mod-events--article--date">
                                            <?php echo $row['event_date']; ?>
                                        </div>
                                        <div class="mod-events--article--address">
                                            <?php echo $row['location']; ?>
                                        </div>
                                        <div class="mod-events--article--link">
                                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.0225 1.6496L0.682362 13L4.15209e-07 12.3187L11.3573 0.951049L1.00239 0.951037L1.00239 -1.23246e-05L12.2982 -3.06776e-08L12.3098 -3.01694e-08L12.9922 0.681343L13 0.688259L13 0.700773L13 11.658L12.0225 11.658L12.0225 1.6496Z" class="fill" />
                                                <path d="M12.0225 1.6496L0.682362 13L4.15209e-07 12.3187L11.3573 0.951049L1.00239 0.951037L1.00239 -1.23246e-05L12.2982 -3.06776e-08L12.3098 -3.01694e-08L12.9922 0.681343L13 0.688259L13 0.700773L13 11.658L12.0225 11.658L12.0225 1.6496Z" class="stroke" />
                                            </svg>
                                        </div>  
                                    </a>
                                </div>
                                <?php
                                }
                            }
                            ?>
                            <div class="mod-events--more">
                                <button class="cta-more js-more">Load more</button>
                            </div>
                        </div>
                    </div>
                    
                        
                    <!-- past -->
                    <div class="mod-tabs__content js-show-more-section" data-show="<?php echo $events['show']; ?>" id="past-events">
                        <div class="mod-events--articles js-anim-children--slidefade">
                            <?php 
                            foreach( $repeater as $row ) {
                                // show current events
                                if(strtotime($row['date']) < strtotime("now")) { 
                                ?>
                                <div class="js-item is-hidden">
                                    <a href="<?php echo $row['url']; ?>" class="mod-events--article">
                                        <div class="mod-events--article--title">
                                            <p><?php echo $row['title']; ?></p>
                                        </div>
                                        <div class="mod-events--article--date">
                                            <?php echo $row['event_date']; ?>
                                        </div>
                                        <div class="mod-events--article--address">
                                            <?php echo $row['location']; ?>
                                        </div>
                                        <div class="mod-events--article--link">
                                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.0225 1.6496L0.682362 13L4.15209e-07 12.3187L11.3573 0.951049L1.00239 0.951037L1.00239 -1.23246e-05L12.2982 -3.06776e-08L12.3098 -3.01694e-08L12.9922 0.681343L13 0.688259L13 0.700773L13 11.658L12.0225 11.658L12.0225 1.6496Z" class="fill" />
                                                <path d="M12.0225 1.6496L0.682362 13L4.15209e-07 12.3187L11.3573 0.951049L1.00239 0.951037L1.00239 -1.23246e-05L12.2982 -3.06776e-08L12.3098 -3.01694e-08L12.9922 0.681343L13 0.688259L13 0.700773L13 11.658L12.0225 11.658L12.0225 1.6496Z" class="stroke" />
                                            </svg>
                                        </div>  
                                    </a>
                                </div>
                                <?php
                                }
                            }
                            ?>  
                        </div>
                        <div class="mod-events--more">
                            <button class="cta-more js-more">Load more</button>
                        </div>
                    </div>

                </div>
            </section>
            <?php endif ?>

            <?php
            $downloads = get_field('downloads');
            if( $downloads ): ?>
            <section class="mod-downloads"> 
                <div class="page-anchor" id="downloads"></div>
                <div class="container"> 
                    <div class="mod-downloads--title">
                        <h2 class="h3"><?php echo $downloads['title']; ?></h2>
                        <p><?php echo $downloads['caption']; ?></p>
                    </div>
                    <div class="js-show-more-section" data-show="<?php echo $downloads['show']; ?>">
                        <div class="mod-downloads--articles js-anim-children--slidefade">
                            <?php 
                            // get id from 
                            $repeater = get_field('documents', $downloads['content']); 

                            // $repeater = get_field('race_event');
                            foreach( $repeater as $key => $row )
                            { 
                                $event_column_id[ $key ] = strtotime($row['date']);
                            } 
                            array_multisort( $event_column_id, SORT_DESC, $repeater );
                            
                            foreach( $repeater as $row ) {
                                ?>
                                <div class="mod-downloads--article js-item is-hidden">
                                    <div>
                                        <div class="mod-downloads--article--icon">
                                            <svg width="172" height="344" viewBox="0 0 172 344" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M186.305 207.768V343.458H156.698V207.7L171.501 192.964L186.305 207.768Z" fill="#FF8DF5"/>
                                            <path d="M186.305 0.501953V136.243L171.501 151.047L156.698 136.243V0.501953H186.305Z" fill="#FF8DF5"/>
                                            <path d="M135.741 186.776H156.666V207.701L60.6892 303.695L39.7642 282.77L135.741 186.776Z" fill="#FF8DF5"/>
                                            <path d="M60.6672 40.2668L156.644 136.244V157.237H135.787L39.7422 61.1919L60.6672 40.2668Z" fill="#FF8DF5"/>
                                            <path d="M135.809 157.236L150.545 171.972L135.742 186.775H0V157.236H135.809Z" fill="#FF8DF5"/>
                                            </svg>

                                        </div>
                                        <div class="mod-downloads--article--title">
                                            <div class="tag date"><?php echo $row['date']; ?></div>
                                            <h3 class="h4"><?php echo strip_tags( $hero['title'], '<br>' ); ?></h3>
                                            <p><?php echo $row['author']; ?></p>
                                        </div>
                                        <div class="mod-downloads--article--cta">
                                            <?php if($row['file']): ?>
                                                <a href="<?php echo $row['file']; ?>" class="cta-download">Download</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="mod-downloads--more">
                            <button class="cta-more js-more">Load more</button>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif ?>
    
        </main>

        

    <?php endwhile;endif; ?>

<?php get_footer(); ?>
