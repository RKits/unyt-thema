<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"/>

    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
/*
Plugin Name: Footer options
Description: Een plugin om de inhoud van de footer aan te passen
Author: Richard Kits
Version: 0.1
*/

add_action('admin_menu', 'Footer_options_tab');
 
function Footer_options_tab(){
    add_menu_page( 'Footer options Page', 'Footer options plugin 1', 'manage_options', 'Footer-options-plugin1', 'Footer_option_page' );
}

function Footer_option_page() {
    ?>
    <div class="wrap">
    <h1>aaa Custom Footer Options Page</h1>
    <form method="post" action="options.php">
    <?php
    // display settings field on Footer-option page
    settings_fields("Social-media-options-grp");
    // display all sections for Footer-options page
    do_settings_sections("Social-media-options");

    ?>

    <h3>Gegevens voor de website footer</h3>

    <?php

    // display settings field on Footer-option page
    settings_fields("gegevens-options-grp");
    // display all sections for Social-media-options page
    do_settings_sections("gegevens-options");

    ?>

    <h3>disclaimer, voorwaarden en privacybeleid</h3>

    <?php

    // display settings field on Footer-option page
    settings_fields("legal-options-grp");
    // display all sections for Social-media-options page
    do_settings_sections("legal-options");
    
    submit_button();
    ?>
    </form>
    </div>
    <?php
    }   
    function Footer_section_description(){
        $footer_description = "vul hier de gegevens van uw social media in.";

        echo '<p>'.$footer_description.'</p>';}
        function options_callback(){
    }
    function Footer_settings(){
        add_option('first_field_option',1);// add Footer option to database
        add_settings_section( 'first_section', 'New Footer Options Section',
        'Footer_section_description','Social-media-options');
        add_settings_field('first_field_option','','options_callback',
        'Social-media-options','first_section');//add settings field to the “first_section”
        register_setting( 'Social-media-options-grp', 'first_field_option');



        add_option('facebookcheck',1);// add Footer option to database
        register_setting( 'Social-media-options-grp', 'facebookcheck');

        // add settings filed with callback display_facebook_element.
        add_settings_field('facebookcheck', "Facebook", 'display_facebookcheckbox_element', 'Social-media-options', 'first_section');
        register_setting( 'Social-media-options-grp', 'facebookcheck');

        register_setting( 'Social-media-options-grp', 'facebook_url');





        add_option('instacheck',1);// add Footer option to database
        register_setting( 'Social-media-options-grp', 'instacheck');

        // add settings filed with callback display_insta_element.
        add_settings_field('instacheck', "Instagram", 'display_instacheck_element', 'Social-media-options', 'first_section');
        register_setting( 'Social-media-options-grp', 'instacheck');

        register_setting( 'Social-media-options-grp', 'instagram_url');



        add_option('twittercheck',1);// add Footer option to database
        register_setting( 'Social-media-options-grp', 'twittercheck');

        // add settings filed with callback display_twittercheck_element.
        add_settings_field('twittercheck', "twitter", 'display_twitter_element', 'Social-media-options', 'first_section');
        register_setting( 'Social-media-options-grp', 'twittercheck');

        register_setting( 'Social-media-options-grp', 'twitter_url');




        add_option('linkedincheck',1);// add Footer option to database
        register_setting( 'Social-media-options-grp', 'linkedincheck');

        // add settings filed with callback display_twittercheck_element.
        add_settings_field('linkedincheck', "linkedin", 'display_linkedin_element', 'Social-media-options', 'first_section');
        register_setting( 'Social-media-options-grp', 'linkedincheck');

        register_setting( 'Social-media-options-grp', 'linkedin_url');


        

        add_option('youtubecheck',1);// add Footer option to database
        register_setting( 'Social-media-options-grp', 'youtubecheck');

        // add settings filed with callback display_twittercheck_element.
        add_settings_field('youtubecheck', "youtube", 'display_youtube_element', 'Social-media-options', 'first_section');
        register_setting( 'Social-media-options-grp', 'youtubecheck');

        register_setting( 'Social-media-options-grp', 'youtube_url');
        
        
    }
    add_action('admin_init','Footer_settings');

    function display_facebookcheckbox_element(){
        $facebookcheck = get_option('facebookcheck');
        if($facebookcheck == 'on'){
            $facebookchecked = "checked";
            ?>
                <input type="checkbox" name="facebookcheck" id="facebookcheck" checked > </input>
            <?php
        }else{
            ?>
                <input type="checkbox" name="facebookcheck" id="facebookcheck"  > </input>
            <?php
        }
            ?>
                <input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
            <?php
    }


    

    //php code to take input from text field for facebook URL.
    function display_instacheck_element(){

        $instacheck = get_option('instacheck');
        if($instacheck == 'on'){
            $instachecked = "checked";
            ?>
                <input type="checkbox" name="instacheck" id="instacheck" checked > </input>
            <?php
        }else{
            ?>
                <input type="checkbox" name="instacheck" id="instacheck"  > </input>
            <?php
        }
        
        ?>
            <input type="text" name="instagram_url" id="instagram_url" value="<?php echo get_option('instagram_url'); ?>"  />
        <?php
    }   




    //php code to take input from text field for twitter URL.
    function display_twitter_element(){
        
        $twittercheck = get_option('twittercheck');
        if($twittercheck == 'on'){
            $twitterchecked = "checked";
            ?>
                <input type="checkbox" name="twittercheck" id="twittercheck" checked > </input>
            <?php
        }else{
            ?>
                <input type="checkbox" name="twittercheck" id="twittercheck"  > </input>
            <?php
        }
        
        ?>
            <input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>"  />
        <?php
    }




 


    //php code to take input from text field for facebook URL.
    function display_linkedin_element(){
        
        $linkedincheck = get_option('linkedincheck');
        if($linkedincheck == 'on'){
            $linkedinchecked = "checked";
            ?>
                <input type="checkbox" name="linkedincheck" id="linkedincheck" checked > </input>
            <?php
        }else{
            ?>
                <input type="checkbox" name="linkedincheck" id="linkedincheck"  > </input>
            <?php
        }
        
        ?>
            <input type="text" name="linkedin_url" id="linkedin_url" value="<?php echo get_option('linkedin_url'); ?>"  />
        <?php

    }      



    //php code to take input from text field for linkedin URL.
    function display_youtube_element(){

        $youtubecheck = get_option('youtubecheck');
        if($youtubecheck == 'on'){
            $youtubechecked = "checked";
            ?>
                <input type="checkbox" name="youtubecheck" id="youtubecheck" checked > </input>
            <?php
        }else{
            ?>
                <input type="checkbox" name="youtubecheck" id="youtubecheck"  > </input>
            <?php
        }
        
        ?>
            <input type="text" name="youtube_url" id="youtube_url" value="<?php echo get_option('youtube_url'); ?>"  />
        <?php

    }     
    








    function gegevens_section_description(){
        $gegevens_description = "vul hier gegevens van uw bedrijf in.<br>Deze gegevens komen in de footer van de pagina te staan.";

        echo '<p>'.$gegevens_description.'</p>';}

    function gegevens_settings(){
        add_option('second_field_option',1);// add Footer option to database
        add_settings_section( 'second_section', '',
        'gegevens_section_description','gegevens-options');
        
        register_setting( 'gegevens-options-grp', 'second_field_option');




    
        //add settings filed with callback display_adres_element.
        add_settings_field('adres', 'adres', 'display_adres_element', 'gegevens-options', 'second_section');
        register_setting( 'gegevens-options-grp', 'adres');

        //add settings filed with callback display_email_element.
        add_settings_field('email', 'email', 'display_email_element', 'gegevens-options', 'second_section');
        register_setting( 'gegevens-options-grp', 'email');
    
        //add settings filed with callback display_telefoon_element.
        add_settings_field('telefoon', 'telefoon', 'display_telefoon_element', 'gegevens-options', 'second_section');
        register_setting( 'gegevens-options-grp', 'telefoon');
        
        }
        add_action('admin_init','gegevens_settings');
   

    function display_adres_element(){
        //php code to take input from text field for adres.
        ?>
        <input type="text" name="adres" id="adres" value="<?php echo get_option('adres'); ?>" />
        <?php
    }     
    function display_email_element(){
        //php code to take input from text field for email.
        ?>
        <input type="text" name="email" id="email" value="<?php echo get_option('email'); ?>" />
        <?php
    }     

    function display_telefoon_element(){
        //php code to take input from text field for telefoon.
        ?>
        <input type="text" name="telefoon" id="telefoon" value="<?php echo get_option('telefoon'); ?>" />
        <?php
    }     







        function legal_section_description(){
        $gegevens_description = "vul hier gegevens van uw bedrijf in.<br>Deze gegevens komen in de footer van de pagina te staan.";

        echo '<p>'.$gegevens_description.'</p>';}

    function legal_settings(){
        add_option('third_field_option',1);// add Footer option to database
        add_settings_section( 'legal_section', '',
        'legal_section_description','legal-options');
        
        register_setting( 'legal-options-grp', 'third_field_option');



        //add settings filed with callback display_disclaimer_element.
        add_settings_field('disclaimer', 'Disclaimer', 'display_disclaimer_element', 'legal-options', 'legal_section');
        register_setting( 'legal-options-grp', 'disclaimer');

        //add settings filed with callback display_disclaimer_element.
        register_setting( 'legal-options-grp', 'disclaimer_url');



        //add settings filed with callback display_voorwaarden_element.
        add_settings_field('voorwaarden', 'voorwaarden', 'display_voorwaarden_element', 'legal-options', 'legal_section');
        register_setting( 'legal-options-grp', 'voorwaarden');

        //add settings filed with callback display_voorwaarden_element.
        register_setting( 'legal-options-grp', 'voorwaarden_url');
        


        //add settings filed with callback display_privacy_element.
        add_settings_field('privacy', 'privacy', 'display_privacy_element', 'legal-options', 'legal_section');
        register_setting( 'legal-options-grp', 'privacy');

        //add settings filed with callback display_privacy_element.
        register_setting( 'legal-options-grp', 'privacy_url');
        
        }

        add_action('admin_init','legal_settings');
   

    function display_disclaimer_element(){
        //php code to take input from text field for adres.
        ?>
        <input type="text" placeholder="tekst voor de link" name="disclaimer" id="disclaimer" value="<?php echo get_option('disclaimer'); ?>" />
        <input type="text" placeholder="url naar disclaimer" name="disclaimer_url" id="disclaimer_url" value="<?php echo get_option('disclaimer_url'); ?>" />
        <?php
    }     

    function display_voorwaarden_element(){
        //php code to take input from text field for adres.
        ?>
        <input type="text" placeholder="tekst voor de link" name="voorwaarden" id="voorwaarden" value="<?php echo get_option('voorwaarden'); ?>" />
        <input type="text" placeholder="url naar voorwaarden" name="voorwaarden_url" id="voorwaarden_url" value="<?php echo get_option('voorwaarden_url'); ?>" />
        <?php
    }     

    function display_privacy_element(){
        //php code to take input from text field for adres.
        ?>
        <input type="text" placeholder="tekst voor de link" name="privacy" id="privacy" value="<?php echo get_option('privacy'); ?>" />
        <input type="text" placeholder="url naar privacy" name="privacy_url" id="privacy_url" value="<?php echo get_option('privacy_url'); ?>" />
        <?php
    }     
?>