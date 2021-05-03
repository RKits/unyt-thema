<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Unyt_thema
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php unyt_thema_post_thumbnail(); ?>

	<div class="main-page-content container">
		<div class="row">
			<div class="col-12 col-md-6 content-boxes">
				<h2 class="title"><?php the_field('titel-1'); ?></h2>
				<p class="content-text"><?php the_field('inhoud'); ?></p>
				<button class="medium-button-black">
            		<a href="<?php the_field('button-1'); ?>" class="button-a">
            			<?php esc_html_e( 'Klik hier', 'aquila' ); ?>
					</a>
				</button>
			</div>

			<div class="col-12 col-md-6 content-boxes">
				<?php $image = get_field('afbeelding-2'); ?>
				<img class="content-image" src="<?php echo $image['url'];?>" alt="">
			</div>

			<div class="col-xs-12 col-lg-6 col-xl-3 bootstrap-card">
				<div class="card" style="width: 18rem;">
				<?php $image = get_field('kaart-afbeelding-1'); ?>
				<img class="content-image" src="<?php echo $image['url'];?>" alt="">
				  <div class="card-body">
				    <h5 class="card-title"><?php the_field('kaart-titel-1'); ?></h5>
				    <p class="card-text"><?php the_field('kaart-inhoud-1'); ?></p>
					<button class="medium-button-black">
					<a href="<?php the_field('kaart-button-1'); ?>" class="button-a">
            				<?php esc_html_e( 'Klik hier', 'aquila' ); ?>
					</a>
					</button>	
				  </div>
				</div>
			</div>

			<div class="col-xs-12 col-lg-6 col-xl-3 bootstrap-card">
				<div class="card" style="width: 18rem;">
				<?php $image = get_field('kaart-afbeelding-2'); ?>
				<img class="content-image" src="<?php echo $image['url'];?>" alt="">
				<div class="card-body">
				    <h5 class="card-title"><?php the_field('kaart-titel-2'); ?></h5>
				    <p class="card-text"><?php the_field('kaart-inhoud-2'); ?></p>
					<button class="medium-button-black">
					<a href="<?php the_field('kaart-button-2'); ?>" class="button-a">
            				<?php esc_html_e( 'Klik hier', 'aquila' ); ?>
					</a>
					</button>	
				  </div>
				</div>
			</div>

			<div class="col-xs-12 col-lg-6 col-xl-3 bootstrap-card">
				<div class="card" style="width: 18rem;">
				<?php $image = get_field('kaart-afbeelding-3'); ?>
				<img class="content-image" src="<?php echo $image['url'];?>" alt="">
				  <div class="card-body">
				    <h5 class="card-title"><?php the_field('kaart-titel-3'); ?></h5>
				    <p class="card-text"><?php the_field('kaart-inhoud-3'); ?></p>
					<button class="medium-button-black">
					<a href="<?php the_field('kaart-button-3'); ?>" class="button-a">
            				<?php esc_html_e( 'Klik hier', 'aquila' ); ?>
					</a>
					</button>	
				  </div>
				</div>
			</div>

			<div class="col-xs-12 col-lg-6 col-xl-3 bootstrap-card">
				<div class="card" style="width: 18rem;">
				<?php $image = get_field('kaart-afbeelding-4'); ?>
				<img class="content-image" src="<?php echo $image['url'];?>" alt="">
				  <div class="card-body">
				    <h5 class="card-title"><?php the_field('kaart-titel-4'); ?></h5>
				    <p class="card-text"><?php the_field('kaart-inhoud-4'); ?></p>
					<button class="medium-button-black">
					<a href="<?php the_field('kaart-button-4'); ?>" class="button-a">
            				<?php esc_html_e( 'Klik hier', 'aquila' ); ?>
					</a>
					</button>	
				  </div>
				</div>
			</div>

			<div class="col-12 col-md-6 content-boxes">
				<?php $image = get_field('afbeelding-2'); ?>
				<img class="content-image" src="<?php echo $image['url'];?>" alt="">
			</div>

			<div class="col-12 col-md-6 content-boxes">
				<h2 class="title"><?php the_field('titel-2'); ?></h2>
				<p class="content-text"><?php the_field('inhoud-2'); ?></p>
				<button class="medium-button-black">
				<a href="<?php the_field('button-2'); ?>" class="button-a">	<?php esc_html_e( 'Klik hier', 'aquila' ); ?></a>
				</button>
			</div>
		</div>
	</div>
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'unyt-thema' ),
				'after'  => '</div>',
			)
			
		);
		?>
	</div><!-- .entry-content -->
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'unyt-thema' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article>#post-<?php the_ID(); ?>
