<?php
include('http://192.168.64.2/Unyt%20thema/wp-admin/admin.php?page=theme-panel');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <h1>Kleur settings</h1>

    
			<!-- de verschillende opties die getoont worden bij het klikken van de buttons -->
				<!-- de div voor de kleur instellingen -->
				<div class="col-10 kleur-instellingen">
					<?php
						settings_fields("kleur_section");		
						do_settings_sections("theme-options");  
					?>
				</div>
				<!-- de div voor de logo instellingen -->
				<div class="col-10 disable logo-instellingen">
					<?php
						// settings_fields('logo_section');
						// do_settings_sections("logo-options");
						settings_fields("sectio");
						do_settings_sections("theme-optio");      

					?>
				</div>
				<!-- de div voor de tekst instellingen -->
				<div class="col-10 disable tekst-instellingen">
					<?php
						settings_fields('tekst_section');
						do_settings_sections("text-options");
					?>
				</div>




                
</body>
</html>