var formfield, tbframe_interval;
jQuery(document).ready(function() {
    // Bind the click to your upload image button
    jQuery('.upload_image_button').click(function() {
            // Which gets the name of the input field
            formfield = '.image_input';
            tb_show('', 'media-upload.php?post_id=0&#038;type=image&#038;TB_iframe=1');
            // Set an interval to change the button text from Insert Into Post
            tbframe_interval = setInterval(function() {
                jQuery('#TB_iframeContent').contents().find('.savesend .button').val('Use This Image');
                }, 2000);
            return false;
    });
    // Bind event to the focus of the input field to trigger the media upload
    jQuery('.image_input').focus(function() {
        jQuery('.upload_image_button').trigger("click");
    });
    // Bind click event to the delete button if it is already displayed
    jQuery("#preview_image .delete").click(function() {removeImage();});
    // Get original send to editor because we are about to override it
    window.original_send_to_editor = window.send_to_editor;
    // Custom function to override where media upload sends data
    window.send_to_editor = function(html) {
        // If formfield set, means we're using our custom function
        if (formfield) {
                // Have to add tags around html in order to be sure finds img src
                imgurl = jQuery('img','<p>' + html + '</p>').attr('src');
                // Send the img url to the input field
                jQuery(formfield).val(imgurl);
                // Remove the media upload box
                tb_remove();
                // Call our function to display image
                renderImage(imgurl);
                // Clear the formfield
                formfield = "";
                // Clear the interval that changes the button name
                clearInterval(tbframe_interval);
            // If not, use the original function
            } else {
                window.original_send_to_editor(html);
            }
      }
});

// function to load the image url into the correct input box
function renderImage(img) {
    // Load the image into the div we set up to display it
    // Also throws in a delete button to remove the image
    jQuery("#preview_image").html('<img src="' + img + '" alt="" /><a class="delete" title="Remove Image" href="javascript:void(0);">X</a>');
    // Bind the click to the delete in order to remove the image
    jQuery("#preview_image .delete").click(function() {removeImage();});
}

// Function we call when the delete button is clicked
function removeImage() {
    jQuery("#preview_image").html('');
    jQuery('.image_input').val('');
}