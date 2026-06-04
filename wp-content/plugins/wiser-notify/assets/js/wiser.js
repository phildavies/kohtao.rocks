jQuery(document).ready(function(){
    jQuery("#api_form").submit(function(){
        var apiKey = jQuery("#api_key").val().trim();

        // Hide previous messages
        jQuery(".red-text").hide();
        jQuery(".success-msg").hide();

        // Validate: don't fire AJAX on empty input
        if(apiKey === ''){
            jQuery(".red-text").html('Please enter your API key.');
            jQuery(".red-text").show();
            return false;
        }

        // Show loading state
        var $btn = jQuery("#api_form .nf-btn-default");
        var originalText = $btn.text();
        $btn.prop('disabled', true).text('Verifying...');

        jQuery.ajax({
            url: ajaxVar.ajaxurl,
            type: "post",
            dataType: 'json',
            data: jQuery('#api_form').serialize(),
            success: function(res){
                if(res.success === true){
                    jQuery(".red-text").hide();
                    jQuery('.success-msg').show();
                } else {
                    jQuery(".red-text").html('Your API key is invalid. Please enter a valid API key.');
                    jQuery(".red-text").show();
                    jQuery('.success-msg').hide();
                }
            },
            error: function(){
                jQuery(".red-text").html('Something went wrong. Please try again.');
                jQuery(".red-text").show();
            },
            complete: function(){
                // Restore button state
                $btn.prop('disabled', false).text(originalText);
            }
        });
        return false;
    });
});
