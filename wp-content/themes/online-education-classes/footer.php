<?php
/**
 * The template for displaying the footer.
 *
 * @package Online Education Classes
 */

?>
	</div>
	<!-- Begin Footer Section -->
	<footer id="footer" class="online-education-classes-footer" itemscope itemtype="https://schema.org/WPFooter">
		<div class="container footer-widgets">
			<div class="row">
				<div class="footer-widgets-wrapper">
	                <?php get_sidebar( 'footer' ); ?>
	            </div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container copyrights">
				<div class="row">
					<div class="footer-copyrights-wrapper">
						<?php
							/**
							 * Hook - online_education_classes_action_footer.
							 *
							 * @hooked online_education_classes_footer_copyrights - 10
							 */
							do_action( 'online_education_classes_action_footer' );
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="scrl-to-top">
			<?php if(get_theme_mod('online_education_classes_enable_scrolltop',true)=="1"){ ?>
	   			<a id="scrolltop" class="btntoTop"><i class="bi bi-arrow-up-short"></i></a>
	  		<?php } ?>
		</div>
    </footer>
	<?php wp_footer(); ?>
</body>