<?php
/**
Template Name: Home Page
 *
 * @package portfolio
 */

get_header('home'); ?>

<script src="<?php echo site_url( "wp-content/themes/portfolio/js/jquery.lazyload.min.js" ); ?>"></script>

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


    <?php
    //総post数取得
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
    $myposts = get_posts( $args );
    ?>

    
    <?php
    $i = 0;
    while($i < $numposts){
    ?>
    <!-- レイアウト塊    -->
    <section id="home-stickies">
    <!-- top-section -->
    <div class="top-section">
    <!-- top-left -->
    <div class="top-left">
        <?php if($i < $numposts){ ?>
        <div class="square-box large-square top-left-square-large">
            <div class="square-content sq-1">
                <div>
                    <span>
                    <a href="<?php echo get_permalink($myposts[$i]); ?>">
                    <figure class="effect-chico">
                    <?php echo get_the_post_thumbnail($myposts[$i], 'large-square'); ?>
                    <figcaption><p><?php echo get_the_title($myposts[$i]); ?></p></figcaption>
                    </figure>
                    </a>
                    </span>
                </div>
            </div>
        </div>
        <?php }
        $i++;
        if($i < $numposts){ ?>
        <div class="square-box top-left-square">
            <div class="square-content sq-2">
                <div>
                    <span>
                    <a href="<?php echo get_permalink($myposts[$i]); ?>">
                    <figure class="effect-chico">
                    <?php echo get_the_post_thumbnail($myposts[$i], 'small-square'); ?>
                    <figcaption><p><?php echo get_the_title($myposts[$i]); ?></p></figcaption>
                    </figure>
                    </a>
                    </span>
                </div>
            </div>
        </div>
        <?php }
        $i++;
        if($i < $numposts){ ?>
        <div class="square-box top-left-square">
            <div class="square-content sq-3">
                <div>
                    <span>
                    <a href="<?php echo get_permalink($myposts[$i]); ?>">
                    <figure class="effect-chico">
                    <?php echo get_the_post_thumbnail($myposts[$i], 'small-square'); ?>
                    <figcaption><p><?php echo get_the_title($myposts[$i]); ?></p></figcaption>
                    </figure>
                    </a>
                    </span>
                </div>
            </div>
        </div>
        <?php }
        $i++;
        if($i < $numposts){ ?>
        <div class="square-box large-square top-bottom-left-square">
            <div class="square-content sq-4">
                <div>
                    <span>
                    <a href="<?php echo get_permalink($myposts[$i]); ?>">
                    <figure class="effect-chico">
                    <?php echo get_the_post_thumbnail($myposts[$i], 'large-square'); ?>
                    <figcaption><p><?php echo get_the_title($myposts[$i]); ?></p></figcaption>
                    </figure>
                    </a>
                    </span>
                </div>
            </div>
        </div>
        <?php }
        $i++;
        if($i < $numposts){ ?>
        <div class="square-box">
            <div class="square-content sq-5">
                <div>
                    <span>
                    <a href="<?php echo get_permalink($myposts[$i]); ?>">
                    <figure class="effect-chico">
                    <?php echo get_the_post_thumbnail($myposts[$i], 'small-square'); ?>
                    <figcaption><p><?php echo get_the_title($myposts[$i]); ?></p></figcaption>
                    </figure>
                    </a>
                    </span>
                </div>
            </div>
        </div>
        <?php }
        $i++; ?>
    </div>
    <!-- //top-left -->
    <!-- top-right -->
    <div class="top-right">
        <div class="square-box full-square top-right-square">
            <?php if ( get_theme_mod( 'description_textbox' ) ) : ?>
            <div class="square-content sq-6 site-description-square">
            <div><span><?php echo get_theme_mod( 'description_textbox' ); ?></span></div>
            </div>
            <?php endif; ?>
        </div>
        <?php if($i < $numposts){ ?>
        <div class="square-box full-square top-bottom-right-square">
            <div class="square-content sq-7">
                <div>
                    <span>
                    <a href="<?php echo get_permalink($myposts[$i]); ?>">
                    <figure class="effect-chico">
                    <?php echo get_the_post_thumbnail($myposts[$i], 'large-square'); ?>
                    <figcaption><p><?php echo get_the_title($myposts[$i]); ?></p></figcaption>
                    </figure>
                    </a>
                    </span>
                </div>
            </div>
        </div>
        <?php }
        $i++;
        if($i < $numposts){ ?>
    </div>
    <!-- //top-right -->
    </div>
    <!-- //top-section -->
    <!-- top-bottom -->
    <div class="bottom">
        <div class="square-box bottom-square">
            <div class="square-content sq-8">
                <div>
                    <span>
                    <a href="<?php echo get_permalink($myposts[$i]); ?>">
                    <figure class="effect-chico">
                    <?php echo get_the_post_thumbnail($myposts[$i], 'small-square'); ?>
                    <figcaption><p><?php echo get_the_title($myposts[$i]); ?></p></figcaption>
                    </figure>
                    </a>
                    </span>
                </div>
            </div>
        </div>
        <?php }
        $i++;
        if($i < $numposts){ ?>
        <div class="square-box bottom-square">
            <div class="square-content sq-8">
                <div>
                    <span>
                    <a href="<?php echo get_permalink($myposts[$i]); ?>">
                    <figure class="effect-chico">
                    <?php echo get_the_post_thumbnail($myposts[$i], 'small-square'); ?>
                    <figcaption><p><?php echo get_the_title($myposts[$i]); ?></p></figcaption>
                    </figure>
                    </a>
                    </span>
                </div>
            </div>
        </div>
        <?php }
        $i++;
        if($i < $numposts){ ?>
        <div class="square-box bottom-square">
            <div class="square-content sq-8">
                <div>
                    <span>
                    <a href="<?php echo get_permalink($myposts[$i]); ?>">
                    <figure class="effect-chico">
                    <?php echo get_the_post_thumbnail($myposts[$i], 'small-square'); ?>
                    <figcaption><p><?php echo get_the_title($myposts[$i]); ?></p></figcaption>
                    </figure>
                    </a>
                    </span>
                </div>
            </div>
        </div>
        <?php }
        $i++;
        if($i < $numposts){ ?>
        <div class="square-box bottom-square">
            <div class="square-content sq-8">
                <div>
                    <span>
                    <a href="<?php echo get_permalink($myposts[$i]); ?>">
                    <figure class="effect-chico">
                    <?php echo get_the_post_thumbnail($myposts[$i], 'small-square'); ?>
                    <figcaption><p><?php echo get_the_title($myposts[$i]); ?></p></figcaption>
                    </figure>
                    </a>
                    </span>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <!-- //top-bottom -->
    </section>
    <!-- //レイアウト塊    -->
    <?php
    $i++;
    } 
    ?>


<?php get_footer(); ?>
