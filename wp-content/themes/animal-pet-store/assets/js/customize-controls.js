( function( api ) {

	// Extends our custom "animal-pet-store" section.
	api.sectionConstructor['animal-pet-store'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );