jQuery(document).ready(function () {

    /* If there are required actions, add an icon with the number of required actions in the About affluent page -> Actions required tab */
    var affluent_nr_actions_required = affluentWelcomeScreenObject.nr_actions_required;

    if ((typeof affluent_nr_actions_required !== 'undefined') && (affluent_nr_actions_required != '0')) {
        jQuery('li.affluent-w-red-tab a').append('<span class="affluent-actions-count">' + affluent_nr_actions_required + '</span>');
    }


    /* Dismiss required actions */
    jQuery(".affluent-required-action-button").click(function () {

        var id = jQuery(this).attr('id'),
            action = jQuery(this).attr('data-action');
        jQuery.ajax({
            type      : "GET",
            data      : { action: 'affluent_dismiss_required_action', id: id, todo: action },
            dataType  : "html",
            url       : affluentWelcomeScreenObject.ajaxurl,
            beforeSend: function (data, settings) {
                jQuery('.affluent-tab-pane#actions_required h1').append('<div id="temp_load" style="text-align:center"><img src="' + affluentWelcomeScreenObject.template_directory + '/inc/admin/welcome-screen/img/ajax-loader.gif" /></div>');
            },
            success   : function (data) {
                location.reload();
                jQuery("#temp_load").remove();
                /* Remove loading gif */
            },
            error     : function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }
        });
    });
    
});
