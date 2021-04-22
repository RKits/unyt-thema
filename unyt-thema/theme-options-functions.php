<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>thema opties</title>
</head>
<body>

</body>
</html>

<style>
	.disable{
		display:none;
	}
</style>

<?php

/*
Plugin Name: thema opties
Description: Een plugin om het thema aan te passen
Author: Richard Kits
Version: 0.1
*/


function theme_settings_page()
{
    ?>
	    <div class="wrap">
	    <h1>Theme Panel</h1>
	    <form method="post" action="options.php">

		<div class="row">
			<div class="col-2" style="display: flex; flex-direction:column;">
			<button type="button" class="btn btn-primary btn-lg kleuren" style="margin-bottom: 10px;">kleur</button>
			<button type="button" class="btn btn-primary btn-lg tekst" style="margin-bottom: 10px;">Tekst</button>
			<button type="button" class="btn btn-primary btn-lg" style="margin-bottom: 10px;">Logo</button>

			<?php
			submit_button(); 
    

	        ?>   
			</div>

			<div class="col-10">

			<div class="kleur-instellingen">
			
			
			<?php

				            settings_fields("section");
							
							?>
			</div>
			<div class="tekst-instellingen">

							<?php
							settings_fields('tekst');
							?>

			</div>

							<?php


							do_settings_sections("theme-options");  

							

			?>
				    
			</div>
		</div>
       

		</div>
	<?php
}


function add_theme_menu_item()
{
	add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");






function display_kleur_element()
{
	?>
    	<input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
    <?php
}

function display_facebook_element()
{
	?>
    	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    <?php
}

function display_theme_panel_fields()
{
	add_settings_section("section", "kleur Settings", null, "theme-options");
	add_settings_section("tekst", "tekst Settings", null, "theme-options");

	
	add_settings_field("twitter_url", "Twitter Profile Url", "display_kleur_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "tekst");

    register_setting("section", "twitter_url");
    register_setting("tekst", "facebook_url");
}

add_action("admin_init", "display_theme_panel_fields");
    

?>

</form>


<script>
  $(document).ready(function(){
    $(".kleuren").click(function(){
      $(".kleur-instellingen").removeClass("disable");
      $(".logo-instellingen").addClass("disable");
      $(".tekst-instellingen").addClass("disable");
      $(".knop-instellingen").addClass("disable");
      $(".social-media-instellingen").addClass("disable");
  });

  $(".tekst").click(function(){
      $(".kleur-instellingen").addClass("disable");
      $(".logo-instellingen").removeClass("disable");
      $(".tekst-instellingen").addClass("disable");
      $(".knop-instellingen").addClass("disable");
      $(".social-media-instellingen").addClass("disable");
  });

});

</script>