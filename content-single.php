<?php
/**
 * @package InkMag
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php inkmag_posted_on(); ?>
            <?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'inkmag' ) );
				if ( $categories_list && inkmag_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( '<img class=icon src='.get_template_directory_uri().'/images/cat.png> %1$s', 'inkmag' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>
            
            <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<span class="comments-link"><?php echo '<img class=icon src='.get_template_directory_uri().'/images/comment.png>'; comments_popup_link( __( 'Leave a comment', 'inkmag' ), __( '1 Comment', 'inkmag' ), __( '% Comments', 'inkmag' ) ); ?></span>
		<?php endif; ?>

		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'inkmag' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="footer-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			//$category_list = get_the_category_list( __( ', ', 'inkmag' ) );

			?>
            <span class=tag>Written By: </span><?php echo the_author_posts_link(); ?>.
            <?php
			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'inkmag' ) );
			if ( '' != $tag_list ) {
					$meta_text = __( '<span class=tag>Tagged:</span> %1$s.', 'inkmag' );		
			}
			else 
				{
					$meta_text = __( '','inkmag');
				}
			printf($meta_text, $tag_list);
		?>

		<?php edit_post_link( __( 'Edit', 'inkmag' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
    <div class=space></div>
</article><!-- #post-## -->
