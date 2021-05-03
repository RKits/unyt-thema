<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>
<style>
/* .wrapper{
	background: <?php //echo $background?>;
} */
</style>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'unyt-thema' ); ?></a>
	<header class="header">
		<div id="header" class="container">
			<div class="header-menu">
			
				<!-- de foto voor de header -->
				<a href="<?php echo home_url(); ?>">
					<?php 
					 $image = get_header_image();
					?>
					<img class="content-image" src="<?php echo esc_url( $image );?>" alt="">
				</a>
				<!-- hamburger menu -->
				<div class="wrapper">
					<div class="hamburger" onclick="Hamburger(this);">
						<div class="bar1"></div>
						<div class="bar2"></div>
						<div class="bar3"></div>
			  		</div>
				</div>
				<!-- pagina's ophalen voor in de navigatie -->
				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu(
						array(
							'items_wrap' => false,
							'theme_location' => 'Primary',
							'container' => "ul",
							'menu_id' => 'primary-menu',
						));
					?>
				</nav>
			</div>
		</div>
	</header>
</div>

<!-- slick slider aanmaken -->
<?php
$args = [
   'posts_per_page'         => 5,
   'post_type'              => 'page',
   'update_post_meta_cache' => false,
   'update_post_term_cache' => false,
];

$post_query = new \WP_Query( $args );
?>
<div class="one-time">
   <?php
   if ( $post_query->have_posts() ) :
      while ( $post_query->have_posts() ) :
         $post_query->the_post();
         ?>
         <div class="card">
            <?php
            if ( has_post_thumbnail() ) {
               the_post_custom_thumbnail(
                  get_the_ID(),
                  'featured-thumbnail',
                  [
                     'sizes' => '(max-width: 350px) 350px, 233px',
                     'class' => 'w-100',
                  ]
               );
            } else {
               ?>
				<?php
					$image = get_field('slider-image');
				}
				?>
				<!-- html voor tekst in de slider -->
            	<div class="slider" style="background-image: url(<?php echo $image['url']; ?>)">
					<div class="slider-content">
            	   		<?php the_title( '<h3 class="slider-title">', '</h3>' ); ?>
				   		<p class="slider-text">
					   	<?php the_excerpt(); ?>
				   		</p>
            	   		<button class="medium-button-white">
            	   			<a href="<?php echo esc_url( get_the_permalink() ); ?>" class="button-a">
            	      			<?php esc_html_e( 'Klik hier', 'aquila' ); ?>
							</a>
						</button>
				</div>
        </div>
    </div>
      <?php
      endwhile;
   endif;
   wp_reset_postdata();
   ?>
</div>