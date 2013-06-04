<?php
/**
 * @package InkMag
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
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
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
      <?php if (has_post_thumbnail()) : ?>
	  	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
	  	<?php	
            the_post_thumbnail(array(150,150),array('class'=>"featuredimg"));
			?>
            </a>
            <?php endif; ?>
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'inkmag' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'inkmag' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

</article><!-- #post-## -->
