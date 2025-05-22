<?php
/**
 * The template for displaying archive pages.
 *
 * @package Online Education Classes
 */


get_header();
online_education_classes_before_title();
if(true===get_theme_mod( 'online_education_classes_enable_page_title',true)) :
	do_action('online_education_classes_get_page_title',false,true,false,false);
endif;
online_education_classes_after_title();

?>

<div id="primary" class="content-area">
    <div id="main" class="site-main" role="main">
        <div class="container-inner">
            <div id="blog-section">
                <div class="container">
                    <div class="row">
                        <?php
                            if('right'===esc_html(get_theme_mod('online_education_classes_blog_sidebar_layout','right'))){
                                ?>
                                    <?php
                                        if( is_active_sidebar('sidebar-1')){
                                            ?>
                                                <div id="post-wrapper" class="col-md-9">
                                                	<div class="archive heading">
			   											<h1 class="main-title"><?php the_archive_title(); ?></h1>
													</div>
                                                    <?php
                                                        if(have_posts())
                                                        {
                                                            while(have_Posts() ) {
                                                                the_post();
                                                                
                                                                get_template_part('template-parts/post/content',get_post_format());
                                                            }
                                                            
                                                            ?>
                                                                <nav class="pagination">
                                                                    <?php the_posts_pagination(); ?>
                                                                </nav>
                                                            <?php    
                                                        }
                                                    ?>                                                 
                                                </div>
                                                <div id="sidebar-wrapper" class="col-md-3">
                                                    <?php get_sidebar('sidebar-1'); ?>
                                                </div>
                                            <?php
                                        }
                                        else{
                                            ?>
                                                <div class="col-md-12">
                                                    <?php
                                                        if(have_posts()) {
                                                            while(have_posts()){
                                                                the_post();
                                                                
                                                                get_template_part('template-parts/post/content',get_post_format());
                                                            }
                                                            ?>
                                                                <nav class="pagination">
                                                                    <?php the_posts_pagination(); ?>
                                                                </nav>
                                                            <?php
                                                        }
                                                    ?>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                <?php
                            }
                            else if('left'=== esc_html(get_theme_mod('online_education_classes_blog_sidebar_layout','right'))) {
                                ?>
                                    <?php
                                        if(is_active_sidebar('sidebar-1')){
                                            ?>
                                                <div id="sidebar-wrapper" class="col-md-3">
                                                    <?php get_sidebar('sidebar-1'); ?>                                                 
                                                </div>
                                                <div id="post-wrapper" class="col-md-9">
                                                	<div class="archive heading">
   											 			<h1 class="main-title"><?php the_archive_title(); ?></h1>
													</div>
                                                    <?php
                                                        if(have_posts())
                                                        {
                                                            while(have_Posts() ) {
                                                                the_post();
                                                                
                                                                get_template_part('template-parts/post/content',get_post_format());
                                                            }
                                                            
                                                            ?>
                                                                <nav class="pagination">
                                                                    <?php the_posts_pagination(); ?>
                                                                </nav>
                                                            <?php    
                                                        }
                                                    ?>                                                 
                                                </div>
                                            <?php
                                        }
                                        else{
                                            ?>
                                                <div class="col-md-12">
                                                    <?php
                                                        if(have_posts()) {
                                                            while(have_posts()){
                                                                the_post();
                                                                
                                                                get_template_part('template-parts/post/content',get_post_format());
                                                            }
                                                            ?>
                                                                <nav class="pagination">
                                                                    <?php the_posts_pagination(); ?>
                                                                </nav>
                                                            <?php
                                                        }
                                                    ?>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                <?php
                            }
                            else if('three_colm'=== esc_html(get_theme_mod('online_education_classes_blog_sidebar_layout','right'))) {
                                ?>
                                    <?php
                                        if(is_active_sidebar('sidebar-1')||is_active_sidebar('sidebar-2')){
                                            ?>
                                                <div id="sidebar-wrapper" class="col-md-3">
                                                    <?php get_sidebar('sidebar-1'); ?>                                                 
                                                </div>
                                                <div id="post-wrapper" class="col-md-6">
                                                    <?php
                                                        if(have_posts())
                                                        {
                                                            while(have_Posts() ) {
                                                                the_post();
                                                                /*
                                                                 * Include the Post-Format-specific template for the content.
                                                                 * If you want to override this in a child theme, then include a file
                                                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                                                */
                                                                get_template_part('template-parts/post/content',get_post_format());
                                                            }
                                                            
                                                            ?>
                                                                <nav class="pagination">
                                                                    <?php the_posts_pagination(); ?>
                                                                </nav>
                                                            <?php    
                                                        }
                                                    ?>                                                 
                                                </div>
                                                <div class="col-md-3">
                                                    <div id="sidebar-wrapper" class="sidebar-wrapper-2">
                                                        <?php dynamic_sidebar( 'sidebar-2' ); ?>
                                                    </div>  
                                                </div>
                                            <?php
                                        }
                                        else{
                                            ?>
                                                <div class="col-md-12">
                                                    <?php
                                                        if(have_posts()) {
                                                            while(have_posts()){
                                                                the_post();
                                                                /*
                                                                 * Include the Post-Format-specific template for the content.
                                                                 * If you want to override this in a child theme, then include a file
                                                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                                                 */
                                                                get_template_part('template-parts/post/content',get_post_format());
                                                            }
                                                            ?>
                                                                <nav class="pagination">
                                                                    <?php the_posts_pagination(); ?>
                                                                </nav>
                                                            <?php
                                                        }
                                                    ?>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                <?php
                            }
                            else if('four_colm'=== esc_html(get_theme_mod('online_education_classes_blog_sidebar_layout','right'))) {
                                ?>
                                    <?php
                                        if(is_active_sidebar('sidebar-1')||is_active_sidebar('sidebar-2') || is_active_sidebar('sidebar-3')){
                                            ?>
                                            <div class="col-md-3">
                                                <div id="sidebar-wrapper">
                                                    <?php get_sidebar('sidebar-1'); ?> 
                                                </div>
                                                                                                
                                            </div>
                                            <div id="post-wrapper" class="col-md-3">
                                                <?php
                                                    if(have_posts())
                                                    {
                                                        while(have_Posts() ) {
                                                            the_post();
                                                            /*
                                                             * Include the Post-Format-specific template for the content.
                                                             * If you want to override this in a child theme, then include a file
                                                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                                            */
                                                            get_template_part('template-parts/post/content',get_post_format());
                                                        }
                                                        
                                                        ?>
                                                            <nav class="pagination">
                                                                <?php the_posts_pagination(); ?>
                                                            </nav>
                                                        <?php    
                                                    }
                                                ?>                                                 
                                            </div>
                                            <div class="col-md-3">
                                                <div id="sidebar-wrapper" class="sidebar-wrapper-2">
                                                    <?php dynamic_sidebar('sidebar-2'); ?> 
                                                </div>                                             
                                            </div>
                                            <div class="col-md-3">
                                                <div id="sidebar-wrapper" class="sidebar-wrapper-2">
                                                    <?php dynamic_sidebar('sidebar-3'); ?> 
                                                </div>                                             
                                            </div>
                                    <?php
                                        }
                                    else{
                                        ?>
                                            <div class="col-md-12">
                                                <?php
                                                    if(have_posts()) {
                                                        while(have_posts()){
                                                            the_post();
                                                            /*
                                                             * Include the Post-Format-specific template for the content.
                                                             * If you want to override this in a child theme, then include a file
                                                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                                             */
                                                            get_template_part('template-parts/post/content',get_post_format());
                                                        }
                                                        ?>
                                                            <nav class="pagination">
                                                                <?php the_posts_pagination(); ?>
                                                            </nav>
                                                        <?php
                                                    }
                                                ?>
                                            </div>
                                        <?php
                                        }
                                    ?>
                                <?php
                            }
                            else if('grid_layout'=== esc_html(get_theme_mod('online_education_classes_blog_sidebar_layout','right'))) {
                                ?>                                      
                                    <div id="post-wrapper">
                                        <div class="row">
                                        <?php
                                            if(have_posts())
                                            {
                                                while(have_Posts() ) {
                                                    the_post();
                                                    /*
                                                     * Include the Post-Format-specific template for the content.
                                                     * If you want to override this in a child theme, then include a file
                                                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                                    */
                                                    get_template_part('template-parts/grid-layout',get_post_format());
                                                }
                                                ?>
                                                    <nav class="pagination">
                                                        <?php the_posts_pagination(); ?>
                                                    </nav>
                                                <?php    
                                            }
                                        ?> 
                                        </div>
                                    </div>                                    
                                <?php
                            }
                            else if('grid_left_sidebar'===esc_html(get_theme_mod('online_education_classes_blog_sidebar_layout','right'))){
                                ?>
                                    <?php
                                        if( is_active_sidebar('sidebar-1')){
                                            ?>
                                                <div id="sidebar-wrapper" class="col-md-3">
                                                    <?php get_sidebar('sidebar-1'); ?>
                                                </div>
                                                <div id="post-wrapper" class="col-md-9">
                                                    <div class="row">
                                                    <?php
                                                        if(have_posts())
                                                        {
                                                            while(have_Posts() ) {
                                                                the_post();
                                                                /*
                                                                 * Include the Post-Format-specific template for the grid-layout.
                                                                 * If you want to override this in a child theme, then include a file
                                                                 * called grid-layout.php (where ___ is the Post Format name) and that will be used instead.
                                                                */
                                                                get_template_part('template-parts/grid-layout',get_post_format());
                                                            }
                                                            
                                                            ?>
                                                                <nav class="pagination">
                                                                    <?php the_posts_pagination(); ?>
                                                                </nav>
                                                            <?php    
                                                        }
                                                    ?>
                                                    </div>               
                                                </div>            
                                            <?php
                                        }
                                        else{
                                            ?>
                                                <div class="col-md-12">
                                                    <?php
                                                        if(have_posts()) {
                                                            while(have_posts()){
                                                                the_post();
                                                                /*
                                                                 * Include the Post-Format-specific template for the content.
                                                                 * If you want to override this in a child theme, then include a file
                                                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                                                 */
                                                                get_template_part('template-parts/post/content',get_post_format());
                                                            }
                                                            ?>
                                                                <nav class="pagination">
                                                                    <?php the_posts_pagination(); ?>
                                                                </nav>
                                                            <?php
                                                        }
                                                    ?>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                <?php
                            }
                            else if('grid_right_sidebar'===esc_html(get_theme_mod('online_education_classes_blog_sidebar_layout','right'))){
                                ?>
                                    <?php
                                        if( is_active_sidebar('sidebar-1')){
                                            ?> 
                                                <div id="post-wrapper" class="col-md-9">
                                                    <div class="row">
                                                    <?php
                                                        if(have_posts())
                                                        {
                                                            while(have_Posts() ) {
                                                                the_post();
                                                                /*
                                                                 * Include the Post-Format-specific template for the grid-layout.
                                                                 * If you want to override this in a child theme, then include a file
                                                                 * called grid-layout.php (where ___ is the Post Format name) and that will be used instead.
                                                                */
                                                                get_template_part('template-parts/grid-layout',get_post_format());
                                                            }
                                                            
                                                            ?>
                                                                <nav class="pagination">
                                                                    <?php the_posts_pagination(); ?>
                                                                </nav>
                                                            <?php    
                                                        }
                                                    ?>
                                                    </div>                  
                                                </div>
                                                <div id="sidebar-wrapper" class="col-md-3">
                                                    <?php get_sidebar('sidebar-1'); ?>
                                                </div>
                                            <?php
                                        }
                                        else{
                                            ?>
                                                <div class="col-md-12">
                                                    <?php
                                                        if(have_posts()) {
                                                            while(have_posts()){
                                                                the_post();
                                                                /*
                                                                 * Include the Post-Format-specific template for the content.
                                                                 * If you want to override this in a child theme, then include a file
                                                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                                                 */
                                                                get_template_part('template-parts/post/content',get_post_format());
                                                            }
                                                            ?>
                                                                <nav class="pagination">
                                                                    <?php the_posts_pagination(); ?>
                                                                </nav>
                                                            <?php
                                                        }
                                                    ?>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                <?php
                            }
                            else{
                                ?>
                                    <div class="col-md-12">
                                    	<div class="archive heading">
   											<h1 class="main-title"><?php the_archive_title(); ?></h1>
										</div>
                                        <?php
                                            if(have_posts()) {
                                                while(have_posts()) {
                                                    the_post();
                                                    
                                                    get_template_part('template-parts/post/content',get_post_format());
                                                }
                                                ?>
                                                    <nav class="pagination">
                                                        <?php the_posts_pagination(); ?>
                                                    </nav>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

get_footer();