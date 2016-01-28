<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'AAF' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
    </header><!-- .entry-header -->

    <div class="entry-meta">
        <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>

            <?php AAF_posted_on(); ?>

            <?php
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list( __( ', ', 'AAF' ) );
            if ( $categories_list ) :
                ?>
                <span class="cat-links">
                    <?php printf( __( '%1$s', 'AAF' ), $categories_list ); ?>
                </span>
            <?php endif; // End if categories ?>

            <?php edit_post_link( __( 'Edit', 'AAF' ), '<span class="sep"> | </span><span class="edit-link"> ', '</span>' ); ?>

        <?php endif; // End if 'post' == get_post_type() ?>
    </div><!-- .entry-meta -->

    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
<aside class="front-thumb">
	<?php 
	the_post_thumbnail('medium'); 
	?>
</aside>

            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
    <?php else : ?>
        <div class="entry-content">

<aside class="front-thumb">
	<?php 
	the_post_thumbnail('medium'); 
	?>
</aside>



  <?php 

			        	$excerpt = get_the_excerpt();

						if ( $excerpt != '' ) {
			        		the_excerpt('More');
			        	} else {
			        		$content = get_the_content('');
			        		echo '<p>' . wp_trim_words( $content, $num_words = 100, '' ) . '<br><br><a href="' . get_permalink() . '"><span class="meta-nav btn pull-right">READ MORE</span></a><p>';
			        	}
			        ?>



            <?php wp_link_pages( array('before' => '<div class="page-links">' . __( 'Pages:', 'AAF' ), 'after' => '</div>') ); ?>
        </div><!-- .entry-content -->
    <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
