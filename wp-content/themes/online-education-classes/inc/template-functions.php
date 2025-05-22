<?php
/**
 * @package Online Education Classes
 */

/**
 * Footer
 */
if (! function_exists( 'online_education_classes_footer_copyrights' ) ):
    function online_education_classes_footer_copyrights() {
        ?>
            <div class="row">
                 <div class="copyrights">
                    <p>
                        <?php
                            if("" != esc_html(get_theme_mod( 'online_education_classes_footer_copyright_text'))) :
                                echo esc_html(get_theme_mod( 'online_education_classes_footer_copyright_text'));
                                if(get_theme_mod('online_education_classes_en_footer_credits',true)) :
                                    ?>
                                    <span><?php esc_html_e(' | Theme by ','online-education-classes') ?><?php esc_html_e('Legacy Themes','online-education-classes') ?></span>
                                    <?php   
                                endif;
                            else :
                                echo date_i18n(
                                    /* translators: Copyright date format, see https://secure.php.net/date */
                                    _x( 'Y', 'copyright date format', 'online-education-classes' )
                                );
                                ?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                                    <span><?php esc_html_e(' | Theme by ','online-education-classes') ?><?php esc_html_e('Legacy Themes','online-education-classes') ?></span>
                                <?php
                            endif;
                        ?>
                    </p>
                </div>
            </div>
        <?php    
    }
endif;
add_action( 'online_education_classes_action_footer', 'online_education_classes_footer_copyrights' );


/**
 * Page Title Settings
 */
if (!function_exists('online_education_classes_show_page_title')):
    function online_education_classes_show_page_title( $online_education_classes_blogtitle=false,$online_education_classes_archivetitle=false,$online_education_classes_searchtitle=false,$online_education_classes_pagenotfoundtitle=false ) {
        if(!is_front_page()){
            if ('color' === esc_html(get_theme_mod( 'online_education_classes_page_bg_radio','color' ))) {
                ?>
                    <div class="page-title" style="background:<?php echo sanitize_hex_color(get_theme_mod( 'online_education_classes_page_bg_color','#179BD7' )); ?>;">
                <?php
            }
            else if('image' === esc_html(get_theme_mod( 'online_education_classes_page_bg_radio','color' ))){
                $image= esc_url(get_template_directory_uri().'/img/start-bg.jpg');
                ?>
                <?php
                    if ( has_post_thumbnail()) {
                        $online_education_classes_featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                        ?>
                            <div class="page-title" style="background:url('<?php echo esc_url($online_education_classes_featured_img_url) ?>') no-repeat scroll center center / cover;"> 
                        <?php }
                    else{
                        ?>
                            <div class="page-title"  style="background:url('<?php echo esc_url($image ); ?>') no-repeat scroll center center / cover;">    
                        <?php } ?>                    
                <?php }
            else{ ?>
                <div class="page-title" style="background:#179BD7;"> 
                <?php } ?>
                <div class="content-section img-overlay">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <div class="section-title page-title"> 
                                    <?php
                                        if($online_education_classes_blogtitle){
                                            ?><h1 class="main-title"><?php single_post_title(); ?></h1><?php
                                        }
                                        if($online_education_classes_archivetitle){
                                            ?><h1 class="main-title"><?php the_archive_title(); ?></h1><?php
                                        }
                                        if($online_education_classes_searchtitle){
                                            ?><h1 class="main-title"><?php esc_html_e('SEARCH RESULTS','online-education-classes') ?></h1><?php
                                        }
                                        if($online_education_classes_pagenotfoundtitle){
                                            ?><h1 class="main-title"><?php esc_html_e('PAGE NOT FOUND','online-education-classes') ?></h1><?php
                                        }                                       
                                        
                                        if($online_education_classes_blogtitle==false && $online_education_classes_archivetitle==false && $online_education_classes_searchtitle==false && $online_education_classes_pagenotfoundtitle==false){
                                            ?><h1 class="main-title"><?php the_title(); ?></h1><?php
                                        }
                                    ?>                                                       
                                </div>                      
                            </div>
                        </div>
                    </div>  
                </div>
                </div>  <!-- End page-title --> 
            <?php
        }
    }
endif;
add_action('online_education_classes_get_page_title', 'online_education_classes_show_page_title');


/**
 * Home Banner Section
 */
