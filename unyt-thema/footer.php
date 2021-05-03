<?php
	// include("/Users/unyt/.bitnami/stackman/machines/xampp/volumes/root/htdocs/Unyt thema/wp-content/themes/unyt-thema/footer-options-functions.php");
?>

<style>

.geen-media{
	display: none;
}

</style>

<hr class="footer-hr">
<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="container footer-content">
				<div class="row footer-row">
					<div class="footer-columns col-xs-12 col-md-6 col-lg-3">
						<h5>Gegevens:</h5>
						<?php
							$adres = get_option('adres');
							$email = get_option('email');
							$telefoon = get_option('telefoon');
						?>
						<p><?php echo $adres ?></p>
						<p><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></p>
						<p><a href="tel:<?php echo $telefoon ?>"><?php echo $telefoon ?></a></p>
						

					</div>
					<div class="footer-columns col-xs-12 col-md-6 col-lg-3">

					<?php
						$disclaimer = get_option('disclaimer');
						$disclaimer_url = get_option('disclaimer_url');

						$voorwaarden = get_option('voorwaarden');
						$voorwaarden_url = get_option('voorwaarden_url');

						$privacy = get_option('privacy');
						$privacy_url = get_option('privacy_url');
					?>
						<h5>Legal</h5>
						<p><a target="_blank" href="<?php echo $disclaimer_url ?>"><?php echo $disclaimer ?></a></p>
						<p><a target="_blank" href="<?php echo $voorwaarden_url ?>"><?php echo $voorwaarden ?></a></p>
						<p><a target="_blank" href="<?php echo $privacy_url ?>"><?php echo $privacy ?></a></p>
					</div>


					<div class="footer-columns col-xs-12 col-md-6 col-lg-3">
						<h5>Volg ons</h5>
						<?php
						$facebook_url= get_option('facebook_url');
						$instagram_url = get_option('instagram_url');
						$twitter_url= get_option('twitter_url');
						$linkedin_url = get_option('linkedin_url');
						$youtube_url = get_option('youtube_url');

						$facebookcheck = get_option('facebookcheck');
						if($facebookcheck == 'on'){
							?>
							<a href="<?php echo $facebook_url ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
							<?php
						}


						$instacheck = get_option('instacheck');
						if($instacheck == 'on'){
							?>
							<a href="<?php echo $instagram_url ?>" target="_blank"><i class="fab fa-instagram"></i></a>
							<?php
						}


						$twittercheck = get_option('twittercheck');
						if($twittercheck == 'on'){
							?>
							<a href="<?php echo $twitter_url ?>" target="_blank"><i class="fab fa-twitter"></i></a>
							<?php
						}



						$linkedincheck = get_option('linkedincheck');
						if($linkedincheck == 'on'){
							?>
								<a href="<?php echo $linkedin_url ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
							<?php
						}


						$youtubecheck = get_option('youtubecheck');
						if($youtubecheck == 'on'){
							?>
								<a href="<?php echo $youtube_url ?>" target="_blank"><i class="fab fa-youtube"></i></a>
							<?php
						}
						?>
						

						
					</div>
					<div class="footer-columns col-xs-12 col-md-6 col-lg-3">
						<a href="#">
							<?php $image = get_header_image();?>
							<img src="<?php echo esc_url( $image );?>" alt="">
						</a>
					</div>
				</div>
				<div class="copyright">
					<p>Copyright © 2021 Unyt Marketing Bureau</p>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
