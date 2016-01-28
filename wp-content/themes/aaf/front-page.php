<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package AAF
 * @package AAF - 2013 1.0
 */
get_header();
?>

<div id="primary" class="content-area span8">
    <div id="content" class="site-content" role="main">

    	<?php 
    		$args = array( 'numberposts' => 4,
    						'cat' => -150 ); 
    		$lastposts = get_posts( $args ); 
    		$postcount = 0;
    		$idoflastpostshown = 0;
    		foreach($lastposts as $post) : setup_postdata($post); 
    		if( $postcount == 3 && !is_paged() ) {  //fourth post
				/*fourth post*/ 
				$idoflastpostshown = $post->ID;  
			} 
    	?>
    		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    			<header class="entry-header">
			        <h1 class="entry-title graybg"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			    </header><!-- .entry-header -->

				<aside class="front-thumb">
				
				<a href="<?php the_permalink() ?>">

					<?php 
					if( $postcount == 0 && !is_paged() ) { 
						/*first post*/ 
						the_post_thumbnail('large');  
					} else { 
						the_post_thumbnail('medium'); 
					}
					?>

				</a>
				</aside>

			    <div class="entry-content">
			        <?php 

			        	$excerpt = get_the_excerpt();

						if ( $excerpt != '' ) {
			        		the_excerpt('More');
			        	} else {
			        		$content = get_the_content('');
			        		echo '<p>' . wp_trim_words( $content, $num_words = 100, '' ) . '<br><br><a href="' . get_permalink() . '"><span class="meta-nav btn pull-right">READ MORE</span></a><p>';
			        	}
			        ?>
			        <div class="socialposticons visible-desktop">
			            <span class='st_facebook_hcount' displayText='Facebook'></span>&nbsp;&nbsp;&nbsp;&nbsp;
			            <span class='st_twitter_hcount' displayText='Tweet'></span>
			        </div>
			        <?php wp_link_pages( array('before' => '<div class="page-links">' . __( 'Pages:', 'AAF' ), 'after' => '</div>') ); ?>
			        <?php edit_post_link( __( 'Edit', 'AAF' ), '<span class="edit-link">', '</span>' ); ?>
			    </div><!-- .entry-content -->
			</article><!-- #post-<?php the_ID(); ?> -->
    	<?php 
    		$postcount++;
    		endforeach; 
    	?>

<div class="row-fluid">
<a href="http://richmondpulse.org/2016"><span class="meta-nav btn btn-load-more span11">OLDER ARTICLES</span></a>
<br><br>
</div>


	<!-- <h1 class="sectiontitle">Featured Video</h1> -->

		<?php 	//latest updates arguments
			$args = array(
				'category_name' => 'video',
				'posts_per_page' => 1
			);
		
			// The Query
			$querylatestupdates = new WP_Query( $args );
		
			// The Loop
			while ( $querylatestupdates->have_posts() ) :
				$querylatestupdates->the_post();
				get_template_part( 'content', 'video' );
			endwhile;
			?>



    </div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<div class="hidden-desktop sidebarmobile"><?php get_sidebar('mobile'); ?></div>
<div class="visible-desktop sidebardesktop span4"><?php get_sidebar('desktop'); ?></div>
<?php get_footer(); ?>