if (! function_exists( 'online_education_classes_home_banner_section' ) ):
    function online_education_classes_home_banner_section() {
        ?>
        <section id="main-banner-wrap">
            <div class="slider-sec">
                <div class="owl-carousel">
                    <?php $online_education_classes_banner_count = get_theme_mod("online_education_classes_slider_increase");
                    for ($i = 1; $i <= $online_education_classes_banner_count; $i++) { ?>
                    <?php
                    $online_education_classes_banner_image = get_theme_mod( 'online_education_classes_banner_image'.$i, '' );
                    if ( ! empty( $online_education_classes_banner_image ) ) { ?>
                        <div class="banner-side-margin position-relative">
                            <div class="main-banner-inner-box">                   
                                <img src="<?php echo esc_url( $online_education_classes_banner_image ); ?>">
                            </div>
                            <?php
                            $online_education_classes_alignment_class = get_theme_mod( 'online_education_classes_slider_content_alignment', 'center' );
                            ?>
                            <div class="main-banner-content-box content-<?php echo esc_attr( $online_education_classes_alignment_class ); ?>">
                                <?php
                                    $online_education_classes_banner_small_heading = get_theme_mod( 'online_education_classes_banner_small_heading'.$i, '' );                        
                                    if ( ! empty( $online_education_classes_banner_small_heading ) ) { ?>
                                        <h6 class="bnr-sm-hd p-0 mb-0 mb-lg-4"><?php echo esc_html( $online_education_classes_banner_small_heading ); ?></h6>
                                <?php } ?>
                                <?php
                                $online_education_classes_banner_heading = get_theme_mod( 'online_education_classes_banner_heading'.$i, '' );                        
                                if ( ! empty( $online_education_classes_banner_heading ) ) {
                                    $excerpt_heading = wp_trim_words( $online_education_classes_banner_heading, 5, '...' );?>
                                    <h2 class="bnr-hd1 p-0 mb-0 mb-lg-4"><?php echo esc_html( $excerpt_heading ); ?></h2>
                                <?php } ?>
                               <div class="btn-box-slid">
                                    <?php
                                    $online_education_classes_banner_button_link = get_theme_mod( 'online_education_classes_banner_button_link'.$i, '' );
                                        if ( ! empty( $online_education_classes_banner_button_link ) ) { ?>
                                        <a class="btn-slid btn" href="<?php echo esc_url( $online_education_classes_banner_button_link ); ?>"><?php echo esc_html('Learn More','online-education-classes'); ?></a>
                                    <?php } ?>                                 
                                </div>
                            </div>    
                        </div>
                    <?php } } ?>
                </div>
            </div>
        </section>
        <?php
    }
endif;
add_action( 'online_education_classes_action_home_banner', 'online_education_classes_home_banner_section' );


/**
 * Home experiences Section
 */
if (! function_exists( 'online_education_classes_learning_experiences_section' ) ):
    function online_education_classes_learning_experiences_section() {
        ?>
    <section id="experiences-wrap">
        <div class="container">
            <div class="inner-wrap">
                <div class="experiences-head-box">
                    <?php
                        $online_education_classes_learning_experiences_small_heading = get_theme_mod( 'online_education_classes_learning_experiences_small_heading', '' );
                        if ( ! empty( $online_education_classes_learning_experiences_small_heading ) ) { ?>
                        <h6 class="expernc-sm-hd pb-0 m-0 pt-5"><?php echo esc_html( $online_education_classes_learning_experiences_small_heading ); ?></h6>
                    <?php } ?>
                    <?php
                        $online_education_classes_learning_experiences_main_heading = get_theme_mod( 'online_education_classes_learning_experiences_main_heading', '' );
                        if ( ! empty( $online_education_classes_learning_experiences_main_heading ) ) { ?>
                        <h3 class="expernc-main-hd pt-0 m-0"><?php echo esc_html( $online_education_classes_learning_experiences_main_heading ); ?></h3>
                    <?php } ?>
                </div>
                <div class="experiences-box pt-4">
                    <div class="owl-carousel">
                        <?php $online_education_classes_learning_experiences_count = get_theme_mod("online_education_classes_learning_experiences_increase");
                        for ($i = 1; $i <= $online_education_classes_learning_experiences_count; $i++) { ?>
                            <div class="serv-detail">
                                <div class="serv-img-box">
                                    <?php
                                    $online_education_classes_learning_experiences_image = get_theme_mod( 'online_education_classes_learning_experiences_image'.$i, '' );
                                    if ( ! empty( $online_education_classes_learning_experiences_image ) ) { ?>
                                        <img src="<?php echo esc_url( $online_education_classes_learning_experiences_image ); ?>">
                                    <?php } ?>    
                                    <div class="serv-title">
                                        <?php
                                            $online_education_classes_learning_experiences_inner_heading = get_theme_mod( 'online_education_classes_learning_experiences_inner_heading'.$i, '' );
                                            if ( ! empty( $online_education_classes_learning_experiences_inner_heading ) ) { ?>
                                            <h6 class="serv-inn-hd pt-3 m-0"><?php echo esc_html( $online_education_classes_learning_experiences_inner_heading ); ?></h6>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div> 
                        <?php } ?>
                    </div>
                </div>
            </div>                
        </div>
    </section>
    <?php    
    }
endif;
add_action( 'online_education_classes_action_learning_experiences', 'online_education_classes_learning_experiences_section' );

/**
 * Home page another adding Section
 */
if (! function_exists( 'online_education_classes_home_extra_section' ) ):
    function online_education_classes_home_extra_section() {
        ?>
        <div id="custom-home-extra-content" class="my-5">
            <div class="container">
              <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
              <?php endwhile; ?>
            </div>
        </div>
        <?php    
    }
endif;
add_action( 'online_education_classes_action_home_extra', 'online_education_classes_home_extra_section' );