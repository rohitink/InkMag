<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package InkMag
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
      <div id="footer-container">	
		<div class="site-info right">
			<?php do_action( 'inkmag_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'inkmag' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'inkmag' ), 'WordPress' ); ?></a>
			<div class='clear'></div>
			<?php printf( __( '%1$s Theme by %2$s', 'inkmag' ), 'InkMag', '<a href="http://github.com/rohitink/" rel="designer">Rohit Tripathi' ); ?>
		</div><!-- .site-info -->
        
        
        <div class='left user-text'>
        <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
        
        <div id='u_text'>
        	&copy; <?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        </div>
        </div>
      </div><!-- #footer-container-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>