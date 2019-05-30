/*!
 * HWCOE UFL Child Theme scripts
 */

jQuery(function($) {
	
	if( $('div.codisplay').length ) {
		//MIXITUP FILTERING
		// Instantiate MixItUp:
		var mixer = mixitup('.speaker-tab');
	}

	
	//Data Tables
	$('#reg-table').DataTable( {
        "dom": 'lf<"table-wrapper"t>ip',
		//responsive: true,
		"pageLength": 100
	});
	
});