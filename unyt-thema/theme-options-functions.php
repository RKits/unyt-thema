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
			<!-- de buttons om content te tonen -->
			<div class="col-2" style="display: flex; flex-direction:column;">
				<button type="button" class="btn btn-primary btn-lg kleuren" style="margin-bottom: 10px;">kleur</button>
				<button type="button" class="btn btn-primary btn-lg tekst" style="margin-bottom: 10px;">logo</button>
				<button type="button" class="btn btn-primary btn-lg logo" style="margin-bottom: 10px;">tekst</button>
					<?php
					submit_button(); 
		    		?>   
			</div>
			<!-- de verschillende opties die getoont worden bij het klikken van de buttons -->
				<!-- de div voor de kleur instellingen -->
				<div class="col-10 kleur-instellingen">
					<?php
						settings_fields("section");		
						do_settings_sections("theme-options");  
					?>
				</div>
				<!-- de div voor de logo instellingen -->
				<div class="col-10 disable logo-instellingen">
				<?php
						settings_fields('logo');
						do_settings_sections("logo-options");
					?>
				</div>
				<!-- de div voor de tekst instellingen -->
				<div class="col-10 disable tekst-instellingen">
				<?php
						settings_fields('tekst');
						do_settings_sections("text-options");
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
    	<input type="text" name="kleur_code" id="kleur_code" value="<?php echo get_option('kleur_code'); ?>" />
    <?php
}

function display_logo_element()
{
	?>
    	<input type="text" name="logo_afbeelding" id="logo_afbeelding" value="<?php echo get_option('logo_afbeelding'); ?>" />
    <?php
}
function display_tekst_element()
{
	?>
    	<input type="text" name="tekst_grootte" id="tekst_grootte" value="<?php echo get_option('tekst_grootte'); ?>" />
    <?php
}

function display_theme_panel_fields()
{
	add_settings_section("section", "kleur instellingen", null, "theme-options");
	add_settings_section("logo", "logo instellingen", null, "logo-options");
	add_settings_section("tekst", "tekst instellingen", null, "text-options");

	
	add_settings_field("kleur_code", "kleur code", "display_kleur_element", "theme-options", "section");
    add_settings_field("logo_afbeelding", "logo afbeelding", "display_logo_element", "logo-options", "logo");
	add_settings_field("tekst_grootte", "text grootte", "display_tekst_element", "text-options", "tekst");

    register_setting("section", "kleur_code");
    register_setting("logo", "logo_afbeelding");
	register_setting("tekst", "tekst_grootte");
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
  });

  $(".logo").click(function(){
      $(".kleur-instellingen").addClass("disable");
      $(".logo-instellingen").removeClass("disable");
      $(".tekst-instellingen").addClass("disable");
  });
  $(".tekst").click(function(){
      $(".kleur-instellingen").addClass("disable");
      $(".logo-instellingen").addClass("disable");
      $(".tekst-instellingen").removeClass("disable");
  });

});

</script>