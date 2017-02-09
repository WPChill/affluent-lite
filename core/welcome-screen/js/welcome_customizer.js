( function( api ) {

	// Extends our custom "affluent-pro-section" section.
	api.sectionConstructor['affluent-recomended-section'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );