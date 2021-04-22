<!-- HOMEPAGINA -->
<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Unyt_thema
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<!-- <img src="http://192.168.64.2/Unyt%20thema/wp-content/themes/unyt-thema/Unyt_logo_FC-Klein.jpeg" alt=""> -->
	
	<!-- <div class="slider">
		<div class="container">
			<h2>Lorem ipsum</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit fuga quae deleniti consectetur ducimus tenetur
		 	itaque quas vero, ipsa hic mollitia enim sunt ipsam optio officiis rem explicabo repellendus soluta atque. Ipsa illo
		  	dolorum laudantium, sunt at harum numquam es</p>
		  <button>Klik hier</button>
		</div>

	</div> -->
	</header><!-- .entry-header -->


	<div class="entry-content">
		<!-- <?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'unyt-thema' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'unyt-thema' ),
				'after'  => '</div>',
			)
		);
		?> -->
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<!-- <?php unyt_thema_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
