<?php

/* Template Name: Jobs */

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
                            <p class="h3 ivanim-fade"><?php echo $hero['head']; ?></p>
                            <h2 class="h2 ivanim-fade"><?php echo strip_tags( $hero['title'], '<br>' ); ?></h2>
                            <div class="ivanim-fade d3">
                                <p><?php echo $hero['copy']; ?></p>
                                
                                <div class="anchors">
                                    <?php if($hero['vacancies_label']) { ?>
                                            <a href="#vacancies" class="cta cta-black"><?php echo $hero['vacancies_label']; ?></a>
                                        <?php 
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif ?>
            
            <?php
            $roles = get_field('roles');
            if( $roles ): ?>
            <section class="mod-roles bg-section--silver">  
                <div class="container"> 
                    <div class="lines"> 
                        <div class="bottom-line"></div>
                        <div class="mod-roles__inner">
                            <div class="mod-roles--title">
                                <h2 class="h3"><?php echo strip_tags( $roles['title'], '<br>' ); ?></h2>
                            </div>
                            <div class="mod-roles--list js-anim-children--slidefade">
                                <?php 
                                $roles_list = $roles['roles'];
                                if( $roles_list ) {
                                    foreach( $roles_list as $role ) {
                                    ?>
                                        <div class="mod-roles--role">
                                            <div class="wp-copy">
                                                <?php 
                                                $tags = $role['tags'];
                                                if( $tags ) {
                                                    foreach( $tags as $tag ) {
                                                        $tag_name = $tag['tag'];
                                                        ?>
                                                        <div class="cta-tag tag"><?php echo $tag_name; ?></div>
                                                    <?php
                                                    }
                                                }
                                                ?>
                                                <h3 class="h4 mod-roles--role--title"><?php echo $role['title']; ?></h3>
                                                <?php echo $role['copy']; ?>
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
            </section>
            <?php endif ?>
            
            <?php
            $vacancies = get_field('vacancies');
            if( $vacancies ): ?>
            <section class="mod-vacancies"> 
                <div class="page-anchor" id="vacancies"></div>
                <div class="container"> 
                    <div class="mod-vacancies--title">
                        <h2 class="h3"><?php echo strip_tags( $vacancies['title'], '<br>' ); ?></h2>
                    </div>
                    <div class="mod-vacancies--list js-anim-children--slidefade">
                            <?php 
                            $jobs_list = $vacancies['jobs'];
                            if( $jobs_list ) {
                                foreach( $jobs_list as $job ) {
                                ?>  
                                <div class="mod-vacancies--vacancy">
                                    <?php if(!empty($job['url_to_apply'])) { ?>
                                        <a href="<?php echo esc_url($job['url_to_apply']); ?>" target="_blank" class="wp-copy">
                                    <?php } else { ?>
                                        <div class="wp-copy">
                                    <?php } ?>
                                        <h3 class="h4 mod-vacancies--vacancy--title"><?php echo $job['job_title']; ?></h3>
                                        <?php echo $job['copy']; ?>
                                        <div class="meta">
                                            <div class="tag"><?php echo $job['job_type']; ?></div>
                                            <div class="tag"><?php echo $job['location']; ?></div>
                                        </div>
                                    <?php if(!empty($job['url_to_apply'])) { ?>
                                        </a>
                                    <?php } else { ?>
                                        </div>
                                    <?php } ?>
                                    </div>
                                <?php
                                }
                            }
                            ?>
                    </div>
                </div>
            </section>
            <?php endif ?>

        </main>

    <?php endwhile;endif; ?>

<?php get_footer(); ?>
