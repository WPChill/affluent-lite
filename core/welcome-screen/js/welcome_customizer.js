jQuery(document).ready(function () {
    var affluent_aboutpage = affluentWelcomeScreenCustomizerObject.aboutpage;
    var affluent_nr_actions_required = affluentWelcomeScreenCustomizerObject.nr_actions_required;

    /* Number of required actions */
    if ((typeof affluent_aboutpage !== 'undefined') && (typeof affluent_nr_actions_required !== 'undefined') && (affluent_nr_actions_required != '0')) {
        jQuery('#accordion-section-themes .accordion-section-title').append('<a href="' + affluent_aboutpage + '"><span class="affluent-actions-count">' + affluent_nr_actions_required + '</span></a>');
    }


});
