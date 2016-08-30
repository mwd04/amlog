<?php
/**
Template Name: Home Page
 *
 * @package portfolio
 */

get_header('home'); ?>


    <section id="home-hero" class="hero-bg" style="background: url('<?php echo get_theme_mod( 'home_bg_image' ); ?>') 50% 0 no-repeat;" data-speed="8" data-type="background"> 

    <?php if( get_theme_mod( 'active_intro' ) == '') : ?>

        <div class="hero-container">
            <div class="hero-text">
                <?php if ( get_theme_mod( 'intro_text' ) ) : ?>
                    <h2><?php echo get_theme_mod( 'intro_text' ); ?></h2>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'intro_textbox' ) ) : ?>
                    <h3><?php echo get_theme_mod( 'intro_textbox' ); ?></h3>
                <?php endif; ?>
            </div><!-- hero-text -->
        </div><!-- hero-container -->

    <?php else : ?>
    <?php endif; ?>
    <?php // end if ?>

    </section><!-- home-hero -->


    <!-- レイアウト塊    -->
    <section id="home-stickies">

        <div class="top-section">
            <div class="top-left">

                <?php
                $numposts = $wpdb->get_var("SELECT count(*) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post'");
                if (0 < $numposts)
                     $numposts = number_format($numposts);
                // Allow post types to be filtered
                $posttypes = apply_filters(
                    'modernthemes_portfolio_posttypes',
                    array(
                        'post',
                        'work'
                    )
                );
                $args = array(
                    'post_type' => $posttypes,
                    'meta_key' => '_wk_work_checkbox',
                    'posts_per_page' => $numposts,
                    'fields' => 'ids'
                );
                $myposts = get_posts( $args ); ?>



                <!-- レイアウト塊    -->
                <?php if ( $myposts[0] ) { ?>
                <div class="square-box large-square top-left-square-large">
                    <div class="square-content sq-1">
                        <div>
                            <span>
                                <a href="<?php echo get_permalink($myposts[0]); ?>">
                                    <figure class="effect-chico">
                                        <?php echo get_the_post_thumbnail($myposts[0], 'large-square'); ?>
                                        <figcaption>
                                            <p><?php echo get_the_title($myposts[0]); ?></p>
                                        </figcaption>
                                    </figure><!-- effect-chico -->
                                </a>
                            </span>
                        </div>
                    </div>
                </div><!-- square-box -->

                <?php }
                if ( $myposts[1] ) { ?>

                <div class="square-box top-left-square">
                    <div class="square-content sq-2">
                        <div>
                            <span>
                                <a href="<?php echo get_permalink($myposts[1]); ?>">
                                    <figure class="effect-chico">
                                        <?php echo get_the_post_thumbnail($myposts[1], 'small-square'); ?>
                                        <figcaption>
                                            <p><?php echo get_the_title($myposts[1]); ?></p>
                                        </figcaption>
                                    </figure><!-- effect-chico -->
                                </a>
                            </span>
                        </div>
                    </div>
                </div><!-- square-box -->

                <?php }
                if ( $myposts[2] ) { ?>

                <div class="square-box top-left-square">
                    <div class="square-content sq-3">
                        <div>
                            <span>
                                <a href="<?php echo get_permalink($myposts[2]); ?>">
                                    <figure class="effect-chico">
                                        <?php echo get_the_post_thumbnail($myposts[2], 'small-square'); ?>
                                        <figcaption>
                                            <p><?php echo get_the_title($myposts[2]); ?></p>
                                        </figcaption>
                                    </figure><!-- effect-chico -->
                                </a>
                            </span>
                        </div>
                    </div>
                </div><!-- square-box -->

                <?php }
                if ( $myposts[5] ) { ?>

                <div class="square-box large-square top-bottom-left-square">
                    <div class="square-content sq-4">
                        <div>
                            <span>
                                <a href="<?php echo get_permalink($myposts[5]); ?>">
                                    <figure class="effect-chico">
                                        <?php echo get_the_post_thumbnail($myposts[5], 'large-square'); ?>
                                        <figcaption>
                                            <p><?php echo get_the_title($myposts[5]); ?></p>
                                        </figcaption>
                                    </figure><!-- effect-chico -->
                                </a>
                            </span>
                        </div>
                    </div>
                </div><!-- square-box -->

                <?php }
                if ( $myposts[4] ) { ?>

                <div class="square-box">
                    <div class="square-content sq-5">
                        <div>
                            <span>
                                <a href="<?php echo get_permalink($myposts[4]); ?>">
                                    <figure class="effect-chico">
                                        <?php echo get_the_post_thumbnail($myposts[4], 'small-square'); ?>
                                        <figcaption>
                                            <p><?php echo get_the_title($myposts[4]); ?></p>
                                        </figcaption>
                                    </figure><!-- effect-chico -->
                                </a>
                            </span>
                        </div>
                    </div>
                </div><!-- square-box -->

                <?php } ?>

            </div><!-- top-left -->

            <div class="top-right">

                <div class="square-box full-square top-right-square">
                    <?php if ( get_theme_mod( 'description_textbox' ) ) : ?>
                        <div class="square-content sq-6 site-description-square">
                            <div>
                                <span>
                                    <?php echo get_theme_mod( 'description_textbox' ); ?>
                                </span>
                            </div>
                        </div>
                    <?php endif; ?>
                </div><!-- square-box -->

                <?php
                if ( $myposts[3] ) { ?>

                <div class="square-box full-square top-bottom-right-square">
                    <div class="square-content sq-7">
                        <div>
                            <span>
                                <a href="<?php echo get_permalink($myposts[3]); ?>">
                                    <figure class="effect-chico">
                                        <?php echo get_the_post_thumbnail($myposts[3], 'large-square'); ?>
                                        <figcaption>
                                            <p><?php echo get_the_title($myposts[3]); ?></p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </span>
                        </div>
                    </div>
                </div><!-- square-box -->

                <?php } ?>

            </div><!-- top-right -->
        </div><!-- top-section -->

        <div class="bottom">

            <?php
            if ( $myposts[6] ) { ?>

            <div class="square-box bottom-square">
                <div class="square-content sq-8">
                    <div>
                        <span>
                            <a href="<?php echo get_permalink($myposts[6]); ?>">
                                <figure class="effect-chico">
                                    <?php echo get_the_post_thumbnail($myposts[6], 'small-square'); ?>
                                    <figcaption>
                                        <p><?php echo get_the_title($myposts[6]); ?></p>
                                    </figcaption>
                                </figure><!-- effect-chico -->
                            </a>
                        </span>
                    </div>
                </div><!-- square-content -->
            </div><!-- square-box -->

            <?php }
            if ( $myposts[7] ) { ?>

            <div class="square-box bottom-square">
                <div class="square-content sq-9">
                    <div>
                        <span>
                            <a href="<?php echo get_permalink($myposts[7]); ?>">
                                <figure class="effect-chico">
                                    <?php echo get_the_post_thumbnail($myposts[7], 'small-square'); ?>
                                    <figcaption>
                                        <p><?php echo get_the_title($myposts[7]); ?></p>
                                    </figcaption>
                                </figure><!-- effect-chico -->
                            </a>
                        </span>
                    </div>
                </div><!-- square-content -->
            </div><!-- square-box -->

            <?php }
            if ( $myposts[8] ) { ?>

            <div class="square-box bottom-square">
                <div class="square-content sq-10">
                    <div>
                        <span>
                            <a href="<?php echo get_permalink($myposts[8]); ?>">
                                <figure class="effect-chico">
                                    <?php echo get_the_post_thumbnail($myposts[8], 'small-square'); ?>
                                    <figcaption>
                                        <p><?php echo get_the_title($myposts[8]); ?></p>
                                    </figcaption>
                                </figure><!-- effect-chico -->
                            </a>
                        </span>
                    </div>
                </div><!-- square-content -->
            </div><!-- square-box -->

            <?php }
            if ( $myposts[9] ) { ?>

            <div class="square-box bottom-square">
                <div class="square-content sq-11">
                    <div>
                        <span>
                            <a href="<?php echo get_permalink($myposts[9]); ?>">
                                <figure class="effect-chico">
                                    <?php echo get_the_post_thumbnail($myposts[9], 'small-square'); ?>
                                    <figcaption>
                                        <p><?php echo get_the_title($myposts[9]); ?></p>
                                    </figcaption>
                                </figure><!-- effect-chico -->
                            </a>
                        </span>
                    </div>
                </div><!-- square-content -->
            </div><!-- square-box -->

            <?php }
            if ( $myposts[10] ) { ?>

            <div class="square-box bottom-square">
                <div class="square-content sq-12">
                    <div>
                        <span>
                            <a href="<?php echo get_permalink($myposts[10]); ?>">
                                <figure class="effect-chico">
                                    <?php echo get_the_post_thumbnail($myposts[10], 'small-square'); ?>
                                    <figcaption>
                                        <p><?php echo get_the_title($myposts[10]); ?></p>
                                    </figcaption>
                                </figure><!-- effect-chico -->
                            </a>
                        </span>
                    </div>
                </div><!-- square-content -->
            </div><!-- square-box -->

            <?php } ?>
            </div><!-- bottom -->
        </section>
        <!-- //レイアウト塊    -->
        

        <!-- レイアウト塊    -->
        <section id="home-stickies">
            <div class="top-section">
            <div class="top-left">
            <?php 
            if ( $myposts[11] ) { ?>
                <div class="square-box large-square top-left-square-large">
                    <div class="square-content sq-1">
                        <div>
                            <span>
                                <a href="<?php echo get_permalink($myposts[11]); ?>">
                                    <figure class="effect-chico">
                                        <?php echo get_the_post_thumbnail($myposts[11], 'large-square'); ?>
                                        <figcaption>
                                            <p><?php echo get_the_title($myposts[11]); ?></p>
                                        </figcaption>
                                    </figure><!-- effect-chico -->
                                </a>
                            </span>
                        </div>
                    </div>
                </div><!-- square-box -->

                <?php }
                if ( $myposts[12] ) { ?>

                <div class="square-box top-left-square">
                    <div class="square-content sq-2">
                        <div>
                            <span>
                                <a href="<?php echo get_permalink($myposts[12]); ?>">
                                    <figure class="effect-chico">
                                        <?php echo get_the_post_thumbnail($myposts[12], 'small-square'); ?>
                                        <figcaption>
                                            <p><?php echo get_the_title($myposts[12]); ?></p>
                                        </figcaption>
                                    </figure><!-- effect-chico -->
                                </a>
                            </span>
                        </div>
                    </div>
                </div><!-- square-box -->

                <?php }
                if ( $myposts[13] ) { ?>

                <div class="square-box top-left-square">
                    <div class="square-content sq-3">
                        <div>
                            <span>
                                <a href="<?php echo get_permalink($myposts[13]); ?>">
                                    <figure class="effect-chico">
                                        <?php echo get_the_post_thumbnail($myposts[13], 'small-square'); ?>
                                        <figcaption>
                                            <p><?php echo get_the_title($myposts[13]); ?></p>
                                        </figcaption>
                                    </figure><!-- effect-chico -->
                                </a>
                            </span>
                        </div>
                    </div>
                </div><!-- square-box -->

                <?php }
                if ( $myposts[16] ) { ?>

                <div class="square-box large-square top-bottom-left-square">
                    <div class="square-content sq-4">
                        <div>
                            <span>
                                <a href="<?php echo get_permalink($myposts[16]); ?>">
                                    <figure class="effect-chico">
                                        <?php echo get_the_post_thumbnail($myposts[16], 'large-square'); ?>
                                        <figcaption>
                                            <p><?php echo get_the_title($myposts[16]); ?></p>
                                        </figcaption>
                                    </figure><!-- effect-chico -->
                                </a>
                            </span>
                        </div>
                    </div>
                </div><!-- square-box -->

                <?php }
                if ( $myposts[15] ) { ?>

                <div class="square-box">
                    <div class="square-content sq-5">
                        <div>
                            <span>
                                <a href="<?php echo get_permalink($myposts[15]); ?>">
                                    <figure class="effect-chico">
                                        <?php echo get_the_post_thumbnail($myposts[15], 'small-square'); ?>
                                        <figcaption>
                                            <p><?php echo get_the_title($myposts[15]); ?></p>
                                        </figcaption>
                                    </figure><!-- effect-chico -->
                                </a>
                            </span>
                        </div>
                    </div>
                </div><!-- square-box -->

                <?php } ?>

            </div><!-- top-left -->

            <div class="top-right">

                <div class="square-box full-square top-right-square">
                    <?php if ( get_theme_mod( 'description_textbox' ) ) : ?>
                        <div class="square-content sq-6 site-description-square">
                            <div>
                                <span>
                                    <?php echo get_theme_mod( 'description_textbox' ); ?>
                                </span>
                            </div>
                        </div>
                    <?php endif; ?>
                </div><!-- square-box -->

                <?php
                if ( $myposts[14] ) { ?>

                <div class="square-box full-square top-bottom-right-square">
                    <div class="square-content sq-7">
                        <div>
                            <span>
                                <a href="<?php echo get_permalink($myposts[14]); ?>">
                                    <figure class="effect-chico">
                                        <?php echo get_the_post_thumbnail($myposts[14], 'large-square'); ?>
                                        <figcaption>
                                            <p><?php echo get_the_title($myposts[14]); ?></p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </span>
                        </div>
                    </div>
                </div><!-- square-box -->

                <?php } ?>

            </div><!-- top-right -->
        </div><!-- top-section -->

        <div class="bottom">

            <?php
            if ( $myposts[17] ) { ?>

            <div class="square-box bottom-square">
                <div class="square-content sq-8">
                    <div>
                        <span>
                            <a href="<?php echo get_permalink($myposts[17]); ?>">
                                <figure class="effect-chico">
                                    <?php echo get_the_post_thumbnail($myposts[17], 'small-square'); ?>
                                    <figcaption>
                                        <p><?php echo get_the_title($myposts[17]); ?></p>
                                    </figcaption>
                                </figure><!-- effect-chico -->
                            </a>
                        </span>
                    </div>
                </div><!-- square-content -->
            </div><!-- square-box -->

            <?php }
            if ( $myposts[18] ) { ?>

            <div class="square-box bottom-square">
                <div class="square-content sq-9">
                    <div>
                        <span>
                            <a href="<?php echo get_permalink($myposts[18]); ?>">
                                <figure class="effect-chico">
                                    <?php echo get_the_post_thumbnail($myposts[18], 'small-square'); ?>
                                    <figcaption>
                                        <p><?php echo get_the_title($myposts[18]); ?></p>
                                    </figcaption>
                                </figure><!-- effect-chico -->
                            </a>
                        </span>
                    </div>
                </div><!-- square-content -->
            </div><!-- square-box -->

            <?php }
            if ( $myposts[19] ) { ?>

            <div class="square-box bottom-square">
                <div class="square-content sq-10">
                    <div>
                        <span>
                            <a href="<?php echo get_permalink($myposts[19]); ?>">
                                <figure class="effect-chico">
                                    <?php echo get_the_post_thumbnail($myposts[19], 'small-square'); ?>
                                    <figcaption>
                                        <p><?php echo get_the_title($myposts[19]); ?></p>
                                    </figcaption>
                                </figure><!-- effect-chico -->
                            </a>
                        </span>
                    </div>
                </div><!-- square-content -->
            </div><!-- square-box -->

            <?php }
            if ( $myposts[20] ) { ?>

            <div class="square-box bottom-square">
                <div class="square-content sq-11">
                    <div>
                        <span>
                            <a href="<?php echo get_permalink($myposts[20]); ?>">
                                <figure class="effect-chico">
                                    <?php echo get_the_post_thumbnail($myposts[20], 'small-square'); ?>
                                    <figcaption>
                                        <p><?php echo get_the_title($myposts[20]); ?></p>
                                    </figcaption>
                                </figure><!-- effect-chico -->
                            </a>
                        </span>
                    </div>
                </div><!-- square-content -->
            </div><!-- square-box -->

            <?php }
            if ( $myposts[21] ) { ?>

            <div class="square-box bottom-square">
                <div class="square-content sq-12">
                    <div>
                        <span>
                            <a href="<?php echo get_permalink($myposts[21]); ?>">
                                <figure class="effect-chico">
                                    <?php echo get_the_post_thumbnail($myposts[21], 'small-square'); ?>
                                    <figcaption>
                                        <p><?php echo get_the_title($myposts[21]); ?></p>
                                    </figcaption>
                                </figure><!-- effect-chico -->
                            </a>
                        </span>
                    </div>
                </div><!-- square-content -->
            </div><!-- square-box -->

            <?php } ?>
        </div><!-- bottom -->
    </section><!-- home-stickies -->
    <!-- //レイアウト塊    -->

            <!-- レイアウト塊    -->
        <section id="home-stickies">
            <div class="top-section">
            <div class="top-left">
            <?php 
            if ( $myposts[22] ) { ?>
                <div class="square-box large-square top-left-square-large">
                    <div class="square-content sq-1">
                        <div>
                            <span>
                                <a href="<?php echo get_permalink($myposts[22]); ?>">
                                    <figure class="effect-chico">
                                        <?php echo get_the_post_thumbnail($myposts[22], 'large-square'); ?>
                                        <figcaption>
                                            <p><?php echo get_the_title($myposts[22]); ?></p>
                                        </figcaption>
                                    </figure><!-- effect-chico -->
                                </a>
                            </span>
                        </div>
                    </div>
                </div><!-- square-box -->

                <?php }
                if ( $myposts[23] ) { ?>

                <div class="square-box top-left-square">
                    <div class="square-content sq-2">
                        <div>
                            <span>
                                <a href="<?php echo get_permalink($myposts[23]); ?>">
                                    <figure class="effect-chico">
                                        <?php echo get_the_post_thumbnail($myposts[23], 'small-square'); ?>
                                        <figcaption>
                                            <p><?php echo get_the_title($myposts[23]); ?></p>
                                        </figcaption>
                                    </figure><!-- effect-chico -->
                                </a>
                            </span>
                        </div>
                    </div>
                </div><!-- square-box -->

                <?php }
                if ( $myposts[24] ) { ?>

                <div class="square-box top-left-square">
                    <div class="square-content sq-3">
                        <div>
                            <span>
                                <a href="<?php echo get_permalink($myposts[24]); ?>">
                                    <figure class="effect-chico">
                                        <?php echo get_the_post_thumbnail($myposts[24], 'small-square'); ?>
                                        <figcaption>
                                            <p><?php echo get_the_title($myposts[24]); ?></p>
                                        </figcaption>
                                    </figure><!-- effect-chico -->
                                </a>
                            </span>
                        </div>
                    </div>
                </div><!-- square-box -->

                <?php }
                if ( $myposts[25] ) { ?>

                <div class="square-box large-square top-bottom-left-square">
                    <div class="square-content sq-4">
                        <div>
                            <span>
                                <a href="<?php echo get_permalink($myposts[25]); ?>">
                                    <figure class="effect-chico">
                                        <?php echo get_the_post_thumbnail($myposts[25], 'large-square'); ?>
                                        <figcaption>
                                            <p><?php echo get_the_title($myposts[25]); ?></p>
                                        </figcaption>
                                    </figure><!-- effect-chico -->
                                </a>
                            </span>
                        </div>
                    </div>
                </div><!-- square-box -->

                <?php }
                if ( $myposts[26] ) { ?>

                <div class="square-box">
                    <div class="square-content sq-5">
                        <div>
                            <span>
                                <a href="<?php echo get_permalink($myposts[26]); ?>">
                                    <figure class="effect-chico">
                                        <?php echo get_the_post_thumbnail($myposts[26], 'small-square'); ?>
                                        <figcaption>
                                            <p><?php echo get_the_title($myposts[26]); ?></p>
                                        </figcaption>
                                    </figure><!-- effect-chico -->
                                </a>
                            </span>
                        </div>
                    </div>
                </div><!-- square-box -->

                <?php } ?>

            </div><!-- top-left -->

            <div class="top-right">

                <div class="square-box full-square top-right-square">
                    <?php if ( get_theme_mod( 'description_textbox' ) ) : ?>
                        <div class="square-content sq-6 site-description-square">
                            <div>
                                <span>
                                    <?php echo get_theme_mod( 'description_textbox' ); ?>
                                </span>
                            </div>
                        </div>
                    <?php endif; ?>
                </div><!-- square-box -->

                <?php
                if ( $myposts[27] ) { ?>

                <div class="square-box full-square top-bottom-right-square">
                    <div class="square-content sq-7">
                        <div>
                            <span>
                                <a href="<?php echo get_permalink($myposts[27]); ?>">
                                    <figure class="effect-chico">
                                        <?php echo get_the_post_thumbnail($myposts[27], 'large-square'); ?>
                                        <figcaption>
                                            <p><?php echo get_the_title($myposts[27]); ?></p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </span>
                        </div>
                    </div>
                </div><!-- square-box -->

                <?php } ?>

            </div><!-- top-right -->
        </div><!-- top-section -->

        <div class="bottom">

            <?php
            if ( $myposts[28] ) { ?>

            <div class="square-box bottom-square">
                <div class="square-content sq-8">
                    <div>
                        <span>
                            <a href="<?php echo get_permalink($myposts[28]); ?>">
                                <figure class="effect-chico">
                                    <?php echo get_the_post_thumbnail($myposts[28], 'small-square'); ?>
                                    <figcaption>
                                        <p><?php echo get_the_title($myposts[28]); ?></p>
                                    </figcaption>
                                </figure><!-- effect-chico -->
                            </a>
                        </span>
                    </div>
                </div><!-- square-content -->
            </div><!-- square-box -->

            <?php }
            if ( $myposts[29] ) { ?>

            <div class="square-box bottom-square">
                <div class="square-content sq-9">
                    <div>
                        <span>
                            <a href="<?php echo get_permalink($myposts[29]); ?>">
                                <figure class="effect-chico">
                                    <?php echo get_the_post_thumbnail($myposts[29], 'small-square'); ?>
                                    <figcaption>
                                        <p><?php echo get_the_title($myposts[29]); ?></p>
                                    </figcaption>
                                </figure><!-- effect-chico -->
                            </a>
                        </span>
                    </div>
                </div><!-- square-content -->
            </div><!-- square-box -->

            <?php }
            if ( $myposts[30] ) { ?>

            <div class="square-box bottom-square">
                <div class="square-content sq-10">
                    <div>
                        <span>
                            <a href="<?php echo get_permalink($myposts[30]); ?>">
                                <figure class="effect-chico">
                                    <?php echo get_the_post_thumbnail($myposts[30], 'small-square'); ?>
                                    <figcaption>
                                        <p><?php echo get_the_title($myposts[30]); ?></p>
                                    </figcaption>
                                </figure><!-- effect-chico -->
                            </a>
                        </span>
                    </div>
                </div><!-- square-content -->
            </div><!-- square-box -->

            <?php }
            if ( $myposts[31] ) { ?>

            <div class="square-box bottom-square">
                <div class="square-content sq-11">
                    <div>
                        <span>
                            <a href="<?php echo get_permalink($myposts[31]); ?>">
                                <figure class="effect-chico">
                                    <?php echo get_the_post_thumbnail($myposts[31], 'small-square'); ?>
                                    <figcaption>
                                        <p><?php echo get_the_title($myposts[31]); ?></p>
                                    </figcaption>
                                </figure><!-- effect-chico -->
                            </a>
                        </span>
                    </div>
                </div><!-- square-content -->
            </div><!-- square-box -->

            <?php }
            if ( $myposts[32] ) { ?>

            <div class="square-box bottom-square">
                <div class="square-content sq-12">
                    <div>
                        <span>
                            <a href="<?php echo get_permalink($myposts[32]); ?>">
                                <figure class="effect-chico">
                                    <?php echo get_the_post_thumbnail($myposts[32], 'small-square'); ?>
                                    <figcaption>
                                        <p><?php echo get_the_title($myposts[32]); ?></p>
                                    </figcaption>
                                </figure><!-- effect-chico -->
                            </a>
                        </span>
                    </div>
                </div><!-- square-content -->
            </div><!-- square-box -->

            <?php } ?>
        </div><!-- bottom -->
    </section><!-- home-stickies -->
    <!-- //レイアウト塊    -->


<?php get_footer(); ?>
